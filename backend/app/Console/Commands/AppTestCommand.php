<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Socialite\Facades\Socialite;

class AppTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $keycloak = Socialite::driver('keycloak');
        // $resp = $keycloak->get('/auth/realms/test/protocol/openid-connect/userinfo');
        // dump(get_class_methods($keycloak));

        dump( \App\Services\Auth::login('jeff@grr.la', 'jeff@grr.la') );
    }
}
