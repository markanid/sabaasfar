<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Banner;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Laravel\Facades\Image;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::oldest('created_at')->get();
        if ($sliders!=NULL && !$sliders->isEmpty()) {
            $data['sliders']    = $sliders;
            $data['title']      = "Sliders List";
            $data['page']       = "Sliders";
            return view('admin.sliders.index',$data);
        } else {
            return redirect()->route('sliders.create');
        }       
    }

    public function createOrEdit($id = null)
    {
        $slider         = $id ? Slider::findOrFail($id) : new Slider();
        $data['title']  = $id ? "Edit Slider" : "Create Slider";
        $data['slider'] = $slider;
        $data['page']   = "Sliders";
        return view('admin.sliders.create', $data);
    }

    public function storeOrUpdate(Request $request)
    {
        $validated = $request->validate([
            'header'        => 'required|string',
            'description'   => 'required|string',
            'slider'        => 'image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10240',
        ]);

        $isNew  = empty($request->id);
        $slider = Slider::find($request->id);

        if ($request->hasFile('slider')) {
            if ($slider && $slider->slider) {
                Storage::disk('public')->delete('sliders/' . $slider->slider);
            }
            $image = $request->file('slider');
            try {
                    $filename = time() . '_' . Str::random(8) . '.webp';
                    $path = storage_path('app/public/sliders/' . $filename);
                    Image::read($image)->toWebp(90)->save($path);
                } catch (\Exception $e) {
                    // WebP conversion failed, fallback to original format
                    $ext = $image->getClientOriginalExtension();
                    $filename = time() . '_' . Str::random(8) . '.' . $ext;
                    $path = storage_path('app/public/sliders/' . $filename);
            
                    // Save original format
                    Image::read($image)->save($path);
                }
            $validated['slider'] = $filename; // Save filename to database
        }

        if ($isNew) {
            $lastSlider = Slider::latest('id')->first();
            if ($lastSlider && preg_match('/Slider_(\d+)/', $lastSlider->slider_label, $matches)) {
                $nextNumber = (int)$matches[1] + 1;
            } else {
                $nextNumber = 1;
            }
            $sliderLabel = 'Slider_' . $nextNumber;
        } else {
            $sliderLabel = $slider->slider_label; // retain existing
        }

        $validated['slider_label'] = $sliderLabel;
        $slider = Slider::updateOrCreate(
            ['id' => $request->id ?? null], 
            $validated
        );
        if ($slider) {
            return $isNew
                ? redirect()->route('sliders.index')->with('success', 'Slider created successfully.')
                : redirect()->route('sliders.index')->with('success', 'Slider details updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update slider details.');
        }
    }

    public function show($id)
    {
        $sliders = Slider::findOrFail($id);
        $data['sliders']    = $sliders;
        $data['title']      = "Sliders View";
        $data['page']       = "Sliders";
        return view('admin.sliders.view',$data);      
    }
    public function destroy($id=null)
    {
        $slider = Slider::findOrFail($id);
        if (!empty($slider->slider) && Storage::disk('public')->exists('sliders/' . $slider->slider)) {
            Storage::disk('public')->delete('sliders/' . $slider->slider);
        }
        $slider->delete();
        return redirect()->route('sliders.index')->with('success', 'Record deleted successfully');
    }
}
