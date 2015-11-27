
<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use J42\LaravelFirebase\Client;
use Event;

class LumenFirebaseServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     * @return void
     */
    public function register()
    {

        // Get Connection
        $config = [
            'host' => env('FIREBASE_URL'),
            'token' => env('FIREBASE_SECRET'),
            'timeout' => 3
        ];

        // Root provider
        $this->app->singleton('firebase', function ($app) use ($config) {
            return new Client($config);
        });
    }
}
