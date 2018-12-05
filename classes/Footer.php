<?php
    class Footer extends Db{
        private $footerText;
    
        private function getAllAbout(){
            $sql = "SELECT * FROM footer";
            $result = $this->connect()->query($sql);
            $numRows = $result -> num_rows;
            if($numRows>0){
                return $result->fetch_assoc();
            }
        }
    
        function __construct() {		
            $results = $this->getAllAbout();
            $this->footerText = $results['texto_footer'];	
        }	
        
        public function getFooterText(){
            return $this->footerText;
        }
    }

?>
<footer id = "footer-hotel">
        <br>
        <?php 
            $footer = new Footer(); 
            echo($footer->getFooterText());
        
        ?>
</footer>