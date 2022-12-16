<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;
class MostrarProducto extends Component
{
    use WithPagination;
    public string $busqueda = '';
    public int $paginacion = 5;
    protected $queryString =
        [
            'busqueda' =>['except' =>'', 'as' => 'buscado'],
            'paginacion' =>['except' =>'', 'as' => 'paginado']
        ];
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $productos = $this->consulta();
        $productos = $productos->paginate($this->paginacion);

        if ($productos->currentPage() > $productos->lastPage())
        {
            $this->resetPage();
            $productos = $this->consulta();
            $productos = $productos->paginate($this->paginacion);
        }
        $params =
            [
                'productos' => $productos,
            ];
        return view('livewire.mostrar-producto', $params);
    }

    private function consulta(){

        $consulta = Producto::orderByDesc('id');
        if ($this->busqueda != ''){
            $consulta->where('codigo_producto', 'LIKE', '%'.$this->busqueda.'%');
        }
        return $consulta;
    }
}
