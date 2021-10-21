<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $registros = Registro::orderby('id','desc')->paginate(10);
        return view('registros.index',compact('registros'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' =>'required',
            'description' => 'required',
            'url' => 'required',
            'user'=> 'required',
            'pasword'=> 'required'
            ]);

        $registro = new Registro();
        $registro->name = $request->name;
        $registro->url = $request->url;
        $registro->user = $request->user;
        $registro->pasword = $request->pasword;
        $registro->status = 1;
        $registro->description = $request->description;
        $registro->users_id = 1;

        $registro->save();

        return redirect()->route('registros.show',$registro);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $registro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $registro = Registro::find($id);
         // ['curso'=>$registro]
        return view('registros.show',compact('registro'));     
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
        $registro = Registro::find($id);
        //return $registro;
        return view('registros.edit',compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $registro)
    {
        $request->validate([
            'name' =>'required',
            'description' => 'required',
            'url' => 'required',
            'user'=> 'required',
            'pasword'=> 'required'
            ]);
        //
        $registro->name = $request->name;
        $registro->url = $request->url;
        $registro->user = $request->user;
        $registro->description = $request->description;
        $registro->pasword = $request->pasword;
        //$registro-> = $request->name;

        $registro->save();
        $registros = Registro::paginate();
        return view('registros.index',compact('registros'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        //
        $registro->delete();
        $registros=Registro::orderby('id','desc')->paginate(10);
        return redirect()->route('registros.index');
    }
}
