<?php 
 class TeamController{
    public function teamlist(){
        ob_start();
        require_once __DIR__ .'/../view/teamList.php';
        $content = ob_get_clean();
        require_once __DIR__ .'/../templates/Template.php';
    } 
    public function editTeam(){
        ob_start();
        require_once __DIR__ .'/../view/teamEdit.php';
        $content = ob_get_clean();
        require_once __DIR__ .'/../templates/Template.php';
    } 
    public function createTeam(){
        ob_start();
        require_once __DIR__ .'/../view/createTeam.php';
        $content = ob_get_clean();
        require_once __DIR__ .'/../templates/Template.php';
    } 
    public function update(){
        if(!empty($_POST)){
            $team=new \LFL\Models\Team() ;
            $team-> hydrate($_POST) ;
            $team->update() ;
            header('Location: index.php?page=team/teamlist');
            exit() ;
        }
    }
    public function create(){
        if(!empty($_POST)){
            $team=new \LFL\Models\Team() ;
            $team-> hydrate($_POST) ;
            $team->create() ;
            header('Location: index.php?page=team/teamlist');
            exit() ;
        }
    }
    public function delete(){
        $id=$_GET['id'] ;
        if($id){
            $team=new \LFL\Models\Team() ;
            $team-> setId($id) ;
            $team->delete() ;
            header('Location: index.php?page=team/teamlist');
            exit() ;
        }
    }
 }