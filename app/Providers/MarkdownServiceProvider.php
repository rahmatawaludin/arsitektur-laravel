<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use League\CommonMark\CommonMarkConverter;

class MarkdownServiceProvider extends ServiceProvider {

	protected $markdown;

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->markdown = new CommonMarkConverter;
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('markdown', function() {
			return new CommonMarkConverter;
		});

		$this->app->bind('apa itu laravel?', function() {
			return 'Laravel adalah framework Laravel paling keren dan elegan.';
		});
	}

}
