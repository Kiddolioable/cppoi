<?php
  require("dbconnect.php");

  <!-- Connecting to the database -->
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
  $opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
  ];
  $pdo = new PDO($dsn, $user, $pass, $opt);

  <!-- Test query -->
  $return = $pdo->query('SELECT * FROM accounts');
  while ($row = $return->fetch_assoc()) {
    echo $row['name'] . '\n';
  }
?>
