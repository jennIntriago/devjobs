<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class MostrarVacantes extends Component
{
    //Se define para escuchar los eventos del user, como valores, se pasan las funciones.
    protected $listeners = ['eliminarVacante'];
    public function eliminarVacante(Vacante $vacante){
        //Forma de eliminar la vacante
        $vacante->delete();
    }
    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
