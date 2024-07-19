<?php

namespace App\View\Components;

use App\Models\SSS;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SikcaSorularSorularSComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //her çağrıldığında sss tablosundan rastgele 5 sss getir
        $this->sss = SSS::inRandomOrder()->limit(5)->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sikca-sorular-sorular-s-component', [
            'sss' => $this->sss
        ]);
    }
}
