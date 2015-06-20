<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FileUploaderServiceProvider extends ServiceProvider {

	protected $defer = true;

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('App\Contracts\FileUploaderContract', 'App\Services\LaravelFileUploader');
	}

}
