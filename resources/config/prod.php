<?php

    // Local
    $app['locale'] = 'en';
    $app['session.default_locale'] = $app['locale'];

    // Cache
    $app['cache.path'] = __DIR__ . '/../cache';

    // Http cache
    $app['http_cache.cache_dir'] = $app['cache.path'] . '/http';

    // Twig cache
    $app['twig.options.cache'] = $app['cache.path'] . '/twig';

    // Assetic
    $app['assetic.enabled'] = true;
    $app['assetic.path_to_cache'] = $app['cache.path'] . '/assetic' ;
    $app['assetic.path_to_web'] = __DIR__ . '/../../web/assets';
    $app['assetic.input.path_to_assets'] = __DIR__ . '/../assets';

    $app['assetic.input.path_to_css']  = array(
        $app['assetic.input.path_to_assets'] . '/css/*.css',
        $app['assetic.input.path_to_assets'] . '/css/*.less'
    );
    $app['assetic.output.path_to_css'] = 'css/styles.css';

    $app['assetic.input.path_to_js'] = array(
        //__DIR__.'/../../vendor/twitter/bootstrap/js/bootstrap-tooltip.js',
        //__DIR__.'/../../vendor/twitter/bootstrap/js/*.js',
        $app['assetic.input.path_to_assets'] . '/js/*.js',
    );

    $app['assetic.output.path_to_js'] = 'js/scripts.js';
