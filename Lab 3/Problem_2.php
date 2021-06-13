<html>
<body>
<?php
 $marks=90;
 if($marks>=90)
 {
	 echo "The grade is A+";
 }
 elseif($marks>=80 and $marks<90)
 {
	 echo "The grade is A";
 }
 elseif($marks>=70 and $marks<80)
 {
	 echo "The grade is B";
 }
 elseif($marks>=60 and $marks<70)
 {
	 echo "The grade is C";
 }
 else{
	 echo "The grade is F";
 }
?>
</body>
</html>