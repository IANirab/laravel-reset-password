<?php 

namespace nirab\resetpassword;

use Illuminate\Support\ServiceProvider;

/**
 * 
 */
class ResetPasswordServiceProvider extends ServiceProvider
{
	
	public function boot()
    {
    	$this->loadViewsFrom(__DIR__.'/views', 'resetpassword');
        $this->publishes([
            __DIR__ . '/views' => resource_path('views/vendor/email'),
            __DIR__ . '/config/resetpassword.php' => config_path('resetpassword.php'),
        ]);
    }
	
	public function register()
	{
		
	}



}