<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

class adddataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();
        return view('data.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
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
          'nama' => 'required',
          'nama_project' => 'required',
          'about' => 'required',
          'sc' => 'required',
          'demo' => 'required',
        ]);
        Data::create($request->all());
        return redirect('/projects')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        return view('data.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('data.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
      Data::where('id', $data->id)
          -> update([
            'nama' => $request->nama,
            'nama_project' => $request->nama_project,
            'about' => $request->about,
            'sc' => $request->sc,
            'demo' => $request->demo,
            'access' => $request->access,
          ]);
          return redirect('/projects')->with('status','Data Berhasil Diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        Data::destroy($data->id);
        return redirect('projects');
    }
}
