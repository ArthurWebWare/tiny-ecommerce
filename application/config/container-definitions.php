<?php

declare(strict_types=1);

use App\Preferences;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Slim\Views\Twig;

use App\Twig\LanguageExtension;

return [
    LoggerInterface::class => function (ContainerInterface $container): LoggerInterface {
        // Get the preferences from the container.
        $preferences = $container->get(Preferences::class);

        // Instantiate a new logger and push a handler into the logger.
        $logger = new Logger('slim4-skeleton');
        $logger->pushHandler(
            new RotatingFileHandler(
                $preferences->getRootPath() . '/logs/slim4-skeleton.log'
            )
        );

        return $logger;
    },
    Twig::class => function (ContainerInterface $container): Twig {
        // Get the preferences from the container.
        $preferences = $container->get(Preferences::class);

        // Instantiate twig.
        $twig = Twig::create(
            $preferences->getRootPath() . '/application/templates',
            [
                'cache' => $preferences->getRootPath() . '/cache',
                'auto_reload' => true,
                'debug' => false,
            ]
        );

        // $twig->addExtension(new LanguageExtension(__DIR__ . '/../../application/lang/ro/ro.json'));
        $twig->addExtension(new LanguageExtension(__DIR__ . '/../../application/lang/ro'));

        return $twig;
    },
];
