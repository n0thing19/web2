<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $method,
        public string $action,
        public bool $csrf = false,

    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.auth-button');
    }
}
