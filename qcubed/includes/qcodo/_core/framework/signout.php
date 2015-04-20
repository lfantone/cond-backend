<?
require("system.php");

unset($_SESSION['admin']);
unset($_SESSION['admin_email']);
unset($_SESSION['admin_nombre']);
unset($_SESSION['admin_superadmin']);
header("Location: index.php?goto=".strip_tags(htmlspecialchars($_GET['goto'], ENT_QUOTES)););
?>