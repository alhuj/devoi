<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Liste Users</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    </head>
    <body>
        <?php
        if (isset($_GET['ok'])) {
            if ($_GET['ok'] == 1) {
                echo '<div class="alert alert-success" style="text-align: center; font-size: 20px;">
                    Donnees ajoutees avec succes
                </div>';
            } else {
                echo '<div class="alert alert-danger">
                    vous avez deja le role selectionne......
                 </div>';
            }
        }
        ?>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading" style="margin-top: 38px">
                    Liste des utilisateurs
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Login</td>
                            <td>Nom</td>
                            <td>Roles</td>
                            <td></td>
                        </tr>
                        <?php
                        while ($ligne = mysqli_fetch_object($liste)) {
                            echo "<tr>
                                <td>" . $ligne->login . "</td>
                                <td>" . $ligne->nom . "</td>
                                <td>";
                            require_once 'model/DB.php';
                            require_once 'model/UserRoleDB.php';
                            $roles = listeRoleUser($ligne->id);
                            while ($role = mysqli_fetch_object($roles)) {
                                echo "<a href='?page=revokeuser"
                                . "&idRole=". $role->idRole .""
                                . "&idUti=". $ligne->id ."'>" 
                                    . $role->nomRole . "  </a>";
                            }
                            echo "
                                </td>
                                <td><a href='?page=adduserole&id="
                                        . $ligne->id . "'>Add role</a>
                                </td>
                            </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>