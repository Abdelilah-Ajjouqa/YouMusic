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
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
        }
    }

    public function __construct()
    {
        $this->getUrl();
    }
}