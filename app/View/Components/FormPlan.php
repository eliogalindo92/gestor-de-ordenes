<?php

namespace App\View\Components;

use Illuminate\Support\Facades\App;
use Illuminate\View\Component;

class FormPlan extends Component
{
    private $plan;
    private $entidades;
    /**
     * Create a new component instance.
     *
     * @param App\Models\Entidad $entidades;
     * @param App\Models\Plan $plan;
     *
     * @return void
     */
    public function __construct($entidades, $plan=null)
    {
        $this->plan = $plan;
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
                'plan'=>$this->plan,
                'entidades'=>$this->entidades
            ];
        return view('components.form-plan', $params);
    }
}
