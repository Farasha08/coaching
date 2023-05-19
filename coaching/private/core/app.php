<?php
//echo "from app.php";
class app{
    protected $controller = "home";
    protected $method = "index";
    protected $params = array();

    public function __construct()
    {
        //echo "construct";
        $URL = $this->getURL();
    }
    
    private function getURL(){
        //echo "<pre>";
       // print_r($_GET);
       //return explode("/",trim($_GET['url']), "/");

    }


}

?>