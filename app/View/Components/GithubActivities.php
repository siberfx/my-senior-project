<?php

namespace App\View\Components;

use App\Services\GithubService;
use Illuminate\View\Component;

class GithubActivities extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        $commits = (new GithubService)->getCommits();

        return view('components.github-activities', compact('commits'));
    }
}
