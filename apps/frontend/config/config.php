<?php

return new \Phalcon\Config(array(
	'application' => array(
		'controllersDir' => __DIR__.'/../controllers/',
		'modelsDir' => __DIR__.'/../models/',
		'viewsDir' => __DIR__.'/../views/',
	),
	'models' => array(
		'metadata' => array(
			'adapter' => 'Memory'
		)
	)
));
