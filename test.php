<?php namespace InDemandDigital;
session_start();
set_include_path('includes');
Date_default_timezone_set('UTC');

require 'vendor/autoload.php';

use \InDemandDigital\IDDFramework\Entities AS Ent;
use \InDemandDigital\IDDFramework AS IDD;

 ?>

 <!DOCTYPE HTML>
<html>
<head>

</head>
<body>
<?php
$eventbox = new IDD\Eventbox(8);
var_dump($eventbox);
?>

    </body>
</html>
