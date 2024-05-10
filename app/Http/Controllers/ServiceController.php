<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\ParagrapheService;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Liste des services";
        $services = Service::all();
        return view('nosServices.index', compact('title', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Création de service";
        return view('nosServices.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
        ]);
        $service = new Service();
        $service->titre = $request->titre;
        $service->titre2 = $request->titre2;
        $service->courte_description = $request->courte_description;
        if ((request()->hasFile('image_service') && request()->file('image_service')->isValid())) {
            $directory = 'image_services';
            $service->path = $path =  request()->file('image_service')->store($directory);
            $service->url = Storage::url($path);
            $ext = request()->file('image_service')->extension();
            $thumbnailImage = Image::make(Storage::get($service->path))->fit(1920, 835, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($ext, 50);
            $filname = Str::uuid() . '.' . $ext;
            $thumbnailPath = $directory . '/thumbnails/' . $filname;
            Storage::put($thumbnailPath, $thumbnailImage);
            $service->thumb_path = $thumbnailPath;
            $service->thumb_url = Storage::url($thumbnailPath);
        }
        $service->save();
        $success = "Le service a été ajouté avec succès";
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
        $title = "Modification du service";
        $service = Service::findOrFail($id);
        return view('nosServices.edit', compact('title', 'service'));
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
        // $request->validate([
        //     'titre' => 'required|string|max:255',
        // ]);

        // $service = Service::findOrFail($id);
        // $service->titre = $request->titre;
        // $service->save();

        // $success = "Le service a été mis à jour avec succès";
        // return back()->withSuccess($success);
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
    // public function paragraphe($id)
    // {
    //     $title = "Liste des paragraphes";
    //     $service = Service::findOrFail($id);
    //     $paragraphes = $service->paragrapheServices;
    //     return view('nosServices.indexParagraphe', compact('title', 'service', 'paragraphes'));
    // }

    // public function createParagraphe($id)
    // {
    //     $title = "Création de paragraphe";
    //     $service = Service::findOrFail($id);
    //     return view('nosServices.createParagraphe', compact('title', 'service'));
    // }
    // public function storeParagraphe(Request $request)
    // {
    //     $request->validate([
    //         'service_id' => 'required|string|max:255',
    //         'contenu' => 'required|string',
    //     ]);
    //     ParagrapheService::create([
    //         'contenu' => $request->contenu,
    //         'service_id' => $request->service_id,
    //     ]);
    //     $success = "Le paragraphe a été ajouté avec succès";
    //     return back()->withSuccess($success);
    // }
    // public function editParagraphe($id)
    // {
    //     $title = "Modification du paragraphe";
    //     $paragraphe = ParagrapheService::findOrFail($id);
    //     $service = Service::findOrFail($paragraphe->service_id);
    //     return view('nosServices.editParagraphe', compact('title', 'paragraphe', 'service'));
    // }
    // public function updateParagraphe(Request $request, $id)
    // {
    //     $data = $request->validate([
    //         'service_id' => 'required|integer',
    //         'contenu' => 'required|string',
    //     ]);
    //     $paragraphe = ParagrapheService::findOrFail($id);
    //     $paragraphe->update($data);
    //     $success = "Le paragraphe a été mis à jour avec succès";
    //     return back()->withSuccess($success);
    // }
}
