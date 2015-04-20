<?

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Conduciendo - Iniciar Sesi&oacute;n</title>
<link href="assets/styles/screen.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="assets/scripts/prototype.js"></script>
</head>
<body>
<div class="top">
<div class="inner"><img src="assets/images/logo.gif" width="216" height="35" /></div>
</div>

<div class="header">
    <div class="inner">&nbsp;</div>
</div>

<div class="container">
    <div class="content">
        <h1>Iniciar sesi&oacute;n</h1>

        <div class="form">
            <form id="form1" name="form1" method="post" action="signin.php">
                <table border="0" cellspacing="6" cellpadding="6">
                    <tr>
                        <td class="label">Email</td>
                        <td><input name="email" type="text" class="field" id="email" /></td>
                    </tr>
                    <tr>
                        <td class="label">Password</td>
                        <td><input name="password" type="password" class="field" id="password" /></td>
                    </tr>

                    <tr>
                        <td>&nbsp;</td>
                        <td><button type="submit" class="bold1">aceptar</button></td>
                    </tr>
                </table>
                <input name="goto" type="hidden" value="<?php echo strip_tags(htmlspecialchars($_GET['goto'], ENT_QUOTES)); ?>" id="goto" />
            </form>
        </div>
    </div>
</div>
</body>
</html>
