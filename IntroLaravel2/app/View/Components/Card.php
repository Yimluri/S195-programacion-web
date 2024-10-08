<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $titulo;
    public $encabezado;
    public $textoBoton;


    public function __construct($titulo,$encabezado,$textoBoton) //variables como atributos
    {
        $this->titulo=$titulo; // se inicializa la variable
        $this->encabezado=$encabezado;
        $this->textoBoton=$textoBoton;
    }


    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
