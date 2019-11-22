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

  public function search()
  {
    $this->set('title', 'Zoeken');
    $this->set('subtitle', 'Zoek tussen je evenementen');
  }

  public function add()
  {
    $this->set('title', 'Voeg een evenement toe');
    $this->set('subtitle', 'We hebben de basis informatie nodig om van start te gaan.');
  }

  public function detail()
  { }
}