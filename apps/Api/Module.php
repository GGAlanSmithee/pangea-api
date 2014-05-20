<?php

namespace Pangea\Api;

use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders() {}

    public function registerServices($di)
    {
        // Read configuration
        $config = include __DIR__."/config/config.php";

        // Setting up the view component
        $di->set("view", function() use ($config) {
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir($config->application->viewsDir);
            $view->registerEngines(array(
                ".volt" => "Phalcon\Mvc\View\Engine\Volt"
            ));
            return $view;
        });

        // Database connection is created based in the parameters
        // defined in the configuration file
        $di->set("db", function() use ($config) {
            return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
                "host" => $config->database->host,
                "username" => $config->database->username,
                "password" => $config->database->password,
                "dbname" => $config->database->dbname
            ));
        });

        // If the configuration specify the use of metadata adapter
        // use it or use memory otherwise
        $di->set("modelsMetadata", function() use ($config) {
            if (isset($config->models->metadata))
            {
                $metadataAdapter = "Phalcon\\Mvc\\Model\\Metadata\\"
                                 . $config->models->metadata->adapter;

                return new $metadataAdapter();
            }
            else
            {
                return new \Phalcon\Mvc\Model\Metadata\Memory();
            }
        });
    }
}
