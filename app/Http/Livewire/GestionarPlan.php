<?php

namespace App\Http\Livewire;

use App\Http\Controllers\EntidadController;
use App\Models\Entidad;
use App\Models\Plan;
use Livewire\Component;
use Livewire\WithPagination;

class GestionarPlan extends Component
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
        $planes = $this->consulta();
        $planes = $planes->paginate($this->paginacion);

        if ($planes->currentPage() > $planes->lastPage())
        {
            $this->resetPage();
            $planes = $this->consulta();
            $planes = $planes->paginate($this->paginacion);
        }
        $params =
            [
                'planes' => $planes,
                'entidades'=> $entidades
            ];
        return view('livewire.gestionar-plan', $params);
    }

    private function consulta(){

        $consulta = Plan::orderByDesc('id');
        if ($this->busqueda != ''){
            $consulta->where('numero_plan', 'LIKE', '%'.$this->busqueda.'%');
        }
        return $consulta;
    }
}
