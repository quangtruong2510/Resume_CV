

<?php 
include_once ('config.php');

    function getall() {
        $stmt = $GLOBALS['pdo']->query('SELECT * FROM experiences ');
        $person = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $person[] = [        
                'id' => $row['id'],
                'name_company' => $row['name_company'],
                'since' => $row['since'],
            ];
        }
        return $person;
    }

    function Insert($name_company, $since) {
        $sqp = "INSERT INTO experiences(name_company, since) VALUES('$name_company','$since')";
        echo $sqp;
        $GLOBALS['pdo']->query($sqp);
    }
    $name_company = "DAC - 1" ;
    $since = "2018-2033";
    $sqp = "UPDATE experiences SET name_company = '$name_company', since = '$since'   WHERE(id = 7)";
        echo $sqp;
        $GLOBALS['pdo']->query($sqp);

?>