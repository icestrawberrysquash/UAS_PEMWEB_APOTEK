<?php

unset($_COOKIE["username"], $_COOKIE["password"], $_COOKIE["session"]);

setcookie("username", " ", time() - 10, "/");
setcookie("password", " ", time() - 10, "/");
setcookie("session", " ", time() - 10, "/");

if(!isset($_COOKIE["username"], $_COOKIE["password"], $_COOKIE["session"])){
  header("Location: /");
}
?>
