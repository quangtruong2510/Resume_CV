<?php
include_once('service.php');
$id =  $_GET['id'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Form</title>
    <link rel="stylesheet" href="create.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <Style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        height: 100%;
    }

    body {
        background-color: #d89269;
        font-family: 'Segoe UI', sans-serif;
        font-size: 1rem;
        line-height: 1.6;
        height: 100%;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn {
        display: inline-block;
        padding: 7px;
        width: 80px;
    }

    .wrap {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fafafa;
    }

    .login-form {
        width: 500px;
        margin: 0 auto;
        border: 1px solid #ddd;
        padding: 2rem;
        background: #ffffff;
    }

    .form-input {
        background: #fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-button {
        background: #69d2e7;
        border: 1px solid #ddd;
        color: #ffffff;
        padding: 10px;
        width: 100%;
        text-transform: uppercase;
    }

    .form-button:hover {
        background: #69c8e7;
    }

    .form-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .form-footer {
        text-align: center;
    }
    </Style>
</head>

<body>
    <div class="wrap">
        <form class="add-form" method="post" action="./handle.php">
            <div class="form-header">
                <h1 style="color: #69c8e7;">Add experiences</h1>
            </div>

            <?php
      if ($id == "New") {
      ?>
            <div class="form-group">
                <h5>Name Company</h5>
                <input type="text" name="name_company" id="name_company" class="form-input"
                    placeholder="DAC Data Technology VietNam">
            </div>

            <div class="form-group">
                <h5>Time</h5>
                <input type="text" name="since" id="since" class="form-input" placeholder="2018-2022">
            </div>
            <div class="form-group">
                <h5>Position</h5>
                <input type="text" name="position" id="position" class="form-input" placeholder="Intern">
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input class="btn btn-primary" type="submit" name="addNewItem" value="Add">
            <?php } else {
        $person = getById($id);
        $name_company = $person['name_company'];
        $since = $person['since'];
        $position = $person['position'];
      ?>
            <div class="form-group">
                <h5>Name Company</h5>
                <input type="text" name="name_company" id="name_company" class="form-input"
                    value="<?php echo $person['name_company'] ?>">
            </div>

            <div class="form-group">
                <h5>Time</h5>
                <input type="text" name="since" id="since" class="form-input" value="<?php echo $person['since'] ?>">
            </div>
            <div class="form-group">
                <h5>Position</h5>
                <input type="text" name="position" id="position" class="form-input"
                    value="<?php echo $person['position'] ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input class="btn btn-primary" type="submit" name="updateItem" value="Update">
            <?php } ?>
        </form>
    </div>
</body>

</html>