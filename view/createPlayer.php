<?php 
use LFL\Models\Team;

$Teams= new Team ;
$Teams=$Teams->getAll();

?>

<form method="post" action="../index.php?page=player/create"  class="text-center  form">
    <input class="btn-light mt-1 text-center" type="text" name='player_name' required placeholder="Entrez le nom du joueur" >
    <select name="teams_id" id="">
        <option value="none" required selected="true" disabled="disabled" >Choisissez une équipe </option>
    <?php foreach($Teams as $t){ ?>
        <option value="<?= $t['teams_id']  ?>"><?= $t['team_name'] ?></option>
    <?php } ?>
    </select>
    <input class="btn-light mt-1 text-center" type="text" name='image' required placeholder="Entrez le nom de l'image du joueur">
    <button>Créer</button>
</form>