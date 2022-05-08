<?php

namespace Core;

use App\Config\Paths;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * View
 * @version: PHP: 8.1
 *
 * @View
 */
class View {
	/**
	 * Render a view file
	 *
	 * @param string $View
	 * @param array  $Args
	 * @return void
	 * @throws \Exception
	 */
	public static function render(string $View, array $Args = []): void {
		extract($Args, EXTR_SKIP);

		$File = sprintf("%s/App/Views/$View", dirname(__DIR__));  // relative to Core directory

		if (is_readable($File)) {
			require $File;
		} else {
			throw new \Exception("$File not found");
		}
	}

	/**
	 * Render a view template using Twig
	 *
	 * @param string $Template
	 * @param array  $Args
	 * @return void
	 * @throws \Twig\Error\LoaderError
	 * @throws \Twig\Error\RuntimeError
	 * @throws \Twig\Error\SyntaxError
	 */
	public static function renderTemplate(string $Template, array $Args = []): void {
		echo static::getTemplate($Template, $Args);
	}

	/**
	 * Get the contents of a view template using Twig
	 *
	 * @param string $Template
	 * @param array  $Args
	 *
	 * @return string|bool
	 *
	 * @throws \Twig\Error\LoaderError
	 * @throws \Twig\Error\RuntimeError
	 * @throws \Twig\Error\SyntaxError
	 */
	public static function getTemplate(string $Template, array $Args = []): string|bool {
		static $Twig = null;

		if ($Twig === null) {
			$Loader = new FilesystemLoader(dirname(__DIR__) . '/App/Views');
			$Twig = new Environment($Loader);

			$Twig->addGlobal('public_root', Paths::getWebRoot());
		}

		if (!empty($Template)) {
			return $Twig->render($Template, $Args);
		}

		return false;
	}
}
