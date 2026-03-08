<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::latest('created_at')->first();
        if ($contact) {
            $data['contact']    = $contact;
            $data['title']      = "Contact View";
            $data['page']       = "Contact";
            return view('admin.contact.view',$data);
        } else {
            return redirect()->route('contact.create');
        }       
    }

    public function createOrEdit($id = null)
    {
        $contact = $id ? Contact::findOrFail($id) : new Contact();
        $data['title'] = $id ? "Edit Contact" : "Create Contact";
        $data['contact'] = $contact;
        $data['page']   = "Contact";
        return view('admin.contact.create', $data);
    }

    public function storeOrUpdate(Request $request)
    {
        $validated = $request->validate([
            'emails'    => 'nullable|array',
            'emails.*'  => 'nullable|string|max:1000',
            'phones'    => 'required|array',
            'phones.*'  => 'nullable|string|max:1000',
            'location'  => 'nullable|string|max:1000',
            'address'   => 'required|string|max:500',
            'facebook'  => 'nullable|string|max:500',
            'instagram' => 'nullable|string|max:500',
            'linkedin'  => 'nullable|string|max:500',
            'twitter'   => 'nullable|string|max:500',
            'youtube'   => 'nullable|string|max:500',
        ]);
        
        $isNew  = empty($request->id);

        $data = [
            'emails'    => array_values(array_filter($validated['emails'] ?? [])),
            'phones'    => array_values(array_filter($validated['phones'] ?? [])),
            'location'  => $validated['location'] ?? null,
            'address'   => $validated['address'],
            'facebook'  => $validated['facebook'] ?? null,
            'instagram' => $validated['instagram'] ?? null,
            'linkedin'  => $validated['linkedin'] ?? null,
            'twitter'   => $validated['twitter'] ?? null,
            'youtube'   => $validated['youtube'] ?? null,
        ];

        $contact = Contact::updateOrCreate(
            ['id' => $request->id],
            $data
        );

        if ($contact) {
            return redirect()->route('contact.show', $contact->id)
                ->with('success', $isNew ? 'Contact created successfully.' : 'Contact updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update contact details.');
        }
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        $data['contact']    = $contact;
        $data['title']      = "Contact View";
        $data['page']       = "Contact";
        return view('admin.contact.view',$data);      
    }
    public function destroy($id=null)
    {
        // Find the model instance by ID
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Record deleted successfully');
    }
}
