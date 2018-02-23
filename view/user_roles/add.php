<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ajout Role-User</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    </head>
    <body>
        
        <div class="container" style="margin-top: 50px;">
            <div class="panel panel-info">
                <div class="panel-heading">Formulaire d'ajout role-user</div>
                <div class="panel-body">
                    <form method="post" action="controller/CUserRole.php">
                        <input type="hidden" value="<?php echo $_GET['id']; ?>" 
                       name="idUser" id="idUser" >
                        <div class="form-group">
                            <label class="control-label">Nom du role</label>
                            <select name="idRole">
                                <option value="">Faite voitre choix</option>
                                <?php
                                while ($role = mysqli_fetch_object($roles)) {
                                    echo "<option value='" . $role->id . "'>" . $role->nomRole . "</option>";
                                }
                                ?>
                            </select>
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