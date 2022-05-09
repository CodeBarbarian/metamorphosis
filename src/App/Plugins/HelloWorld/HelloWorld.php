<?php

namespace App\Plugins\HelloWorld;

use Core\Plugin;

class HelloWorld extends Plugin {
	protected function HelloWorld(): string {
			return "Hello World from Plugin!";
	}
}