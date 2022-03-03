
<?php
$host = "ec2-34-233-157-9.compute-1.amazonaws.com";
$user = "pedhguvnvhauot";
$password = "d6d288e2ce2f7a85fca817773f4e14dd1b9ff62a06005e8b5d938d7645473e8b";
$dbname = "dd9snsfqfaabbg";
$port = "5432";

try{
  //Set DSN data source name
  $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";

  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}
?>

