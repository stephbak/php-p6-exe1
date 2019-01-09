<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie6</title>
</head>
<body>
  <a href="index.php?lastname=Nemare&firstname=Jean">exercice1</a>
  <!-- isset : si il existe -->
  <?php if (isset($_GET['firstname']) && isset($_GET['lastname'])){ ?>
    <p><?= $_GET['firstname'] . ' ' . $_GET['lastname']; ?></p>
  <?php } ?>
</body>
</html>
