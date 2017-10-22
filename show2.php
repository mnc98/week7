<?php
require 'pdoconnect.php' ;
$sql = "select id,email,fname,password from accounts where id<6  ";
$results = runQuery($sql);
if(count($results) > 0)
{
	echo "There are"; echo "\r\n"; echo count($results); echo "\r\n"; echo "results"; echo "<br>";
	}
	
else{
    echo '0 results';
}
?>