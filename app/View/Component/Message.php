<?php

namespace App\View\Component;

use Illuminate\View\Component;

class Message extends Component
{
    public $type;
    public $message;

    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
    }
    public function render()
    {
        return view('components.message');
    }
}
