<?php
require_once('connection.php');
$id=$_SESSION['SESS_MEMBER_ID'];
$result3 = mysql_query("SELECT * FROM register where username='$username'");
while($row3 = mysql_fetch_array($result3))
{ 
$username=$row3['username'];
$email=$row3['email'];
$password=$row3['password'];
}
?>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="26" colspan="2">Your Profile Information </td>
	<td><div align="right"><a href="index.php">logout</a></div></td>
  </tr>
  <tr>
    <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">Username:</div></td>
    <td width="165" valign="top"><?php echo $username ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Email:</div></td>
    <td valign="top"><?php echo $email ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Password:</div></td>
    <td valign="top"><?php echo $password ?></td>
  </tr>
  
</table>
<p align="center"><a href="index.php"></a></p>