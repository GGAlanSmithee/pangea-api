<?php

return new \Phalcon\Config(array(
    "application" => array(
        "controllersDir" => __DIR__."/../Controllers/",
        "modelsDir" => __DIR__."/../Models/",
        "viewsDir" => __DIR__."/../Views/",
    ),
    "models" => array(
        "metadata" => array(
            "adapter" => "Memory"
        )
    )
));
