 <?php
 class Database{
        // public $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        public $db;
        public function __construct($hostName,$user,$pass = null,$options){
            $this->hostName = $hostName;//"mysql:host=localhost;dbname=pcs"
            $this->user = $user;//"root"
            $this->pass = $pass;// null 
            $this->options = $options;//[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $this->getPDOConnection();
        }
        public function __destruct(){
            $this->db = NULL;
        }
        public function getPDOConnection(){
            if($this->db == NULL){

                try{
                    //$db = new PDO("mysql:host=localhost;dbname=pcs", "root", null, $options);
                    $db = new PDO($this->hostName,$this->user,$this->pass,$this->options);
                }
                catch(PDOException $e) {
                    $error = "Something went wrong " . $e->getMessage();
                }
            }
        }
 }
 ?>