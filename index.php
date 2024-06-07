<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceuil</title>
        <link href="./styles/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <section class="navbar">
            <a class="active" href="index.php"><img src="./ressources/logo.png" id="image1"alt="logo"></a> 
            <section class="links">
            <a class="right" href="#"> Gestion de Projet</a> 
            <a class="right" href="consultation.php"> Consultation</a> 
            <a class="right" href="gestion.php"> Gestion</a> 
            <a class="right" href="login.php"> Administration</a>
            </section>
        </section>
        <section class="container">
            <section class="content">
                <h1 id="titre1">Quel est l'objectif de ce site ? </h1>
                <p>Le but de ce site web est de fournir, dans le cadre de la SAÉ23, une intérface de gestion des données de capteurs de plusieurs métriques dans les salles de l'IUT. 
                    Il s'agit donc d'offir aux gestionnaires des bâtiments de l'IUT une interface simple et efficace permettant la visualisation des données de capteurs. 
                    Les bâtiments ont chacuns leur gestionnaire qui peut donc accéder a l'interface de gestion via ses logins et mot de passe pour plus de sécurité. 
                    Une interface pour l'administration est également mise en place afin de permettre a l'administrateur de pouvoir modifier la base de donnée le plus simplement et efficacement possible.</p>
                <h1>Mise en place / fonctionnement</h1>
                <p>- chaque mesure possède une date, un horaire et une valeur<br>
                   - chaque capteur possède un nom unique, un type, une unité et est installé dans une salle<br>
                   - chaque salle possède un nom unique, un type, une capacité d'acceuil et est dans un batiment<br>
                   - chaque batiment possède un nom unique et est géré par un gestionnaire<br>
                   - chaque gestionnaire possède un compte (login, mdp), grâce auquel il peut administrer son batiment<br>
                </p>
                <h1>Bâtiments Gérés</h1>                
                <img src="./ressources/plan_iut.webp" alt="plan iut">
                <p>Les bâtiments gérés sont pour l'instant les bâtiments <u>B, E et A, W, Q</u>.<br>
                    Les salles dont les capteurs émettent des données sont les salles <u>B110</u>, <u>B2048</u>, <u>B1200291923576</u>, <u>E2</u>, <u>E101</u>, <u>E102</u>, <u>E1385</u> </p>
                <h1>Mentions Légales</h1>
                
                <p>
                    <h3>1. Informations Générales</h3>

                    Nom du site web : SAE23.com<br>
                    URL du site web : SAE23.com<br>
                    Responsable de publication : Mr le Deunffffffreééééére <br>
                    Contact : address@mail.random<br>

                    <h3>2. Hébergeur</h3>

                    Nom de l'hébergeur : [Nom de l'hébergeur]  <br>
                    Adresse de l'hébergeur : [Adresse de l'hébergeur]  <br>
                    Téléphone : [Numéro de téléphone de l'hébergeur]<br>

                    <h3>3. Propriété Intellectuelle</h3>

                    L'ensemble du contenu présent sur le site [Nom du site web], incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de [Nom du propriétaire] à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.<br>

                    <h3>4. Conditions d'utilisation</h3>

                    L'utilisation du site [Nom du site web] implique l'acceptation pleine et entière des conditions générales d'utilisation ci-après décrites. Ces conditions d'utilisation sont susceptibles d'être modifiées ou complétées à tout moment, les utilisateurs du site [Nom du site web] sont donc invités à les consulter de manière régulière.

                    <h3>5. Protection des données personnelles</h3>

                    En conformité avec les dispositions de la loi n°78-17 du 6 janvier 1978 modifiée, relative à l'informatique, aux fichiers et aux libertés, le site [Nom du site web] a fait l'objet d'une déclaration auprès de la Commission Nationale de l'Informatique et des Libertés (www.cnil.fr).

                    <h3>6. Limitations de responsabilité</h3>

                    Le site [Nom du site web] ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site [Nom du site web], et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.

                    <h3>7. Liens hypertextes</h3>

                    Le site [Nom du site web] contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de [Nom du responsable]. Cependant, [Nom du site web] n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.

                    <h3>8. Droit applicable et attribution de juridiction</h3>

                    Tout litige en relation avec l’utilisation du site [Nom du site web] est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de [Lieu de juridiction].

                    <h3>9. Contact</h3>

                    Pour toute question concernant les mentions légales du site, vous pouvez nous contacter à l'adresse suivante : [Adresse email de contact].

                </p>
            </section>
        </section>
        <aside id="last">
            <hr />
            <p><em> Validation de la page HTML5 - CSS3 </em></p>
            <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Flalue.atwebpages.com%2FTP_R109%2Frwd.html" target="_blank"> 
                <img class= "image-responsive" src="images/html5-validator-badge-blue.png" alt="HTML5 Valide !" />
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Flalue.atwebpages.com%2FTP_R109%2Fstyles%2Fstyle2RWD.css" target="_blank">
                <img class= "image-responsive" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" />
            </a>
          </aside>
            
          <footer>
            <ul>
              <li>Département Réseaux et Télécommunications</li>
              <li>Cazettes, Le Deunff, Muller, Lalue</li>
              <li>BUT1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>  
          </footer>
    </body>
</html>