<?php
class Home extends Db{
    private $homeTitle;
    private $homeImage;

    private function getAllhome(){
        $sql = "SELECT * FROM home";
        $result = $this->connect()->query($sql);
        $numRows = $result -> num_rows;
        if($numRows>0){
            return $result->fetch_assoc();
        }
    }

    function __construct() {		
        $results = $this->getAllhome();
        $this->homeTitle = $results['titulo_home'];
        $this->homeImage = $results['url_imagen_home'];		
    }	
    
    public function getHomeTitle(){
        return $this->homeTitle;
    }


    public function getHomeImage(){
        return $this->homeImage;
    }
}
?>