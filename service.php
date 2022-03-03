

<?php 
require_once ('config.php');

 function all() {
    $stmt = $pdo->query('SELECT * FROM experiences ');
    $person = [];
    while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        echo $row['id'];
        $person[] = [
            
            'id' => $row['id'],
            'name_company' => $row['name_company'],
            'since' => $row['since'],
        ];
    }
    return $person;  
 }

?>