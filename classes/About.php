<?php
class About extends Db{
    private $aboutText;
    private $aboutImage;

    private function getAllAbout(){
        $sql = "SELECT * FROM about";
        $result = $this->connect()->query($sql);
        $numRows = $result -> num_rows;
        if($numRows>0){
            return $result->fetch_assoc();
        }
    }

    function __construct() {		
        $results = $this->getAllAbout();
        $this->aboutText = $results['texto_about'];
        $this->aboutImage = $results['url_imagen_about'];		
    }	
    
    public function getAboutText(){
        return $this->aboutText;
    }


    public function getAboutImage(){
        return $this->aboutImage;
    }
}
?>