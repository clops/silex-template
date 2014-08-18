<?php

    use Symfony\Component\Console\Application;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;
    use Symfony\Component\Filesystem\Filesystem;
    use Symfony\Component\Finder\Finder;

    $console = new Application('Silex - Clops Edition', '0.1');

    $app->boot();

    $console
        ->register('assetic:dump')
        ->setDescription('Dumps all assets to the filesystem')
        ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {
            if (!$app['assetic.enabled']) {
                return false;
            }

            $dumper = $app['assetic.dumper'];
            if (isset($app['twig'])) {
                $dumper->addTwigAssets();
            }
            $dumper->dumpAssets();
            
            $output->writeln('<info>Dump finished</info>');
        })
    ;

    if (isset($app['cache.path'])) {
        $console
            ->register('cache:clear')
            ->setDescription('Clears the cache')
            ->setCode(function (InputInterface $input, OutputInterface $output) use ($app) {

                $cacheDir = $app['cache.path'];
                $finder = Finder::create()->in($cacheDir)->notName('.gitkeep');

                $filesystem = new Filesystem();
                $filesystem->remove($finder);

                $output->writeln(sprintf("%s <info>success</info>", 'cache:clear'));
            });
    }

    return $console;
