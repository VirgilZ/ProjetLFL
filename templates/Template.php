<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LFL</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets\css\accueil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="contenu">
        <nav>
            <a href="http://lfl.test/"><img src="assets\image\LFL logo.png" alt="" height="150px"></a>
            <div class="onglets">
                <a href="../index.php?page=Team/teamlist">Equipes</a>
                <a href="../index.php?page=Player/playerList">Joueurs</a>
            </div>
        </nav>
        <main>
            <?php
            echo $content;
            ?>
        </main>


        <footer>

            <div class="services">

                <div class="service">
                    <a href="https://www.intel.fr/content/www/fr/fr/homepage.html"><img src="assets\image\intel.jpg" alt="" height="100px"></a>
                </div>

                <div class="service">
                    <a href="https://www.aldi.fr/"><img src="assets\image\logos-aldi.jpg" alt="" height="100px"></a>
                </div>

                <div class="service">
                    <a href="https://www.cic.fr/fr/index.html"><img src="assets\image\logo_cic.svg" alt="" height="100px"></a>
                </div>

                <div class="service">
                    <a href="https://www.kitkat.com/"><img src="assets\image\KK-Logo-Red.png" alt="" height="100px"></a>
                </div>

                <div class="service">
                    <a href="https://fr.webedia-group.com/"><img src="assets\image\webediafondnoir.png" alt="" height="60px"></a>
                </div>

                <div class="service">
                    <a href="https://play.euw.leagueoflegends.com/fr_FR"><img src="assets\image\LoL-Logo-du-jeu.jpg" alt="" height="100px"></a>
                </div>

                <div class="service">
                    <a href="https://twitter.com/LFLOfficiel"><img src="assets\image\twitterlogonoir.png" alt="" height="100px"></a>
                </div>

                <div class="service">
                    <a href="#">
                        <p>Mentions légales</p>
                    </a>
                </div>

                <div class="service">
                    <a href="#">
                        <p>Réglement</p>
                    </a>
                </div>

            </div>
        </footer>
    </div>
</body>

</html>