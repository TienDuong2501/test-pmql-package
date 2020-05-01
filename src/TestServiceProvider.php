<?php
// MyVendor\contactform\src\ContactFormServiceProvider.php
namespace Pmql\Contract;
use Illuminate\Support\ServiceProvider;
class TestServiceProvider extends ServiceProvider {
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../src' => public_path('pmql')
        ], 'pmql');
    }
    public function register()
    {
    }
}
?>