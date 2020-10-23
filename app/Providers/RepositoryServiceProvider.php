<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\InterfaceCustomers;
use App\Repository\CustomersRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      $this->app->bind(InterfaceCustomers::class, CustomersRepository::class);
    }
}
