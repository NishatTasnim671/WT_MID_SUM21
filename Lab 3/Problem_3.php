<html>
<body>
<?php
 $length=20;
 $width=20;
 $perimeter=2*($length+$width);
 $area=$length*$width;
 if($length==$width)
 {
	echo "the shape is square";
    echo "<br>the perimeter is $perimeter";
	echo "<br>the area is $area";	
 }
 else{
	
    echo "<br>the perimeter is $perimeter";
	echo "<br>the area is $area";
 }
?>
</body>
</html>