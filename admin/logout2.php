<?php
session_start();
function destroy_foo() 
{
    global $foo;
    unset($foo);
}

$foo = $_SESSION['username'];
destroy_foo();
$_SESSION["username"]=null;

 die("<script>location.href = 'admin1.php'</script>");
?>