<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $image,
        public string $title,
        public string $button,
        public string $content
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
        <div class="card w-full glass">
        <figure><img src="{{$image}}" alt="{{$title}}"/></figure>
        <div class="card-body">
          <h2 class="card-title">{{$title}}</h2>
          <p>{{$content}}</p>
          <div class="card-actions justify-end">
            <button class="btn btn-primary">{{$button}}</button>
          </div>
        </div>
      </div>
    blade;
    }
}
