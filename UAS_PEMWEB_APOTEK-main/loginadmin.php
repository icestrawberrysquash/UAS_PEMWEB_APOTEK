<?php include "header.php";?>
<div class="container">
  <div class="row">

<!-- untuk gagal login -->
<div class="row">
<div class="col-md-6 col-md-offset-3">

<form class="form-horizontal" action="" method="post">

<fieldset>
  <legend><h1>Login Admin</h1></legend>
<div class="input-group">
  <span class="input-group-addon bg-primary white"><i class="glyphicon glyphicon-user"></i></span>
  <input class="form-control input-lg" type="text" name="username" placeholder="username" required><br>
</div>

<div class="input-group">
  <span class="input-group-addon bg-primary white"><i class="glyphicon glyphicon-lock"></i></span>
  <input class="form-control input-lg border-primary" type="password" name="password" placeholder="password" required><br>
</div>

    <button class="btn btn-primary col-md-6">Login</button>
    <input type="reset" name="reset" value="Reset" class="btn btn-danger col-md-6">
</fieldset>
</form>

<!-- untuk peringatan gagal login -->
<p>
<div class="alert alert-danger" role="alert">
<span class="glyphicon glyphicon-exclamation-sign" ></span>
<?php 
if ($presets->loginCek($_COOKIE["username"], $_COOKIE["password"]) && $_COOKIE["session"] == "admin") {
  header("Location: admin.php");
}

$user = $_POST["username"];
$password = $_POST["password"];

if (isset($user) && isset($password)) {

  $login = $presets->login("admin", "username", "password", $user, $password);

  if ($login > 0) {
    setcookie("username", "$user", time() + 10000000, "/");
    setcookie("password", "$password", time() + 1000000, "/");
    setcookie("session", "admin",  time() + 10000000, "/");

    header("Location: admin.php");
  }else {
    echo "<script>alert('Kombinasi username atau password salah')</script>";
  }

}else {
  echo "Silakan masukkan data login!";
}


 ?>

</div>

    </div>
  </div>
</div>
</div>

<?php include "footer.php";?>
