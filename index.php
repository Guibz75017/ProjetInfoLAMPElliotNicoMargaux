<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
        <title>Le futur de l'énergie</title>
        <link rel="stylesheet" type="text/css" href="./style.css" />
    </head>
    <body>
        <aside></aside>
        <header>
            <nav >
                <ul id="barre">
                    <li id="tete_menu"><a href="../Accueil/Accueil.php">Acceuil</a><ol>
                            <li><a href="../Accueil/Accueil.php">Français</a></li>
                            <li><a href="../Accueil/Home.php">English</a></li></ol></li>
                            
                    <li><a href="../Liste_des_sites/Liste_des_sites.php">Liste des sites</a><ol>
                            <li><a href="../Liste_des_sites/Consulter_liste.php">Consulter liste</a></li>
                            <li><a href="../Liste_des_sites/Ajouter_liste.php">Ajouter liste</a></li>
                        </ol></li>
                        
                        <li><a href="../Détails_d_un_site/Détails_d_un_site.php">Détails d'un site</a><ol>
                    <li><a href="../Détails_d_un_site/Sélection.php">Sélection</a></li>
                    <li><a href="../Détails_d_un_site/Infos_du_site.php">Infos du site</a></li>
                            </ol></li>

                    <li id="queue_menu"><a href="../Voies_d_acheminement/Voies_d_acheminement.php">Voies d'acheminement</a><ol>
                    <li><a href="../Voies_d_acheminement/Consulter_liste.php">Consulter liste</a></li>
                    <li><a href="../Voies_d_acheminement/Ajouter_voie.php">Ajouter voie</a></li>
                            </ol></li>
                </ul>
            </nav>
        </header>
      <?php
// on se connecte à notre base
$base = mysql_connect ('localhost', 'login', 'pass');
mysql_select_db ('Sites Energetiues', $base) ;
?>

<?php
// lancement de la requete
$sql = 'SELECT Position FROM Sites WHERE Nom = "Sainte-Seine Labbaye"';

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on recupere le resultat sous forme d'un tableau
$data = mysql_fetch_array($req);

// on libère l'espace mémoire alloué pour cette interrogation de la base
mysql_free_result ($req);
mysql_close ();
?>
La position de Sainte-Seine L'Abbaye est :<br />
<?php echo $data['Position']; ?>
    </body>
</html>
