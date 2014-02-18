<?

	// Local
	$app['locale'] = 'en';
	$app['session.default_locale'] = $app['locale'];

	// Cache
	$app['cache.path'] = __DIR__ . '/../cache';

	// Http cache
	$app['http_cache.cache_dir'] = $app['cache.path'] . '/http';

	// Twig cache
	$app['twig.options.cache'] = $app['cache.path'] . '/twig';
