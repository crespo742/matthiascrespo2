<?php include('inc/header.inc.php');?>

<?php
        $result = $bdd->query("SELECT * FROM project");
while ($dossier = $result->fetch(PDO::FETCH_OBJ)) {?>

        <div class="card">
                <div class="card-body">
                        <h5 class="card-title"><?php echo $dossier->titre1; ?></h5>
                        <p><?php echo $dossier->titre2; ?></p>
                        <p><?php echo $dossier->titre3; ?></p>
                        <p><?php echo $dossier->description; ?></p>
                </div>
        </div>

<?php } ?>

<a href="index.php"><button> acceuil </button></a>
