<?php
// app/Providers/AuthorizeNetServiceProvider.php
 
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use AuthorizeNet\API\Request;
use AuthorizeNet\API\Transaction;

class AuthorizeNetServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('authorizeNet', function () {
            return new Transaction(config('authorize.api_login_id'), config('authorize.transaction_key'));
        });
    }
}
