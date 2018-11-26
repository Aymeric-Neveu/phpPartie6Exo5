<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 4</title>
  </head>
  <body>
    <p><a href='index.php?week=12;'>Dis-moi bonjour !</a></p>
    <?php
    if (isset($_GET['week'])) // On a le nom et le prénom
{
    echo 'Bonjour ' . $_GET['week'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
    echo 'Il faut savoir qu\'elle semaine on est!';
  }
  ?>
  </body>
</html>
