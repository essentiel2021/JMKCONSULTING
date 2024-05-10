<?php

namespace App\Http\Controllers;

use App\Models\Propo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PropoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Liste des A-propos";
        $propos = Propo::all();
        return view('propo.index', compact('title', 'propos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cration de A-propos";
        return view('propo.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'titre' => 'required',
            'courte_description' => 'required',
        ]);
        $propo = new Propo();
        $propo->titre = $request->titre;
        $propo->titre2 = $request->titre2;
        $propo->courte_description = $request->courte_description;
        if ((request()->hasFile('image_propo') && request()->file('image_propo')->isValid())) {
            $directory = 'imageApropos';
            $propo->path = $path =  request()->file('image_propo')->store($directory);
            $propo->url = Storage::url($path);
            $ext = request()->file('image_propo')->extension();
            $thumbnailImage = Image::make(Storage::get($propo->path))->fit(470, 467, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($ext, 50);
            $filname = Str::uuid() . '.' . $ext;
            $thumbnailPath = $directory . '/thumbnails/' . $filname;
            Storage::put($thumbnailPath, $thumbnailImage);
            $propo->thumb_path = $thumbnailPath;
            $propo->thumb_url = Storage::url($thumbnailPath);
        }
        $propo->save();
        $success = "A-propos a été ajouté avec succès";
        return back()->withSuccess($success);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
