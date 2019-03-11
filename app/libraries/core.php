<?php
  /*
   * App Core Class
   * Creates URL & loads core controller
   * URL FORMAT - /controller/method/params
   */
  class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];
  }
