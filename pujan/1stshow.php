<?php
 $server="localhost";
 $username="root";
 $password="";
 $db="pujan";
$q="SELECT * FROM `itementry`";
$con=mysqli_connect("$server","$username","$password","$db");
$result=mysqli_query($con,$q);

echo "<table border=1>";
while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
    echo "<tr>";
    foreach($row as $value){
        echo "<td>";
        echo "$value";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>