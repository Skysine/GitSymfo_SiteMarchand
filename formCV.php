<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Complétez les informations</title>
  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../css/styleForm.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

  <!--Barre de navigation-->
  <nav class="navbar navbar-default navbar-fixed-top" />

    <div class="container">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#maNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="maNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="acceuil.php">Retour à l'acceuil</a></li>
        </ul>
      </div>

    </div>

  </nav>

  <!-- En-tête de la page en cours -->

  <div class="jumbotron text-center">
    <h1>Votre CV</h1>
    <p>Complétez votre les champs ci-dessous puis envoyer les informations </p>
  </div>

  <div clas="container-fluid">
    <div class="row">

      <div class="col-sm-8">
        <p class="paragraphe">
          Vous êtes étudiant du Master, et vous souhaitez être visible des recruteurs remplissez les informations demandées
          et votre CV sera accessible pour tout les recruteurs qui souhaitent le consulter
        </p>
        <p>
          Les informations saisie seront stockée sur base de donnée. Soyez le plus précis possible dans toutes
          les informations saisies.
        </p>
        </div>

        <div class="col-sm-4">
          <span class="glyphicon glyphicon-share logo"></span>
        </div>

      </div>
    </div>



    <!-- Partie du formulaire pour les informations personnelles -->

    <form action="essai.php" method="post" class="form-horizontal">

      <div class="container-fluid bg-grey">

        <div class="panel panel-default">
          <div class="panel-heading">Informations personnelles </div>
          <div class="panel-body">
            <!--<form class="form-horizontal">-->

            <div class="form-group">
              <label class="control-label col-sm-2 col-lg-2" for="nom">Nom:</label>
              <div class="col-sm-10 col-lg-10">
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom" />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2 col-lg-2" for="prenom">Prénom :</label>
              <div class="col-sm-10 col-lg-10">
                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Votre prénom" />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2 col-lg-2" for="adresse">Adresse: </label>
              <div class="col-sm-10 col-lg-10">
                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Votre adresse" />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2 col-lg-2" for="ville">Ville :</label>
              <div class="col-sm-10 col-lg-10">
                <input type="text" class="form-control" name="ville" id="ville" placeholder="Votre ville" />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2 col-lg-2" for="cp">Code Postal :</label>
              <div class="col-sm-10 col-lg-10">
                <input type="text" class="form-control" name="cp" id="cp" placeholder="Votre votre code postal" />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2 col-lg-2" for="email">e-mail :</label>
              <div class="col-sm-10 col-lg-10">
                <input type="text" class="form-control" name="email" id="email" placeholder="Votre e-mail" />
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2 col-lg-2" for="numTel">Téléphone :</label>
              <div class="col-sm-10 col-lg-10">
                <input type="text" class="form-control" name="numTel" id="numTel" placeholder="Votre numéro de téléphone" />
              </div>
            </div>

          </div>

        </div>

        <!--Partie formation-->

        <div class="panel panel-default">
          <div class="panel-heading">Votre formation</div>

          <div class="panel-body">
            <span class="glyphicon glyphicon-plus"></span><a href="#">Ajouter une formation</a>
          </div>

        </div>

        <!--Parite expérience professionnelle-->

        <div class="panel panel-default">
          <div class="panel-heading">Expérience Professionnelle</div>

          <div class="panel-body">
            <span class="glyphicon glyphicon-plus"></span><a href="#">Ajouter une experience professionelle</a>
          </div>
        </div>

        <!--Partie information diverse -->

        <div class="panel panel-default">
          <div class="panel-heading">Divers</div>

          <div class="panel-body">
            <span class="glyphicon glyphicon-plus"></span><a href="#">Ajouter une autre information</a>
          </div>
        </div>

        <!--Bouton enoyer -->
              <input type="submit" class="btn btn-lg btn-default pull-right"/>

      </div>
    </form>

  </body>
  </html>
