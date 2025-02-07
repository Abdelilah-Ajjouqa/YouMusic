<?php 
/*
    * App Core Class
    * Creates URL & loads core controller
    * URL FORMAT - /controller/method/params
*/
class Core {
    protected $currentController = 'Pages';
    protected $currentMethode = 'index';
    protected $params = [];

    public function getUrl(){
        echo $_GET['url'];
    }

    public function __construct()
    {
        $this->getUrl();
    }
}