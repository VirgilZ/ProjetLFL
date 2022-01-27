<?php

use LFL\Models\Player;
use LFL\Models\Team;

$id= $_GET['id'] ;
   $Player= new Player ;
   $Player= $Player->setPlayer_id($id) ;
   $Player= $Player->getById() ;
   $Teams= new Team ;
   $Teams=$Teams->getAll();
   $currentTeam= new Team ;
   $currentTeam=$currentTeam->setId($Player->teams_id) ;
   $currentTeam=$currentTeam->getById() ;
?>
<form method="post" action="../index.php?page=Player/update" class="text-center  form">
    <input class="btn-light mt-1 text-center" type="text" name='player_name' required value='<?= $Player->player_name ?>'>
    <input class="btn-light mt-1 text-center" type="text" name='image' required value='<?= $Player->image ?>'>
    <select name="teams_id" id="" class="btn-light mt-1 text-center">
        <option default value="<?= $currentTeam->teams_id ?>"><?= $currentTeam->team_name ?></option>
    <?php foreach($Teams as $t){ ?>
        <option value="<?= $t['teams_id']  ?>"><?= $t['team_name'] ?></option>
    <?php } ?>
    </select>
    <input type="hidden" name='player_id' value='<?= $id?>'>
    <button class="btn btn-secondary">Modifier</button>
</form>