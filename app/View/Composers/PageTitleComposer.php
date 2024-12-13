<?php

namespace App\View\Composers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PageTitleComposer
{
    /**
     * Create a new profile composer.
     */
    protected $title;

    public function __construct($pageTitle = "Home")
    {
        $this->title = $pageTitle;
    }

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('pageTitle', $this->title);
    }
}
