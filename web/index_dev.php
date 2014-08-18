<?php
    /**
     * @author  Alexey Kulikov aka clops <me@clops.at>
     */
    require_once __DIR__ . '/../vendor/autoload.php';

    $app = new Silex\Application();

    require_once __DIR__ . '/../resources/config/dev.php';
    require_once __DIR__ . '/../src/Bootstrap.php';
    require_once __DIR__ . '/../src/Routes.php';

    $app->run();
