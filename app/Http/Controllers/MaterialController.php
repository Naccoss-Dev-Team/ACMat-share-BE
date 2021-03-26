<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:pdf,docs,docx',
            'folder' => 'required'
        ]);
        $folder = Folder::firstOrcreate(['name' => $request->folder]);
        try {
            $material = $request->file->Store('materials');
            Material::create([
                'url' => $material,
                'name' => $request->file->getClientOriginalName(),
                'folder_id' => $folder->id,
                'owner' => auth()->user()->id,
                'file_extension' => $request->file->extension()
            ]);
            $request->session()->flash('success', 'File Successfully Uploaded');
        }catch (\Exception $e) {
            $request->session()->flash('error', $e->getMessage());
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        //
    }

    public function myFiles()
    {
        $data['materials'] = Material::whereOwner(auth()->user()->id)->get();
        return view('my_files', $data);
    }

    public function download($id)
    {
        $material = Material::find($id);
        $path= storage_path('app/'.$material->url);

        return response()->download($path);
    }

    public function downloadWindow($id)
    {
        $material['material'] = Material::find($id);
        return view('download', $material);
    }
}
