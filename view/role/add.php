<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ajout Role</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    </head>
    <body>
        <?php
        if (isset($_GET['ok'])) {
            if ($_GET['ok'] == 1) {
                echo '<div class="alert alert-success" style="text-align: 
                        center; font-size: 20px;">
                    Donnees ajoutees avec succes
                </div>';
            } else {
                echo '<div class="alert alert-danger">
                    Erreur serveur, contactez l\'administrateur
                 </div>';
            }
        }
        ?>

        <div class="container" style="margin-top: 50px;">
            <div class="panel panel-info">
                <div class="panel-heading">Formulaire d'ajout role</div>
                <div class="panel-body">
                    <form method="post" action="controller/CRole.php">
                        <div class="form-group">
                            <label class="control-label">Nom du role</label>
                            <input class="form-control" type="text" 
                                   name="nomRole" id="nomRole" 
                                   required="required"/>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit"
                                   name="valider" value="Save"/>
                            <input class="btn btn-danger" type="reset"
                                   name="annuler" value="Annuler"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>