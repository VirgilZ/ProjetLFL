<?php

use LFL\Models\Player;

If(isset($_GET['id'])){
   $id= $_GET['id'] ;
   $player= new Player ;
   $player= $player->getByTeamId($id) ;
}else{
   $player= new Player ;
   $player= $player->getAll() ;
}
?>
<?php If(isset($id)){?>
   <section class="container">
   <div class="players">
      <?php foreach($player as $p){?>
         <div class="player">
            <img src="../assets/image/Joueurs/<?= $p['image'] ?>.png" alt=""  class="playerimg" >
            <p class="nommidlle"><?= $p['player_name'] ?></p>
         </div>
      <?php } ?>
   </div>
</section>
<?php }else{ ?>
   <section class="container " >
   <h1 class="equipelist">Liste des joueurs :</h1>
      <div class="playercontent ">
      <?php foreach($player as $p){?>
         <div class="player_display " >
            <img src="../assets/image/Joueurs/<?= $p['image'] ?>.png" alt="" class="playerimg" ">
            <p class="text-center"><?= $p['player_name'] ?>
            <a class="card-text" href="../index.php?page=player/editPlayer&id=<?=$p['player_id'] ?>"><i class="fas fa-edit icon"></i></a>
            <a class="card-text" href="../index.php?page=player/delete&id=<?=$p['player_id'] ?>"><i class="fas fa-trash icon"></i></a>
            </p>
            
         </div>
      <?php } ?>
      </div>
   </section>
   <a class="creerequipe btn btn-secondary mb-3" href="../index.php?page=player/createPlayer">Ajouter un joueur :</a>
<?php } ?>
