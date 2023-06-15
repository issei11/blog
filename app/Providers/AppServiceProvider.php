<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function boot(){
        \URL::forceScheme('https');
        $this->app['request']->server->set('HTTPS','on');
    }
}

//質問対応用PUSH

//質問大王用PUSH2
