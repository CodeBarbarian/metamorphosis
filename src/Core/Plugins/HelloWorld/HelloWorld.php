<?php

namespace Core\Plugins\HelloWorld;

use Core\Plugins\Plugin;

/**
 * Hello World Plugin
 */
class HelloWorld extends Plugin {
	// This is the function which is responsible for attaining the template. Let us try and render stuff
	protected function execute() : string {
		return "Hello World from Plugin!";
	}
}