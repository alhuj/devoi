<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Liste Roles</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
    </head>
    <body>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading" style="margin-top: 38px">
                    Liste des roles
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <td>Roles</td>
                            <td></td>
                        </tr>
                        <?php
                        while ($ligne = mysqli_fetch_object($liste)) {
                            echo "<tr>
                                <td>" . $ligne->nomRole . "</td>
                                <td><a href='controller/CRole.php?id=" . $ligne->id . "'>Delete</a></td>
                            </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>