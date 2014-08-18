<?php
    /**
     * @author  Alexey Kulikov aka clops <me@clops.at>
     *
     *          This is the longest code part... ever!
     */
    require_once __DIR__ . '/../vendor/autoload.php';

    $app = new Silex\Application();

    require_once __DIR__ . '/../resources/config/prod.php';
    require_once __DIR__ . '/../src/Bootstrap.php';
    require_once __DIR__ . '/../src/Routes.php';

    $app['http_cache']->run();
