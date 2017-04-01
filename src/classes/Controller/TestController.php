<?php

namespace Rony\Controller;

class TestController {
	protected $c;
	protected $renderer;
	//protected $db;

	public function __construct(\Slim\Container $container) {
		$this->c = $container;
		$this->renderer = $container->get('renderer');
		//$this->db = $container->get('db');
	}

	public function allTests($request, $response, $args) {
    	$this->renderer->render($response, "tests.html");

    	return $response;
	}
}