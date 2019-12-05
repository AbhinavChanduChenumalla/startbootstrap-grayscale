<body>
<?php
$c=mysqli_connect("127.0.0.1","root","","rejolt");
        $n=$_POST['USER_NAME'];
		$cn=$_POST['COLLEGE_NAME'];
		$rn=$_POST['ROLL_NUMBER'];
		$mn=$_POST['MOBILE_NUMBER'];
		$ei=$_POST['EMAIL_ID'];
		$p=$_POST['PASSWORD'];
$i="insert into aku values('$n','$cn','$rn',$mn,'$ei','$p')";
if(mysqli_query($c,$i))
{
	echo "<center>REGISTERED SUCESSFULLY</center>";
	echo "<br>";
echo "<h1><center>THANK YOU!</center></h1>";
}
?>
<a href="log.html"><center> click here to login</center></a>
</body>