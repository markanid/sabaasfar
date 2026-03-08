<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Validation\ValidationException;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::oldest('created_at')->get();
        $data = [
            'projects' => $projects,
            'title'    => 'Project List',
            'page'     => 'Project'
        ];
        return view('admin.projects.index', $data);   
    }

    public function createOrEdit($id = null)
    {
        $project = $id ? Project::with('category')->findOrFail($id): new Project();
        $categories         = Category::all();
        $data['title']      = $id ? "Edit Project" : "Create Project";
        $data['categories'] = $categories;
        $data['project']    = $project;
        $data['page']       = "Project";
        return view('admin.projects.create', $data);
    }

    public function storeOrUpdate(Request $request)
    {
        try {
            $validated = $request->validate([
                'name'          => 'required|string|max:100',
                'category_id'   => 'required|integer',
                'featured'      => 'nullable|boolean',
                'description'   => 'required|string|max:500',
                'image'         => 'image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10240', // 10MB
                'image_alt'     => 'required|string|max:500', 
                'keywords'      => 'nullable|string',
            ]);
        } catch (ValidationException $e) {
            dd($e->errors());
        }

        $isNew      = empty($request->id);
        $project    = $isNew ? new Project() : Project::findOrFail($request->id);

        if ($request->hasFile('image')) {
            if (!$isNew && $project->desktop_image) {
                Storage::disk('public')->delete('projects/' . $project->image);
            }
            $image = $request->file('image');
            try {
                    $filename = time() . '_' . Str::random(8) . '.webp';
                    $path = storage_path('app/public/projects/' . $filename);
                    Image::read($image)->toWebp(90)->save($path);
                } catch (\Exception $e) {
                    // WebP conversion failed, fallback to original format
                    $ext = $image->getClientOriginalExtension();
                    $filename = time() . '_' . Str::random(8) . '.' . $ext;
                    $path = storage_path('app/public/projects/' . $filename);
            
                    // Save original format
                    Image::read($image)->save($path);
                }
            $validated['image'] = $filename; // Save filename to database
        }
        $validated['slug'] = Str::slug($request->name, '-');

        $project = Project::updateOrCreate(
            ['id' => $request->id ?? null], 
            $validated
        );

        return redirect()->route('projects.index')->with(
            $isNew ? 'success' : 'success',
            $isNew ? 'Project created successfully.' : 'Project details updated successfully.'
        );
    }

    public function show($slug=null)
    {
        $project = Project::with('category')->where('slug', $slug)->firstOrFail();
        $data['project']    = $project;
        $data['title']      = "Project View";
        $data['page']       = "Project";
        return view('admin.projects.view',$data);      
    }
    
    public function destroy($id=null)
    {
        $project = Project::findOrFail($id);
        if (!empty($project->image) && Storage::disk('public')->exists('projects/' . $project->image)) {
            Storage::disk('public')->delete('projects/' . $project->image);
        }
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Record deleted successfully');
    }
}
