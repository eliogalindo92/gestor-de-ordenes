<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planes = Plan::orderByDesc('id')->get();
        $entidadController = new EntidadController();
        $entidades = $entidadController->index();
        return view('plan.gestionar_plan', compact('planes'), compact('entidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entidadController = new EntidadController();
        $entidades = $entidadController->index();
        return view('plan.elaborar_plan', compact('entidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*        $datos = $request->validated();
        $plan = Plan::create($datos);
        return redirect()->route('plan.index');*/

        $datos = $request->validate(

            [
                'numero_plan'   => 'required|min:1|max:10000',
                'fecha_distribucion' => 'required',
                'nombre_entidad' => 'required'
            ]);
        dd($datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        $entidadController = new EntidadController();
        $entidades = $entidadController->index();
        return view('plan.editar_plan', compact('plan'), compact('entidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
/*        $datos = $request->validated();
        $plan = Plan::create($datos);
        return redirect()->route('plan.index');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
