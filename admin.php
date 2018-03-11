<?
// honeypot 

if($_POST['username']) { 
sleep(10);

$filename = "intruders.txt"; 
$date = date('l jS \of F Y h:i:s A');
$handle = fopen($filename,"a+");
$content = "Username: $_POST[username] , Password: $_POST[password]  $date ... from $_SERVER[REMOTE_ADDR] \n";
fwrite($handle,$content);
fclose($handle);

echo "<br/><b>Wrong username or password. Please try again</b><br/><br/>"; } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>WHMCS - Admin alt</title>
</head>
<body>
<!--- sends them to tubgirl -->
<form id='login' action='http://webworkadmin.com' method='post' accept-charset='UTF-8'>
<fieldset>
<legend>WHMCS Secure alt Login</legend> 
<label for='username' >Username*:</label>
<input type='text' name='username' id='username'  maxlength="50" />
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
<input type='submit' name='Submit' value='Submit' />
</fieldset>
</form>
<div id="footer">Copyright &copy; <a href="http://www.whmcs.com/" target="_blank">WHMCompleteSolution</a>.  All Rights Reserved.</div>
</body>
</html>
