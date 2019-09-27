<?php

class App {

  protected $controller = 'home';
  protected $method = 'index';
  protected $params = [];

  public function __construct() {
    echo 'hewwo owo';
  }

  public function parseUrl() {

    if(isset($_GET['url'])) {
      
    }

  }

}
