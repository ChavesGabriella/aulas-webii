<?php

namespace App\Http\Controllers;
use App\Models\Eixo;

use Illuminate\Http\Request;

class EixoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Eixo::with('curso')->get();
        return view('eixo.index', compact(['data']));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eixo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eixo = new Eixo();
        $eixo->name = $request->name;
        $eixo->description = $request->description;
        $eixo->save();

        return redirect()->route('eixo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eixo= Eixo::find($id);

        if(isset($eixo)){
            return view('eixo.show',compact('eixo'));
        }
        return "ERROR";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eixo= Eixo::find($id);

        if(isset($eixo)){
            return view('eixo.edit',compact('eixo'));
    }
    return "ERROR";
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
        $eixo= Eixo::find($id);

        if(isset($eixo)){
            $eixo->name = $request->name;
        $eixo->description = $request->description;
        $eixo->save();
        return redirect()->route('eixo.index');
        }
        $eixo->name = $request->name;
        $eixo->description = $request->description;
        $eixo->save();
        return redirect()->route('eixo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eixo= Eixo::find($id);
        if(isset($eixo)){
            $eixo->delete();
            return redirect()->route('eixo.index');
        }
        return "ERROR";
    }
}
