<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'contact' => 'required|numeric|digits:10',
            'email' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5000',
        ]);
        $content=new Schools();
        $message="School not added successfully";
        $content->name = $request->input('name');
        $content->address = $request->input('address');
        $content->city = $request->input('city');
        $content->state = $request->input('state');
        $content->contact = $request->input('contact');
        $content->email_id = $request->input('email');
        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename="School".rand().time().".".$request->image->extension(); //creating file name
            $file->move('school_images/', $filename);  //moving files to public
            $content->image = $filename;
            $content->save();    //updating record
            $message='School added Successfully';
        }
        return redirect()->back()->with('error',$message);
    }

    //displays all schools
    public function show()
    {
        $schools=Schools::all();
        return view('show_schools',compact(['schools']));
    }
}
