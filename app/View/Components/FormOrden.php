<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;
use App\Models\Orden;
use App\Models\Entidad;
use App\Models\Producto;

class FormOrden extends Component
{
    private $orden;
    private $entidades;
    private $productos;
    /**
     * Create a new component instance.
     * @param App\Models\Entidad $entidades;
     *  @param App\Models\Producto $productos;
     * @param App\Models\Orden $orden;
     *
     *
     *
     * @return void
     */
    public function __construct($entidades, $productos, $orden=null)
    {
        if ((is_null($orden))){
            $orden = Orden::make([
                'id_entidad'=>0,
                'numero_orden'=>1,
                'fecha_elaboracion'=>Carbon::now(),
                'cantidad_ordenada'=>1,
                'codigo_producto'=>0,
                'unidad_de_medida'=>0,
                'existencia_en_almacen'=>1,
                'descripcion_producto'=>'',
            ]);
        }
        $this->orden = $orden;
        $this->entidades = $entidades;
        $this->productos = $productos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params =
        [
            'orden'=>$this->orden,
            'entidades'=>$this->entidades,
            'productos'=>$this->productos
        ];
        return view('components.form-orden', $params);
    }
}
