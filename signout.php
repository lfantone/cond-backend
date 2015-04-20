<?
require("system.php");
$hash=$_SESSION['hash'];
unset($_SESSION['admin']);
unset($_SESSION['admin_email']);
unset($_SESSION['admin_nombre']);
unset($_SESSION['admin_superadmin']);
unset($_SESSION['hash']);
header("Location: index.php?hash=$hash&goto=".strip_tags(htmlspecialchars($_GET['goto'], ENT_QUOTES)));
?>