<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrdenRequest;
use App\Models\Entidad;
use App\Models\Orden;
use App\Models\Producto;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('orden.gestionar_orden');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entidades = Entidad::orderByDesc('id')->get();
        $productos = Producto::orderByDesc('id')->get();
        return view('orden.elaborar_orden', compact('entidades', 'productos'));
    }

    public function create_alt(Producto $producto)
    {
        $entidades = Entidad::orderByDesc('id')->get();
        return view('orden.elaborar_orden_alt', compact('entidades', 'producto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrdenRequest $request)
    {
        $datos = $request->validated();
        Orden::create($datos);
        session()->flash('estado', 'Orden creada con éxito');
        return to_route('orden.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(Orden $orden)
    {
        $entidades = Entidad::orderByDesc('id')->get();
        return view('orden.mostrar_orden', compact('orden', 'entidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $orden)
    {
        $entidades =Entidad::orderByDesc('id')->get();
        $productos = Producto::orderByDesc('id')->get();
        return view('orden.editar_orden', compact('orden', 'entidades', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(OrdenRequest $request, Orden $orden)
    {
        $datos = $request->validated();
        $orden->update($datos);
        session()->flash('estado', 'Orden actualizada con éxito');
        return to_route('orden.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orden $orden)
    {
        $orden->delete();
        session()->flash('estado', 'Orden eliminada con éxito');
        return to_route('orden.index');
    }

    public function reporte_pdf(Orden $orden)
    {
        $entidades =Entidad::orderByDesc('id')->get();
        $pdf = Pdf::loadView('orden.exportar_orden', compact('orden', 'entidades'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }
}
