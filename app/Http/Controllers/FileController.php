<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function create(){
        return view('files.create');
    }

    public function store(Request $request)

    {

        $this->validate($request, [

            'filename' => 'required'
            //'filename.*' => 'mimes:doc,pdf,docx,zip'

        ]);


        if($request->hasfile('filename'))
        {

            foreach($request->file('filename') as $file)
            {
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/files/', $name);
                $data[] = $name;
            }
        }

        $file= new File();
        $file->filename=json_encode($data);


        $file->save();

        return back()->with('success', 'Your files has been successfully added');
    }
}
