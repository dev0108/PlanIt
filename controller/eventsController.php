<?php
require_once(__DIR__ . '/controller.php');

class eventsController extends Controller {
  public function index (){
    $this->set('title' , 'dashboard');
  }

  public function detail (){
  }

  public function add (){
    $this->set('title' , 'Add an event');
  }
}