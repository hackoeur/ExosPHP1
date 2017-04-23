<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <title>my php tests</title>

    <body>

        <h1>my php tests</h1>

        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?><br />
<?php echo '<strong>Bonjour à tous</strong>'; ?>.<br />
<?php
     echo 'Ma première instruction.';
     echo 'Ma deuxième instruction.';
 ?><br />
<?php
     echo 'Et en voilà une troisième !';
 ?>
</p>
        <h2>php in html tags</h2>
<?php echo date('h:i:s'); ?> <-- generated in php
        
        <p>
            Cette page contient du code HTML avec des balises PHP.<br />
            <?php echo 'Cette phrase est générée par PHP.' ?><br />
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu 
<?php echo rand(1, 10); ?> <-- random between 1 & 10 generated in php</li>
        <li style="color: red;">Texte en rouge 
<?php echo rand(1, 10); ?> <-- random between 1 & 10 generated in php</li>
        <li style="color: green;">Texte en vert 
<?php echo rand(1, 10); ?> <-- random between 1 & 10 generated in php</li>
        </ul>
<ul>
<li style="color: brown;"><?php echo "<strong>tout en php sur le php :</strong>"; ?></li>
<li><?php echo "l'instruction echo permet d'insérer du text dans la page web et de la rendre visible"; ?></li>
<li> <?php echo "toute instruction se termine par un <strong>;</strong> comme en css"; ?></li>
<li><?php echo "afficher les guillemets sans planter le script-php : précéder le guillemet par un \ \"antislash\"" ?> <-- \"guillemets\" en PHP</li>
</ul>
<p><img src="https://user.oc-static.com/upload/2016/12/26/14827497701347_207111.png" alt="Génération de HTML par PHP" /><br />
génération de html par php</p>
<ul>
<li><?php echo "le commentaire monoligne commence par \"// commentaire\" ligne avant echo ou après le <strong>;</strong> avant la fermeture de la balise-php"; ?></li>
<li><?php echo "le commentaire multilignes est entre \"/* commentaire sur plusieurs lignes */\""; ?></li>
<li style="color: red"><?php echo "comments should be in english aswell titles & names of files"; ?></li>
</ul>

    </body>

</html>

