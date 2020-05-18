<?php include('inc/header.inc.php');?>

<?php
//Enregistrement du nouvelle article
if (!empty($_POST)) {



    // Insertion

    $_POST["titre1"] = htmlentities($_POST["titre1"], ENT_QUOTES);
    $_POST["titre2"] = htmlentities($_POST["titre2"], ENT_QUOTES);
    $_POST["titre3"] = htmlentities($_POST["titre3"], ENT_QUOTES);
    $_POST["description"] = htmlentities($_POST["description"], ENT_QUOTES);


    $requeteSQL = "INSERT INTO project (titre1,titre2,titre3,description )";
    $requeteSQL .= " VALUE ('$_POST[titre1]', '$_POST[titre2]','$_POST[titre3]','$_POST[description]')";
    //echo $requeteSQL;
    $result = $bdd->exec($requeteSQL);
    echo $result . ' Vos informations ont bien etait enregistrer<br>';

}


?>

<div class="starter-template">
    <form method="POST" action="" enctype='multipart/form-data'>

        <div class="form-group">
            <label for="titre">titre1</label>
            <input type="texte" class="form-control" id="titre1" name="titre1">
        </div>

        <div class="form-group">
            <label for="titre">titre2</label>
            <input type="texte" class="form-control" id="titre2" name="titre2">
        </div>

        <div class="form-group">
            <label for="contenu">titre3</label>
            <textarea rows="10" class="form-control" id="titre3" name="titre3"></textarea>
        </div>

        <div class="form-group">
            <label for="titre">description</label>
            <input type="texte" class="form-control" id="description" name="description">
        </div>



        <button type="submit" class="btn btn-primary">Enregistrer les informations</button>

    </form>
</div>