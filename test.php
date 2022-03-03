<?php
include_once ('service.php');
    
$persons = getall();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
            <h1>List of Person</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Last Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($persons as $person) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($person['id']) ?></td>
                            <td><?php echo htmlspecialchars($person['name_company']); ?></td>
                            <td><?php echo htmlspecialchars($person['since']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</body>
</html>