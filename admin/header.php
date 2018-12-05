<?php
    class Header extends Db{
        private $headerText;
        private $headerImage;
    
        private function getAllHeader(){
            $sql = "SELECT * FROM header";
            $result = $this->connect()->query($sql);
            $numRows = $result -> num_rows;
            if($numRows>0){
                return $result->fetch_assoc();
            }
        }
    
        function __construct() {		
            $results = $this->getAllHeader();
            $this->headerText = $results['texto_header'];
            $this->headerImage = $results['imagen_header'];

        }	
        
        public function getHeaderText(){
            return $this->headerText;
        }


        public function getHeaderImage(){
            return $this->headerImage;
        }
    }

?>

<p id="header">
<img  src=
    <?php 
        $header = new Header(); 
        echo($header->getHeaderImage());
    ?> alt="logo-company" style = "width: 30px; height: auto;">

<?php 
    echo($header->getHeaderText());
?>   
</p>
