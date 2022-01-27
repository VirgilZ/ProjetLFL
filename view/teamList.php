<?php
    use LFL\Models\Team ;
    $team= new Team ;
    $team= $team->getAll() ;
    ?>

<section class='container'>
    <h1 class="equipelist">Liste des équipes:</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach($team as $t){ ?>
<div class="col">
<div class="card" style="width: 18rem;">
            <img src="../assets/image/Logo/<?=$t['logo'] ?>.png" class="card-img-top" alt="...">
            <div class="card-body">
            <a class="card-text" href="../index.php?page=player/playerList&id=<?=$t['teams_id'] ?>"><?=$t['team_name'] ?></a>
            <a class="card-text" href="../index.php?page=team/editTeam&id=<?=$t['teams_id'] ?>"><i class="fas fa-edit icon"></i></a>
            <a class="card-text" href="../index.php?page=team/delete&id=<?=$t['teams_id'] ?>"><i class="fas fa-trash icon"></i></a>
            </div>
    </div>
</div>
    <?php } ?>
    </div>
    <a href="../index.php?page=team/createTeam" class="creerequipe btn btn-secondary mb-3">Créer une équipe:</a>
</section>