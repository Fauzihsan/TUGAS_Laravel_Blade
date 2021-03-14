<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $theme;
    public $judulModal;
    public $aksi;
    public function __construct($theme, $judulModal, $aksi)
    {
        $this->theme = $theme;
        $this->judulModal = $judulModal;
        $this->aksi = $aksi;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal');
    }
}
