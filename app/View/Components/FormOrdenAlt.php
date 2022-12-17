<?php
namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;
use App\Models\Orden;
use App\Models\Producto;

class FormOrdenAlt extends Component
{
    private $orden;
    private $entidades;
    /**
     * Create a new component instance.
     * @param App\Models\Entidad $entidades;
     * @param App\Models\Producto $producto;
     * @return void
     */
    public function __construct($entidades, Producto $producto)
    {

            $orden = Orden::make([
                'id_entidad'=>0,
                'numero_orden'=>1,
                'fecha_elaboracion'=>Carbon::now(),
                'cantidad_ordenada'=>1,
                'codigo_producto'=>$producto->codigo_producto,
                'unidad_de_medida'=>$producto->unidad_de_medida,
                'existencia_en_almacen'=>$producto->existencia_en_almacen,
                'descripcion_producto'=>$producto->descripcion_producto,
            ]);

        $this->orden = $orden;
        $this->entidades = $entidades;
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
            ];
        return view('components.form-orden-alt', $params);
    }
}
