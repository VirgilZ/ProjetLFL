<?php 
    class PlayerController{

        public function playerList(){
            ob_start();
            require_once __DIR__ .'/../view/playerList.php';
            $content = ob_get_clean();
            require_once __DIR__ .'/../templates/Template.php';
        } 
        public function editPlayer(){
            ob_start();
            require_once __DIR__ .'/../view/playerEdit.php';
            $content = ob_get_clean();
            require_once __DIR__ .'/../templates/Template.php';
        } 
        public function createPlayer(){
            ob_start();
            require_once __DIR__ .'/../view/createPlayer.php';
            $content = ob_get_clean();
            require_once __DIR__ .'/../templates/Template.php';
        } 
        public function update(){
            if(!empty($_POST)){
                $team=new \LFL\Models\Player() ;
                $team-> hydrate($_POST) ;
                $team->update() ;
                header('Location: index.php?page=player/playerList');
                exit() ;
            }
        }
        public function create(){
            if(!empty($_POST)){
                $team=new \LFL\Models\Player() ;
                $team-> hydrate($_POST) ;
                $team->create() ;
                header('Location: index.php?page=player/playerList');
                exit() ;
            }
        }
        public function delete(){
            $id=$_GET['id'] ;
            if($id){
                $team=new \LFL\Models\Player() ;
                $team-> setPlayer_id($id) ;
                $team->delete() ;
                header('Location: index.php?page=player/playerList');
                exit() ;
            }
        }
    }