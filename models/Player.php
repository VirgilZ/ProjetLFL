<?php
            namespace LFL\Models ;

            use PDO;
            use PDOException;
            
    class Player{

        private $player_id ;
        private $teams_id ;
        private $player_name ;
        private $image ;
        protected $db ;
        protected $table='players' ;
    
        public function __construct(){
            $this->db= \LFL\Databases\Database::getInstance();
        }
    
        public function hydrate(array $data)
        {
            foreach ($data as $key => $val) {
                $method = 'set' . ucfirst($key);
    
                if (method_exists($this, $method)) {
                    $this->$method($val);
                }
            }
        }

        public function getByTeamId($id){
            $con=$this->db ;
            $request ='SELECT * FROM '.$this->table.' WHERE teams_id =  '.$id ;
            $rows = $con->query($request) ;
            return $rows->fetchAll() ;
        }

        public function getAll(){
            $con=$this->db ;
            $request ='SELECT * FROM '.$this->table ;
            $rows = $con->query($request) ;
            return $rows->fetchAll() ;
        }
        public function update(){
            try{
                $con=$this->db ;
                $sql='UPDATE ' . $this->table.' SET teams_id=:teams_id, image=:image,player_name=:player_name WHERE player_id=:id' ;
                $req=$con->prepare($sql);
                $req->bindValue(':teams_id',$this->teams_id) ;
                $req->bindValue(':image',$this->image) ;
                $req->bindValue(':player_name',$this->player_name) ;
                $req->bindValue(':id',$this->player_id) ;
                $req->execute() ;    
            }
            catch(PDOException $e){
                echo $sql.'<br>'.$e->getMessage();
            }
        }
    
        public function create(){
            try{
                $con=$this->db ;
                $sql='INSERT INTO ' . $this->table.'(teams_id,image,player_name) VALUE (:teams_id,:image,:player_name)' ;
                $req=$con->prepare($sql);
                $req->bindValue(':teams_id',$this->teams_id) ;
                $req->bindValue(':image',$this->image) ;
                $req->bindValue(':player_name',$this->player_name) ;
                $req->execute() ;    
            }
            catch(PDOException $e){
                echo $sql.'<br>'.$e->getMessage();
            }
        }
    
        public function delete(){
            try{
                $con=$this->db ;
                $sql='DELETE from ' . $this->table.' WHERE player_id = ? ' ;
                $stmt = $con->prepare($sql);
                $stmt->execute([$this->player_id]);
                $row = $stmt->fetch(PDO::FETCH_OBJ);
                return $row;  
            }
            catch(PDOException $e){
                echo $sql.'<br>'.$e->getMessage();
            }
        }
        public function getById(){
            $con=$this->db ;
            $request ='SELECT * FROM '.$this->table.' WHERE player_id = ?' ;
            $stmt = $con->prepare($request);
            $stmt->execute([$this->player_id]);
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;
        }











        /**
         * Get the value of player_id
         */ 
        public function getPlayer_id()
        {
                return $this->player_id;
        }

        /**
         * Set the value of player_id
         *
         * @return  self
         */ 
        public function setPlayer_id($player_id)
        {
                $this->player_id = $player_id;

                return $this;
        }

        /**
         * Get the value of teams_id
         */ 
        public function getTeams_id()
        {
                return $this->teams_id;
        }

        /**
         * Set the value of teams_id
         *
         * @return  self
         */ 
        public function setTeams_id($teams_id)
        {
                $this->teams_id = $teams_id;

                return $this;
        }

        /**
         * Get the value of player_name
         */ 
        public function getPlayer_name()
        {
                return $this->player_name;
        }

        /**
         * Set the value of player_name
         *
         * @return  self
         */ 
        public function setPlayer_name($player_name)
        {
                $this->player_name = $player_name;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }
    }