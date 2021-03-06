<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wazox E-Sport | Inscription</title>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
        <link href = "https://fonts.googleapis.com/css2?family=Anton" rel="stylesheet">
        <link rel="stylesheet" href="public/css/base.css">
        <link rel="stylesheet" href="public/css/header.css">
        <link rel="stylesheet" href="public/css/form.css">
    </head>
    <body>

    <div class="header header__otherpage">
        <div class="header__texture"></div>
        <div class="header__mask">
            <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#fff"></path>
            </svg>
        </div>
        <div class="container">
            <div class="header__navbar">
                <div class="header__navbar--logo">
                    <h1 class="header__navbar--logo-title">Wazox E-Sport</h1>
                </div>
                <div class="header__navbar--menu">
                    <a href="" class="header__navbar--menu-link"><i class="fas fa-home"></i> Acceuil</a>
                    <a href="" class="header__navbar--menu-link"><i class="fas fa-newspaper"></i> Actualité</a>
                    <a href="" class="header__navbar--menu-link"><i class="fas fa-sign-in-alt"></i> Connexion</a>
                    <a href="" class="header__navbar--menu-link"><i class="fas fa-user-plus"></i> Inscription</a>
                </div>
                <div class="header__navbar-toggle">
                    <span class="header__navbar-toggle-icons"></span>
                </div>
            </div>
            <div class="header__slogan">
                <h1 class="h__slogan--title">Wazox pour la vie</h1>
                <a href="" class="btn">Contactez-nous</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form">
        <?php
        if(isset($_GET['reg_err']))
        {
            $err = htmlspecialchars($_GET['reg_err']);

            switch($err)
            {
                case 'sucess':
                ?>
                    <div class="alert alert-success">
                        <strong>Succès</strong>Inscription réussie !
                </div>
                <?php
                break;
                
                case 'password':
                ?>
                    <div class="alert alert-danger">
                        <strong>Succès</strong>mot de passe différent
                </div>
                <?php
                break;

                case 'email':
                ?>
                    <div class="alert alert-danger">
                        <strong>Succès</strong>email non valide
                </div>
                <?php
                break;

                case 'email_length':
                ?>
                    <div class="alert alert-danger">
                        <strong>Succès</strong>email trop long
                </div>
                <?php
                break;

                case 'pseudo_length':
                ?>
                    <div class="alert alert-danger">
                        <strong>Succès</strong>pseudo trop long
                </div>
                <?php
                break;

                case 'already':
                ?>
                    <div class="alert alert-danger">
                        <strong>Succès</strong>compte deja existant
                </div>
                <?php
                break;

                    
            }
        }
        ?>
            <div class="form__title">Inscription</div>
            <form class="form__inner" action="inscription_traitement.php">
              <div class="form__line">
                 <div class="form__block">
                    <h4 class="form__label">Nom</h4>
                    <input class="form__input" type="text">
                </div>
                <div class="form__block">
                    <h4 class="form__label">Email</h4>
                    <input class="form__input" type="text">
                </div>
              </div>
              <div class="form__line">
                <div class="form__block">
                   <h4 class="form__label">Mot de passe</h4>
                   <input class="form__input" type="text">
               </div>
               <div class="form__block">
                   <h4 class="form__label">Confirmation du mot de passe</h4>
                   <input class="form__input" type="text">
               </div>
             </div>
             <button class="btn">S'inscrire</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="public/css/img/js/app.js"></script>
   </body>
</html>
