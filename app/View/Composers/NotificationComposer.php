<?php

namespace App\View\Composers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class NotificationComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct() {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $user = Auth::user();
        $notifications = $user->unreadNotifications;
        $view->with('notifications', $notifications);
    }
}
