<?php

namespace Pangea\Frontend;

use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    public function registerAutoloaders() {}

    public function registerServices($di)
    {

        // Read configuration
        $config = include __DIR__."/config/config.php";

        // Registering a dispatcher
        $di->set("dispatcher", function () {
            $dispatcher = new \Phalcon\Mvc\Dispatcher();
            $dispatcher->setDefaultNamespace("Pangea\\Frontend\\Controllers\\");
            return $dispatcher;
        });

        // Setting up the view component
        $di->set("view", function() use ($config) {
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir($config->application->viewsDir);
            $view->registerEngines(array(
                ".volt" => "Phalcon\Mvc\View\Engine\Volt"
            ));
            return $view;
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

        // Registering a dispatcher
        $di->set("dispatcher", function () {
            $eventsManager = new \Phalcon\Events\Manager();
            $eventsManager->attach("dispatch", function($event, $dispatcher, $exception) {
                if ($event->getType() == "beforeException")
                {
                    if ($exception->getCode() == \Phalcon\Dispatcher::EXCEPTION_HANDLER_NOT_FOUND ||
                        $exception->getCode() == \Phalcon\Dispatcher::EXCEPTION_ACTION_NOT_FOUND)
                    {
                        $dispatcher->forward(array(
                            "module"     => "frontend",
                            "controller" => "response",
                            "action"     => "notFound",
                        ));

                        return false;
                    }
                }
            });

            $dispatcher = new \Phalcon\Mvc\Dispatcher();
            $dispatcher->setDefaultNamespace("Pangea\\Frontend\\Controllers\\");
            $dispatcher->setEventsManager($eventsManager);

            return $dispatcher;
        });
    }
}
