<?php
echo "hahaha";
echo $_GET['f_id'];
if(isset($_GET['f_id']))
{
// if id is set then get the file with the id from database

include 'dbConnect.php';


$id    = $_GET['f_id'];
echo $id;
$query = "SELECT `name`,`type`,`size`,`content`
         FROM `uploadhomework` WHERE `f_id` = '$id'";

$result = mysqli_query($con,$query) or die('Error, query failed');
list($name,$type,$size,$content) = mysqli_fetch_array($result);
echo $name,' ',$size,' ',$type;

header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
ob_clean();
echo $content;
print $content ;
mysqli_close($con);
exit;

}

?>