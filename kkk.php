

<?php
include ('logsystem.php');
if(isset($_POST['updatelog']))
{
$log = LogFactory::create('ERROR(severity)','newadditem(processname)');

}



?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
  <input type="submit" name="updatelog"  value="Submit">
</form> 
