
<?php 
include_once ('service.php');
?>

<!DOCTYPE html>
<html>

<head>
  <title>The Login Form</title>
  <link rel="stylesheet" href="create.css">
<Style>
  *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}
html{
    height: 100%;
}
body{
    font-family: 'Segoe UI', sans-serif;;
    font-size: 1rem;
    line-height: 1.6;
    height: 100%;
}
.wrap {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fafafa;
}
.login-form{
    width: 500px;
    margin: 0 auto;
    border: 1px solid #ddd;
    padding: 2rem;
    background: #ffffff;
}
.form-input{
    background: #fafafa;
    border: 1px solid #eeeeee;
    padding: 12px;
    width: 100%;
}
.form-group{
    margin-bottom: 1rem;
}
.form-button{
    background: #69d2e7;
    border: 1px solid #ddd;
    color: #ffffff;
    padding: 10px;
    width: 100%;
    text-transform: uppercase;
}
.form-button:hover{
    background: #69c8e7;
}
.form-header{
    text-align: center;
    margin-bottom : 2rem;
}
.form-footer{
    text-align: center;
}
</Style>
</head>

<body>
  <div class="wrap">
    <form class="login-form" method="POST" action="">
      <div class="form-header">
        <h1>Add experiences</h1>
        <p>Add your company'information </p>
      </div>
      <!--Email Input-->
      <div class="form-group">
        <h5>Name Company</h5>
        <input type="text" name="name_company" id="name_company" class="form-input" placeholder="DAC Data Technology VietNam">
      </div>
      <!--Password Input-->
      <div class="form-group">
        <h5>Time</h5>
        <input type="text" name="since" id="since" class="form-input" placeholder="2018-2022">
      </div>
      <div class="form-group">
        <h5>Position</h5>
        <input type="text"  name="position" id="position" class="form-input" placeholder="Intern">
      </div>
      <!--Login Button-->
      <!-- <div class="form-group">
      <input type="submit" name="insert" value="insert" onclick="insert()" />
      </div> -->
      <script>
		function myFunction()
		{ $name_company = $_GET['name_company'];
      $since = $_GET['since'];
      $position = $_GET['position'];
			Insert("123", "since");
		}
	  </script>
    <button onclick="myFunction()">Click</button>
    </form>
  </div>
  <!--/.wrap-->
</body>

</html>

