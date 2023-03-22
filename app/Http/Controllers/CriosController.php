<?php

namespace App\Http\Controllers;

use App\Models\Crios;
use App\Http\Requests\StoreCriosRequest;
use App\Http\Requests\UpdateCriosRequest;
use App\Http\Requests\UpdateProdusRequest;
use Spatie\Image\Image;

class CriosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crioses = Crios::get();
        return view('admin.index',[
            'crioses'=>$crioses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCriosRequest $request)
    {
        $crios = new Crios();
            $crios->titlu = $request->titlu;
            $crios->descriere = $request->descriere;
            /** Pentru salvarea imaginii **/
            $crios->img = time().time().'.'
                .$request->file('img')->getClientOriginalExtension();
        $request->file('img')->move('imagini/', time().time().'.'
            .$request->file('img')->getClientOriginalExtension());
        $crios->save();
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Crios $crios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $crios= Crios::findOrFail($id);
        return view('admin.edit', ['admin'=>$crios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCriosRequest $request, $id)
    {
        $crios = Crios::findOrFail($id);
        unlink('imagini/'.$crios->img);
        $crios->titlu = $request->titlu;
        $crios->descriere = $request->descriere;
        $crios->img = time().time().'.'
        .$request->file('img')->getClientOriginalExtension();
        
       
        $request->file('img')->move('imagini/', time().time().'.'
            .$request->file('img')->getClientOriginalExtension());
        $crios->update();
        return redirect()->route('admin.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $crios = Crios::findOrFail($id);
        unlink('imagini/'.$crios->img);
        $crios->Delete();
        return redirect()->route('admin.index');
    }
}