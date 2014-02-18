<?
	/**
	 * @author Alexey Kulikov aka Clops <me@clops.at>
	 *
	 * This is the main configuration dispatcher for the whole site
	 */

	use Silex\Provider\HttpCacheServiceProvider;
	use Silex\Provider\MonologServiceProvider;
	use Silex\Provider\TwigServiceProvider;

	####### SETUP ########################################################################################
	#
	# TWIG -->
	/** @var Silex\Application $app * */
	$app->register(new TwigServiceProvider(), array(
		'twig.options' => array(
			'cache'            => isset($app['twig.options.cache']) ? $app['twig.options.cache'] : false,
			'strict_variables' => true
		),
		'twig.path'    => array(__DIR__ . '/../resources/views')
	));

	# CACHE -->
	$app->register(new HttpCacheServiceProvider());

	# MONOLOG -->
	$app->register(new MonologServiceProvider(), array(
		'monolog.logfile' => __DIR__ . '/../resources/log/app.log',
		'monolog.name'    => 'app',
		'monolog.level'   => 300 // = Logger::WARNING
	));

	return $app;
