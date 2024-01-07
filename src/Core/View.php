<?php

namespace Core;

use App\Config\Paths;
use Core\Plugins\Flashcard\Flashcard;
use Core\Plugins\TinyTemplate\TinyTemplate;
use Core\System\System;

/**
 * View
 * @version: PHP: 8.1
 *
 * @View
 */
class View
{
    /**
     * Render a view file
     *
     * @param string $View
     * @param array $Args
     * @return void
     * @throws \Exception
     */
    public static function render(string $View, array $Args = []): void
    {
        extract($Args, EXTR_SKIP);

        $File = sprintf("%s/App/Views/$View", dirname(__DIR__));  // relative to Core directory

        if (is_readable($zFile)) {
            require $File;
        } else {
            throw new \Exception("$File not found");
        }
    }

    public static function renderTemplate(string $Template, array $Args = []) : void {
        echo static::getTemplate($Template, $Args);
    }

    public static function getTemplate(string $Template, array $Args = []): bool
    {
        static $Tiny = null;

        if ($Tiny === null) {
            /**
             * @TODO: Change these to be added by setter instead. This works, so we can let the class do all the magic. \
             * this was simply a way to get it to work
             */
            $ViewDirectory = dirname(__DIR__) . '/App/Views';
            $CacheDirectory = dirname(__DIR__) . '/App/Cache';

            $Tiny = new TinyTemplate();
            $Tiny->setViewsDirectory($ViewDirectory);
            $Tiny->setCacheDirectory($CacheDirectory);
            /**
             * Template Variables
             */
            $Tiny->setGlobal("public_root", Paths::SITE_ROOT());
            $Tiny->setGlobal("framework_version", System::getVersion());
            $Tiny->setGlobal("flash_message", Flashcard::getMessages());
        }

        /**
         * Render the template view
         */
        if (!empty($Template)) {
            //$Tiny::View($Template, $Args);
            $Tiny->execute($Template, $Args);
        }

        return false;
    }
}