<?php

namespace App\Providers;

use App\Billing\BankPayment;
use App\Billing\CardPayment;
use App\Foo;
use App\Pattern\Adapter\Customer;
use App\Pattern\Adapter\PayWithPayKal;
use App\Pattern\Adapter\PayWithZilla;
use App\Pattern\Adapter\PayZillaAdapter;
use App\PaymentProcessorInterface;
use App\PayPalProcessor;
use App\StripeProcessor;
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
        $this->app->singleton(Foo::class, function ($app) {
            // Pass the application name
            return new Foo($app->config['app.name']);
        });

        $this->app->bind(PaymentProcessorInterface::class, function () {
            return new PayPalProcessor();
        });

        $this->app->singleton(\App\Billing\PaymentProcessorInterface::class, function ($app) {
            if ($app->request->has('card')) {
                return new CardPayment('usd');
            }
            return new BankPayment('usd');

        });

        // For Adapter pattern
        $this->app->bind(Customer::class, function (){
           // $pay = new PayWithZilla();
            $payKal = new PayWithPayKal();
            $pay = new PayZillaAdapter($payKal);
            return new Customer($pay);
        });


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
