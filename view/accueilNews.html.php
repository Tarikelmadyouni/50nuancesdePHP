<?php
/*
 *  création de la vue de l'accueil dans
 *  view/accueilNews.html.php
 *  Amir
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>accueilNews</title>
</head>
<body>
<<<<<<< HEAD
    <h1>Test 2</h1>
    <p><a href="#">Titre (cliquable -> détail art)</a></p>
    <p><a href="#">Rubriques de la nouvelle (cliquables -> rubriques)</a></p>
    <p>Texte coupé à 350 caractères (! attention à la césure du texte)</p>
    <p><a href="#">Auteur (cliquable -> détail auteur)</a></p>
    <p>Date</p>
=======

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.html">50nuancesPHP</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">Rubrique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Connexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>AccueilNews</h1>

                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">


            <?php
            // pas encore d'articles, la variable contient false
            if (!$recup_accueil) {

                ?>
                <h3 class="text-success">Pas encore de nouvelles</h3>
                <?php
            } else {
                foreach ($recup_accueil as $item) {
                    ?>
                    <div class="post-preview">
                        <h2 class="post-title">
                            <a href="?idnouvelle=<?=$item['idarticle']?>"><?= $item['thetitle'] ?></a>
                        </h2>
                        <p>
                            <?php
                            // si on a une
                            if (!is_null($item['idcategorie'])) {


                                $idcateg = explode(",", $item['idcategorie']);
                                $titlecateg = explode("|||", $item['titlecateg']);
                                foreach ($titlecateg as $key => $value) {
                                    ?>
                                    <a href="?idcateg=<?= $idcateg[$key] ?>"><?= $value ?></a>
                                    <?php
                                }
                            }

                            ?>
                        </p>
                        <p><?= $item['thetext'] ?> ...  <a href="?idnouvelle=<?=$item['idarticle']?>">Lire la suite</a> </p>
                        <p>Ecrit par <?= $item['thename'] ?> | Profil: <a
                                    href="?idauthor=<?= $item['iduser'] ?>"><?= $item['thelogin'] ?></a></p>
                        <p>Date : <?= $item['thedate'] ?> </p>
<hr>

                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; 50nuancesPHP 2019</p>
            </div>
        </div>
    </div>
</footer>


<script src="view/js/jquery.min.js"></script>
<script src="view/js/bootstrap.bundle.min.js"></script>
>>>>>>> 699ab3a1307e1e3820af17e5d3eb1224f578f253
</body>
</html>





