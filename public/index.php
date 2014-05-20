<?php

chdir(dirname(__DIR__));
error_reporting(E_ALL);

try
{
    /**
     * Autoloader
     */
    $loader = new \Phalcon\Loader();

    $loader->registerNamespaces(array(
        "Pangea" => "apps/",
    ));

    $loader->register();

    /**
     * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
     */
    $di = new \Phalcon\DI\FactoryDefault();

    /**
     * Registering a router
     */
    $di->set("router", function() {
        $router = include "app/config/routes.php";
        return $router;
    });

    /**
     * The URL component is used to generate all kind of urls in the application
     */
    $di->set("url", function() {
        $url = new \Phalcon\Mvc\Url();
        $url->setBaseUri("/");
        return $url;
    });

    /**
     * Start the session the first time some component request the session service
     */
    $di->set("session", function() {
        $session = new \Phalcon\Session\Adapter\Files();
        $session->start();
        return $session;
    });

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application();

    $application->setDI($di);

    /**
     * Register application modules
     */
    $application->registerModules(array(
        "frontend" => array(
            "className" => "Pangea\\Frontend\\Module",
            "path" => "apps/Frontend/Module.php"
        ),
        "api" => array(
            "className" => "Pangea\\Api\\Module",
            "path" => "apps/Api/Module.php"
        )
    ));

    echo $application->handle()->getContent();

}
catch (Phalcon\Exception $e)
{
    echo $e->getMessage();
}
catch (PDOException $e)
{
    echo $e->getMessage();
}
