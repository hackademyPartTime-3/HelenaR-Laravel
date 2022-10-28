<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**Card title */
    public $title;
    /** Card Body */
    public $body;
    /**Card link to open detail brewery */
    public $link;
    public $text;
    public $img;
    public $place;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $body, $link = '', $text = '', $img = '', $place = '')
    {
        $this->title = $title;
        $this->body = $body;
        $this->link = $link;
        $this->text = $text;
        $this->img = $img;
        $this->place = $place;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
