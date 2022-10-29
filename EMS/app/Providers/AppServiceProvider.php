<?php

namespace App\Providers;

use App\Dao\User\Impl\UserDAOImpl;
use App\Dao\User\UserDAO;
use App\Services\User\Impls\UserImpls;
use App\Services\User\Impls\UserServiceImpl;
use App\Services\User\UserServices;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Services
        $this->app->bind(UserServices::class,UserServiceImpl::class);

        //dao
        $this->app->bind(UserDAO::class,UserDAOImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
