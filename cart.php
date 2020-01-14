<!DOCTYPE html>

<?php
  session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <form method="post">
          <input type="number" name="User" value="" placeholder="Keuze">
          <input type="submit" name="" value="Submit">
        </form>

    <?php

      if (isset($_POST["User"])) {
        if ($_POST["User"] < 4) {
          setcookie("User", $_POST["User"]);
            echo "Je hebt gekozen voor: " . $_POST["User"];
        }
        else {
          echo "Je kan alleen kiezen tussen 1 t/m 3";
        }
      }

    ?>

    </body>
</html>
