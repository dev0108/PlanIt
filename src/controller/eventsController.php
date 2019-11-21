<?php

require_once __DIR__ . '/Controller.php';

class eventsController extends Controller {

  function __construct() {
    //$this->eventDAO = new eventDAO();
  }

  public function index() {
    $this->set('title' , 'hey');
  }

}