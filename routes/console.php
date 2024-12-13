<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('composer', function () {
    $value = $this->choice("install , update or auto generate files", ["install", "update", "dump-autoload"]);
    $output = shell_exec("composer $value");
    $this->info($output);
})->purpose('Run composer commands like install , update or auto generate files');

Artisan::command('cache', function () {
    Artisan::call("optimize:clear");
    $this->info("Cache is Cleared");
})->purpose('Clear Cache in project');

Artisan::command('storage', function () {
    Artisan::call("storage:link");
    $this->info("Cache is Cleared");
})->purpose('Storage Link');
