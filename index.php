<?php

require_once "vendor/autoload.php";

use Laminas\ServiceManager\ServiceManager;

class App
{
    private $serviceManager;

    public function __construct(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
    }
}

$serviceManager = new ServiceManager([
    'factories' => [
        App::class => function ($serviceManager) {
            return new App($serviceManager);
        },
    ],
]);

$app = $serviceManager->get(App::class);

print_r($app);