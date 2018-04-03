<?php

namespace Tests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Console\Kernel;
use Artisan;
use App\Todo;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        Hash::driver('bcrypt')->setRounds(4);

        return $app;
    }

    public function prepareForTests()
    {
        Artisan::call('migrate');
        if(!Todo::all()->count()){
            Artisan::call('db:seed');
        }
    }
}
