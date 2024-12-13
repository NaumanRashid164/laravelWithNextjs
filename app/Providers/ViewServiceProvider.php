<?php

namespace App\Providers;

use App\View\Composers\NotificationComposer;
use App\View\Composers\PageTitleComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(["admin.partial.header"], NotificationComposer::class);
        $this->composeWithTitle(["admin.users.*"], "Users");
        $this->composeWithTitle(["admin.permission_role.role_*"], "Roles");
        $this->composeWithTitle(["admin.permission_role.permission_*"], "Permission");
    }

    protected function composeWithTitle(array $views, string $title)
    {
        View::composer($views, function ($view) use ($title) {
            (new PageTitleComposer($title))->compose($view);
        });
    }
}
