<?php include "Class Exo1.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Exo 1</title>
    <link rel='stylesheet' type='text/css' media='screen' href='Exo1.css'>
</head>
    <body>

        <?php
            $User = new user("Bordrez", "Elliot");
            $User->afficheUser();

        ?>

        <table class="Table">
            <thead>
                <tr>
                    <th>User</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <p>-Nom : String</p>
                        <p>-Prenom : String</p>
                    </td>
                </tr>
                <tr>
                    <td>+AfficheUser() : void</td>
                </tr>
            </tbody>
        </table>
</body>
</html>