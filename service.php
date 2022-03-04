<?php
include_once('config.php');

function getall()
{
    $stmt = $GLOBALS['pdo']->query('SELECT * FROM experiences ');
    $person = [];
    while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        $person[] = [
            'id' => $row['id'],
            'name_company' => $row['name_company'],
            'since' => $row['since'],
            'position' => $row['position'],
        ];
    }
    return $person;
}

function Insert($name_company, $since, $position)
{
    $sqp = "INSERT INTO experiences(name_company, since,position) VALUES('$name_company','$since','$position')";
    $GLOBALS['pdo']->query($sqp);
}
function Update($name_company, $since, $position, int $id)
{
    $sql = "UPDATE experiences SET name_company='$name_company',since='$since',position='$position' WHERE id=$id";
    echo $sql;
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute();
    header("Location: home.php");
}

function Delete()
{
    $id = $_POST['id'];
    $sql = "DELETE FROM experiences WHERE id=$id";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute();
}

function getById(int $id)
{

    $sql = "SELECT * FROM experiences WHERE id = $id";
    $stmt = $GLOBALS['pdo']->prepare($sql);
    $stmt->execute();
    $person = $stmt->fetch(\PDO::FETCH_ASSOC);
    return $person;
}