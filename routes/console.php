<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment('Keep pushing forward.');
})->purpose('Display an inspiring quote');
