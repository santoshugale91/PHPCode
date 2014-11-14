<!DOCTYPE html>
<html>
<body>
<font size="20" color="red">
<?php
 $cars=array("valvo", "BMW", "Toyota");
 $c=count($cars);
 sort($cars);
 for($i=0;$i<$c;$i++){
 echo $cars[$i];
 echo "<br>";
 }
?>
</font>
</body>
</html>