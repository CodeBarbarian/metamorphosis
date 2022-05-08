<?php

namespace Plugin;

use Core\Plugin;

class ExamplePlugin extends Plugin {
	public function ready() : string {
		return "Ready";
	}
}