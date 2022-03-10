<template>
  <div class="center">
      <h1>Wellcome</h1>
      <form method="post">
        <input name="email" type="email" placeholder="Email" class="input_text">
        <br>
        <input name="password" type="password" placeholder="Password" class="input_text">
        <input type="submit" value="Login">
        <div class="signup_link">
        <div class="login_methods">
          <a  class="facebook">Facebook</a>
          <a  class="google">Google</a></div>
        </div>
      </form>
    </div>
</template>

<script>

export default {
  name: 'login_form'
}
</script>

<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#2980b9, #8e44ad);
  height: 100vh;
  overflow: hidden;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 350px;
  background: white;
  border-radius: 5px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
.login_methods  {
  margin-top:  15px;
  display: flex;
  gap: 10px;
  margin-bottom:  40px;
  height:40px;

}

.login_methods a {
    flex: 0 2 50%;
    display: flex;
    align-items: center;
   justify-content: center;
    font-weight: 700;
    border-radius: 3px;
    color: rgb(250, 248, 248);
}
 .login_methods a.facebook {
    background-color: #4795ff;
    margin-right: 15px;
}
.login_methods a.google {
    background-color: #f03939;
}


input[type=email] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type="submit"]{
  width: 100%;
  height: 40px;
  border: 1px solid;
  background: #267e94;
  border-radius: 5px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}

</style>
