<?php

session_start();
// verifica se o usuário está logado, se não estiver redireciona para index
if (!isset($_SESSION['email'])) {
  header("Location: index.php");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="box">
    <h1>Welcome, <span></span></h1>
    <p>This is an <span>admin</span> page</p>

    <button>Logout</button>
  </div>
</body>

</html>