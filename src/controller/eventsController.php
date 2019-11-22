<?php

require_once __DIR__ . '/Controller.php';

class eventsController extends Controller
{

  function __construct()
  {
    //$this->eventDAO = new eventDAO();
  }

  public function index()
  {
    $this->set('title', 'Dashboard');
    $this->set('subtitle', 'Voeg een evenement toe en wij kijken voor de rest.');
  }
}
