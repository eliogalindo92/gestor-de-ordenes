<?php

namespace App\Http\Livewire;


use App\Models\Entidad;
use App\Models\Orden;
use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class GestionarOrden extends Component
{
    use WithPagination;
    public string $busqueda = '';
    public int $paginacion = 7;
    protected $queryString =
        [
            'busqueda' =>['except' =>'', 'as' => 'buscado'],
            'paginacion' =>['except' =>'', 'as' => 'paginado']
        ];
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        $entidades = Entidad::orderByDesc('id')->get();
        $productos = Producto::orderByDesc('id')->get();

        $ordenes = $this->consulta();
        $ordenes = $ordenes->paginate($this->paginacion);

        if ($ordenes->currentPage() > $ordenes->lastPage())
        {
            $this->resetPage();
            $ordenes = $this->consulta();
            $ordenes = $ordenes->paginate($this->paginacion);
        }
        $params =
            [
                'ordenes' => $ordenes,
                'entidades'=> $entidades,
                'productos'=> $productos
            ];
        return view('livewire.gestionar-orden', $params);
    }

    private function consulta(){

        $consulta = Orden::orderByDesc('id');
        if ($this->busqueda != ''){
            $consulta->where('numero_orden', 'LIKE', '%'.$this->busqueda.'%');
        }
        return $consulta;
    }
}
