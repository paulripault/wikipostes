    <?php

    //on inclue ici toutes nos classes !
    spl_autoload_register();

    //paramètres de connexion en constantes
    //soit localhost, soit l'IP du serveur
    define("DBHOST", "localhost");
    //utilisateur de la base (différent de PHPmyAdmin)
    define("DBUSER", "root");
    //mot de passe
    define("DBPASS", "");
    //nom de la base de données
    define("DBNAME", "wikipost");


    //on utilise les sessions dans ce site, alors on prévient PHP
    session_start();

    //on est dans le contrôleur frontal \o/
    //ce fichier reçoit toutes les requêtes au site



    //on instancie notre contrôleur où sont toutes nos méthodes
    //pour chaque page
    //on inclue d'abord la définition de la classe
    $controller = new Controller();

    //si on n'a pas de paramètre dans l'URL... c'est l'accueil
    if (empty($_GET['page'])){
        $controller->home();
    }
    //page détail d'un article
    elseif($_GET['page'] == 'detail'){
        $controller->detail();
    }
    //si on a le paramètre page qui vaut cgu... c'est la page cgu
    elseif($_GET['page'] == 'cgu'){
        $controller->cgu();
    }
    elseif($_GET['page'] == 'creation-article'){
        $controller->createPost();
    }
    elseif($_GET['page'] == 'inscription'){
        $controller->register();
    }
    elseif($_GET['page'] == 'connexion'){
        $controller->login();
    }
    elseif($_GET['page'] == 'deconnexion'){
        $controller->logout();
    }
    //si on n'a pas trouvé la page, alors c'est une erreur 404 !
    else {
        $controller->fourofour();
    }
