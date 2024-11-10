
<?php
$con=sqlserver_connect('localhost','root');
if($con){
    echo "connection successful";
}
else{
     echo "No connection";
}



?>