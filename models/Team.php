<?php

namespace LFL\Models ;

use PDO;
use PDOException;

class Team {
    private $team_name ;
    private $id ;
    private $logo ;
    protected $db ;
    protected $table='teams' ;

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

    public function getAll(){
        $con=$this->db ;
        $request ='SELECT * FROM '.$this->table ;
        $rows = $con->query($request) ;
        return $rows->fetchAll() ;
    }

    public function getById(){
        $con=$this->db ;
        $request ='SELECT * FROM '.$this->table.' WHERE teams_id = ?' ;
        $stmt = $con->prepare($request);
        $stmt->execute([$this->id]);
        $row = $stmt->fetch(PDO::FETCH_OBJ);
        return $row;
    }

    public function update(){
        try{
            $con=$this->db ;
            $sql='UPDATE ' . $this->table.' SET team_name=:team_name, logo=:logo WHERE teams_id=:id' ;
            $req=$con->prepare($sql);
            $req->bindValue(':team_name',$this->team_name) ;
            $req->bindValue(':logo',$this->logo) ;
            $req->bindValue(':id',$this->id) ;
            $req->execute() ;    
        }
        catch(PDOException $e){
            echo $sql.'<br>'.$e->getMessage();
        }
    }

    public function create(){
        try{
            $con=$this->db ;
            $sql='INSERT INTO ' . $this->table.'(team_name,logo) VALUE (:team_name,:logo)' ;
            $req=$con->prepare($sql);
            $req->bindValue(':team_name', $this->team_name) ;
            $req->bindValue(':logo', $this->logo) ;
            $req->execute() ;    
        }
        catch(PDOException $e){
            echo $sql.'<br>'.$e->getMessage();
        }
    }

    public function delete(){
        try{
            $con=$this->db ;
            $sql='DELETE from ' . $this->table.' WHERE teams_id = ? ' ;
            $stmt = $con->prepare($sql);
            $stmt->execute([$this->id]);
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            return $row;  
        }
        catch(PDOException $e){
            echo $sql.'<br>'.$e->getMessage();
        }
    }








    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of logo
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @return  self
     */ 
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of team_name
     */ 
    public function getTeam_name()
    {
        return $this->team_name;
    }

    /**
     * Set the value of team_name
     *
     * @return  self
     */ 
    public function setTeam_name($team_name)
    {
        $this->team_name = $team_name;

        return $this;
    }
}