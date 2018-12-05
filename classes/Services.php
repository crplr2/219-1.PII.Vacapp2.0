<?php
class Services extends Db{
    private $imageOne;
    private $imageTwo;
    private $imageThree;
    private $imageFourth;



    private function getAllServices(){
        $sql = "SELECT * FROM services";
        $result = $this->connect()->query($sql);
        $numRows = $result -> num_rows;
        if($numRows>0){
            while($row = $result -> fetch_assoc()){
                $data[] = $row;
            }
            return $data;
        }
    }

    function __construct() {		
        $results = $this->getAllServices();
        $this->imageOne = $results[0]['url_imagen_services'];
        $this->imageTwo = $results[1]['url_imagen_services'];
        $this->imageThree = $results[2]['url_imagen_services'];
        $this->imageFourth = $results[3]['url_imagen_services'];	
        
        $this->textOne = $results[0]['texto_services'];
        $this->textTwo = $results[1]['texto_services'];
        $this->textThree = $results[2]['texto_services'];
        $this->textFourth = $results[3]['texto_services'];
    }	
    
    public function getServicesImageOne(){
        return $this->imageOne;
    }
    public function getServicesImageTwo(){
        return $this->imageTwo;
    }
    public function getServicesImageThree(){
        return $this->imageThree;
    }
    public function getServicesImageFourth(){
        return $this->imageFourth;
    }


    public function getServicesTextOne(){
        return $this->textOne;
    }
    public function getServicesTextTwo(){
        return $this->textTwo;
    }
    public function getServicesTextThree(){
        return $this->textThree;
    }
    public function getServicesTextFourth(){
        return $this->textFourth;
    }



}
?>