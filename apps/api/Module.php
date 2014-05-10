<?php

namespace Pangea\Api;

class Module
{

    public function registerAutoloaders()
    {
        $loader = new \Phalcon\Loader();

        $loader->registerNamespaces(array(
            "Pangea\\Api\\Controllers" => __DIR__."/controllers/",
            "Pangea\\Api\\Models" => __DIR__."/models/",
        ));

        $loader->register();
    }

    public function registerServices($di)
    {
        /**
         * Read configuration
         */
        $config = include __DIR__."/config/config.php";

        /**
         * Setting up the view component
         */
        $di->set("view", function() {
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir(__DIR__."/views/");
            return $view;
        });

        /**
         * Database connection is created based in the parameters defined in the configuration file
         */
        $di->set("db", function() use ($config) {
            return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
                "host" => $config->database->host,
                "username" => $config->database->username,
                "password" => $config->database->password,
                "dbname" => $config->database->name
            ));
        });

        /**
         * If the configuration specify the use of metadata adapter use it or use memory otherwise
         */
        $di->set("modelsMetadata", function() use ($config) {
            if (isset($config->models->metadata))
            {
                $metadataAdapter = "Phalcon\\Mvc\\Model\\Metadata\\".$config->models->metadata->adapter;
                return new $metadataAdapter();
            }
            else
            {
                return new \Phalcon\Mvc\Model\Metadata\Memory();
            }
        });
    }
}
