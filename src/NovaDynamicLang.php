<?php

namespace Ysfkaya\NovaDynamicLang;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

/**
 * Class DynamicMultilingual
 *
 * @package Ysfkaya\DynamicMultilingual
 */
class NovaDynamicLang extends Tool
{
	/**
	 * Perform any tasks that need to happen when the tool is booted.
	 *
	 * @return void
	 */
	public function boot()
	{
		Nova::script('dynamic-multilingual', __DIR__.'/../dist/js/tool.js');
		Nova::style('dynamic-multilingual', __DIR__.'/../dist/css/tool.css');
	}

	/**
	 * Build the view that renders the navigation links for the tool.
	 *
	 * @return \Illuminate\View\View
	 */
	public function renderNavigation()
	{
		return view('dynamic-multilingual::navigation');
	}
}
