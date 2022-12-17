<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\Entidad;
use App\Models\Plan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('plan.gestionar_plan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entidades = Entidad::orderByDesc('id')->get();
        return view('plan.elaborar_plan', compact('entidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanRequest $request)
    {
        $datos = $request->validated();
        $plan=Plan::create($datos);
        return redirect()->route('plan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        $entidades = Entidad::orderByDesc('id')->get();
        return view('plan.mostrar_plan', compact('plan', 'entidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        $entidades = Entidad::orderByDesc('id')->get();
        return view('plan.editar_plan', compact('plan','entidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(PlanRequest $request, Plan $plan)
    {
        $datos = $request->validated();
        $plan->update($datos);
        return redirect()->route('plan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();
        return redirect()->route('plan.index');
    }

    public function reporte_pdf(Plan $plan)
    {
        $entidades = Entidad::orderByDesc('id')->get();
        $pdf = Pdf::loadView('plan.exportar_plan', compact('plan', 'entidades'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }
}
