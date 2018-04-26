<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
    set_time_limit(20);
    //redirect('Auth/' . $_SESSION['grp']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <h1>process <?php echo $_SESSION['grp']; ?></h1>
    </body>
</html>
