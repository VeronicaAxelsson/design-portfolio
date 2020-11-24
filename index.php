<?php // @codingStandardsIgnoreFile
/**
 * This file is part of Pico. It's copyrighted by the contributors recorded
 * in the version control history of the file, available from the following
 * original location:
 *
 * <https://github.com/picocms/pico-composer/blob/master/index.php>
 *
 * SPDX-License-Identifier: MIT
 * License-Filename: LICENSE
 */

// load dependencies
// pico-composer MUST be installed as root package
if (is_file(__DIR__ . '/vendor/autoload.php')) {
    require_once(__DIR__ . '/vendor/autoload.php');
} else {
    die("Cannot find 'vendor/autoload.php'. Run `composer install`.");
}

require_once(__DIR__ . "/config/config.php");

// instance Pico
$pico = new Pico(
    __DIR__,    // root dir
    'config/',  // config dir
    'plugins/', // plugins dir
    'themes/'   // themes dir
);

if (isset($_GET["action"])) {  // om inte formuläret är satt kollas inte ifsatsen
    if ($_GET["action"] == "theme") { // Då ska temat uppdateras
        $previousValue = isset($_SESSION["theme"]) ? $_SESSION["theme"] : null; //har temat angivits så sätts temat annars null.

        if ($previousValue == "dark") {
            unset($_SESSION["theme"]);
        } else {
            $_SESSION["theme"] = dark;
        }

        $url = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"];
        //Denna url byggs på nuvarande url: protkollet . ..// . basdomänen . sökvväg till filen
        $url = preg_replace("/index.php\//", "", $url); //letar upp index.php och / efter och ta bort, så det inte blir knasigt på undersidor.
        header("Location: $url");
    }

    if ($_GET["action"] == "session_destroy") {
        session_destroy();  //då sessionen förrstörs kommer vi (med hjälp av config några rader upp, ladda om ramverket och starta ny session.)
        $url = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"];
        //Denna url byggs på nuvarande url: protkollet . ..// . basdomänen . sökvväg till filen
        $url = preg_replace("/index.php\//", "", $url); //letar upp index.php och / efter och ta bort, så det inte blir knasigt på undersidor.
        header("Location: $url");
    }
}

// override configuration?
$pico->setConfig(array(
    'session' => $_SESSION //Lägger in globala varibeln för session i ramverket, så det kan nås i twig
));

// run application
echo $pico->run();
