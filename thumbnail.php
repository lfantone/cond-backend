<?
include("classes/thumbnail.php");

$id = htmlspecialchars($_GET['id'], ENT_QUOTES);
$size = htmlspecialchars($_GET['size'], ENT_QUOTES);

$image_path = "../uploads/images/$id.jpg";

switch($size){
	case 1:
		$width = 80;
		$height = 53;
	break;
}

$image=new thumbnail($image_path,60);
$image->resize($width,$height);
$image->show(); 
?>