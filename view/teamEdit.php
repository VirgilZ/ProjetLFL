<?php

use LFL\Models\Team;

$id= $_GET['id'] ;
   $team= new Team ;
   $team= $team->setId($id) ;
   $team= $team->getById() ;
?>
<form method="post" action="../index.php?page=team/update" class="text-center  form">
    <input class="btn-light mt-1 text-center " type="text" name='team_name' required value='<?= $team->team_name ?>'>
    <input class="btn-light mt-1 text-center" type="text" name='logo' required value='<?= $team->logo ?>'>
    <input class="" type="hidden" name='id' value='<?= $id?>'>
    <button class="btn btn-secondary">Modifier</button>
</form>