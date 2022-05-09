<?php

namespace Core;

interface iPlugin {
	/**
	 * All plugins should be able to do a very specific thing.
	 * It should encompass the idea of a set of methods inside a class which does something oddly specific.
	 *
	 * The function in the interface itself that all other classes should implement some sort of basic structure
	 *
	 * We need to test if all the requirements for the plugin exists and are ready to be used
	 * We need to prepare the plugin for execution
	 * We need to execute the plugin and provide or return something
	 */

	/**
	 * @return mixed
	 */
	function onReady();

	function prepare();

	function execute();
}

abstract class Plugin implements iPlugin {
	public function onReady(): bool {
		$ClassName = new \ReflectionClass($this);
		$ClassName = $ClassName->getShortName();

		// Test if the configuration file actually exists
		if (!file_exists('../App/Plugins/'.$ClassName.'/'.$ClassName.'.php')) {
			return false;
		}

		// File exists, let us try and include it
		if (!include ('../App/Plugins/'.$ClassName.'/config_'.$ClassName.'.php')) {
			return false;
		}

		// Does the class exists
		if (!class_exists((get_class($this).'Config'))) {
			return false;
		}

		return true;
	}

	public function prepare(): bool {
		if (!(get_class($this).'Config')::ENABLED) {
			return false;
		}

		return true;
	}

	public function execute():void {
	}

	public function __call($Method, $Arguments) {
		if (method_exists($this, $Method)) {
			if (!$this->onReady()) {
				return false;
			}

			if (!$this->prepare()) {
				return false;
			}

			return call_user_func_array(array($this, $Method), $Arguments);
		}
	}
}