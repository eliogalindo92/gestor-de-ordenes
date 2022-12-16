<?php

namespace App\Http\Livewire;

use App\Http\Controllers\EntidadController;
use App\Models\Solicitud;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarSolicitud extends Component
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
        $entidadController = new EntidadController();
        $entidades = $entidadController->index();

        $solicitudes = $this->consulta();
        $solicitudes = $solicitudes->paginate($this->paginacion);

        if ($solicitudes->currentPage() > $solicitudes->lastPage())
        {
            $this->resetPage();
            $solicitudes = $this->consulta();
            $solicitudes = $solicitudes->paginate($this->paginacion);
        }
        $params =
            [
                'solicitudes' => $solicitudes,
                'entidades'=> $entidades
            ];
        return view('livewire.mostrar-solicitud', $params);
    }

    private function consulta(){

        $consulta = Solicitud::orderByDesc('id');
        if ($this->busqueda != ''){
            $consulta->where('numero_solicitud', 'LIKE', '%'.$this->busqueda.'%');
        }
        return $consulta;
    }
}
