<?php
include("../includes/functions.php");
if(checkSession('aloggedin')==true)
{
?>

<?php
}
else{
redirect("login.php");
}
?>
