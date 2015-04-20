<?
$ftp_server = 'ftp.masticollage.com';
$ftp_user = 'uol';
$ftp_pass = 'florida.537';
$ftp_path = '/';

$conn_id = ftp_connect($ftp_server,21,15); 
print_r($conn_id);
?>
