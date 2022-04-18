<?php

/* Session Annihilation */
session_start();
session_destroy();

/* Cookie Annihilation */
/* setcookie('email','',time()-60*60);
setcookie('password','',time()-60*60); */

echo "<meta http-equiv='refresh' content='0; url= login1.php'>";


?>