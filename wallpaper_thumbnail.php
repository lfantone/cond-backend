<?
include("classes/thumbnail.php");

$id = htmlspecialchars($_GET['id'], ENT_QUOTES);
$size = htmlspecialchars($_GET['size'], ENT_QUOTES);

$image_path = "../uploads/wallpapers/$id.jpg";

switch($size){
	case 1:
		$width = 80;
		$height = 53;
	break;
	case 2:
		$width = 640;
		$height = 480;
	break;	
}

$image=new thumbnail($image_path,60);
$image->resize($width,$height);
$image->show(); 
?>