<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WorkExperience extends Component
{
    protected $data;

    /**
     * Create a new component instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->data = collect($this->data)->map(function ($item) {
            return [
                'company_name' => strtoupper($item['company_name']),
                'role' => $item['role'],
                'tenure' => $item['tenure'],
                'status' => 'this is a status'
            ];
        })->toArray();

        return view('components.work-experience', [
            'data' => $this->data
        ]);
    }
}
