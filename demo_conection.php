<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbbanhang";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";



/*//indert
$sql= "INSERT INTO tbkhachhang (makhach,tenkhach,sodienthoai) values ('KH2003' ,' Nguyen huy chien', '077777777')";


if ($conn->query($sql) ===true){
    echo "ok roi";
}
else{
    echo "loiroi";

}
*/


$sql ="select makhach ,tenkhach, sodienthoai from tbkhachhang";
$resul = $conn->query($sql);
echo    $resul -> num_rows.count();
//if ($resul -> num_rows >0)  {
//    while ($row = $resul->fetch_row())  {
//        echo "makhach",$row["makhach"], "tenkahch" ,$row["tenkhach"] ,"sdt",$row["sodienthoai"];
//    }
//}
//else{
//    echo "errr";
//}
//$conn->close();


?>
