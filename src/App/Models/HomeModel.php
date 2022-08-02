<?php

namespace App\Models;

use Core\Model;

/**
 * Home Model class
 *
 * @version: PHP: 8.1
 *
 * @HomeModel
 */
class HomeModel extends Model {
	/**
	 * @return string
	 */
	public static function getGreeting() : string {
		return "Welcome to Metamorphosis PHP Framework!";
	}
}