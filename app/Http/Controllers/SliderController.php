<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Liste des sliders";
        $sliders = Slider::all();
        return view('slider.index', compact('title', 'sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cration de slider";
        // dd('hello');
        return view('slider.create', compact('title'));
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
            'contenu' => 'required',
        ]);
        $slider = new Slider();
        $slider->titre = $request->titre;
        $slider->contenu = $request->contenu;
        $slider->titre2 = $request->titre2;
        $slider->titre3 = $request->titre3;
        if ((request()->hasFile('slide') && request()->file('slide')->isValid())) {
                $directory = 'slides';
                $slider->path = $path =  request()->file('slide')->store($directory);
                $slider->url = Storage::url($path);
            $ext = request()->file('slide')->extension();
            $thumbnailImage = Image::make(Storage::get($slider->path))->fit(1920, 835, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($ext, 50);
            $filname = Str::uuid() . '.' . $ext;
            $thumbnailPath = $directory . '/thumbnails/' . $filname;
            Storage::put($thumbnailPath, $thumbnailImage);
            $slider->thumb_path = $thumbnailPath;
            $slider->thumb_url = Storage::url($thumbnailPath);
        }
        $slider->save();
        $success = "Le slider a été ajouté avec succès";
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
        $title = "Détails du slider";
        $slider = Slider::find($id);
        return view('slider.show', compact('title', 'slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Modification du slider";
        $slider = Slider::find($id);
        return view('slider.edit', compact('title', 'slider'));
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
