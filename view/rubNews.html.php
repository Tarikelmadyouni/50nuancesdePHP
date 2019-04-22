<!DOCTYPE html>
<<<<<<< HEAD
<html lang="">
=======
<html lang="fr">
>>>>>>> 699ab3a1307e1e3820af17e5d3eb1224f578f253
<head>
    <meta charset="utf-8">
<<<<<<< HEAD
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Articles par catégories</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
=======
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

>>>>>>> 699ab3a1307e1e3820af17e5d3eb1224f578f253
</head>
<body>
<h1 class="text-center">Articles par catégories</h1>

<<<<<<< HEAD
<?php
/* Page par rubriques
Liste d'articles ordonnés par date descendante présent dans la rubrique, sans les autres rubriques */


$idcateg = $db->query('SELECT idcategorie, thetitle FROM nuancesdephp ORDER BY id DESC ');

// si la variable $idcateg existe alors
if(isset($idcateg)) {
    // tu affiches toute les categories
    while ($data = $nav->fetch()) {
        echo $data['thetitle'];
    }
    $nav->closeCursor();

}
?>

<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="Hello World"></script>
=======
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="index.html">50nuancesdePHP</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="post.html">contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">connecfion</a>
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
                        <h1>Rubriques</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <!-- fil d'ariane -->
                <div class="fil_ariane row">
                    <!-- changer par function php -->
                    <h4>Afficher les rubriques par:</h4>
                    <form class="col-lg-6" action="rubNews.html.php" method="POST"><!-- start form -->
                        <select name="nav-rubrique" size="1"><!-- start select -->
                            <?php
                            //Création d'un tableau contenant les noms de catégories
                            $categories = Array("default", "action", "aventure","bdsm","biographique","drame","fantastique","historique","romance","thriller");

                            foreach ($categories as $category) {
                                $html = htmlspecialchars($category);
                                $selected = "";
                                //bouton en selected par defaut sur celuiselectionné
                                if ($category == $_POST['nav-rubrique']) {
                                    $selected = "selected";
                                }
                                ?> <option value="<?=$html?>" <?=$selected?>> <?=$html?> </option> <?php
                            }
                            ?>
                        </select> <!-- end select -->
                        <button type="submit" onclick="btnFix()">Chercher</button>
                    </form><!-- end form -->
                    <?php afficheArticle();?>

                    <?php
                    function afficheArticle(){
                        if (isset($_POST['nav-rubrique'])) {
                            $rubrique = $_POST['nav-rubrique'];
                            if ($rubrique == 'default') {
                                echo "Affichage des articles par default";
                            }
                            elseif ($rubrique == 'action') {
                                echo "Affichage des articles par Action";
                            }
                            elseif ($rubrique == 'aventure') {
                                echo "Affichage des articles par aventure";
                            }
                            elseif ($rubrique == 'bdsm') {
                                echo "Affichage des articles par bdsm";
                            }
                            elseif ($rubrique == 'biographique') {
                                echo "Affichage des articles par drame";
                            }
                            elseif ($rubrique == 'drame') {
                                echo "Affichage des articles par drame";
                            }
                            elseif ($rubrique == 'fantastique') {
                                echo "Affichage des articles par fantastique";
                            }
                            elseif ($rubrique == 'historique') {
                                echo "Affichage des articles par historique";
                            }
                            elseif ($rubrique == 'romance') {
                                echo "Affichage des articles par romance";
                            }
                            elseif ($rubrique == 'thriller') {
                                echo "Affichage des articles par thriller";
                            }
                            }//end if
                            else{
                                echo "Affichage des articles par default";
                            }
                        }//end function AfficheArticle
                        ?>
                    </div>
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
              <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
          </div>
      </div>
  </div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script> 
>>>>>>> 699ab3a1307e1e3820af17e5d3eb1224f578f253
</body>
</html>
