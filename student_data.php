<html>
	<body>
		<?php
		echo "you are successfully proceeded!";
		$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());

mysqli_select_db($dbh,"student_db") or die(mysqli_error($dbh));

$name=$_REQUEST['name'];
$usn=$_REQUEST['usn'];
$dept=$_REQUEST['dept'];
$sem=$_REQUEST['sem'];
$phone=$_REQUEST['phone'];

$name=$_REQUEST['name'];
$usn=$_REQUEST['usn'];
$dob=$_REQUEST['dob'];
$gender=$_REQUEST['gender'];
$city=$_REQUEST['city'];
$religion=$_REQUEST['religion'];
$caste=$_REQUEST['caste'];
$state=$_REQUEST['state'];
$country=$_REQUEST['country'];
$pincode=$_REQUEST['pincode'];
$birth_place=$_REQUEST['birth_place'];
$father_name=$_REQUEST['father_name'];
$mother_name=$_REQUEST['mother_name'];
$guardian=$_REQUEST['guardian'];

$usn=$_REQUEST['usn'];
$s1=$_REQUEST['s1'];
$s2=$_REQUEST['s2'];
$s3=$_REQUEST['s3'];
$s4=$_REQUEST['s4'];
$s5=$_REQUEST['s5'];
$s6=$_REQUEST['s6'];
$s7=$_REQUEST['s7'];
$s8=$_REQUEST['s8'];
$s9=$_REQUEST['s9'];
$final_ia_marks=$_REQUEST['final_ia_marks'];
$total_external_marks=$_REQUEST['total_external_marks'];
$number_of_backlogs=$_REQUEST['number_of_backlogs'];
$total_percentage=$_REQUEST['total_percentage'];
$assignment_qna_marks=$_REQUEST['assignment_qna_marks'];

$name=$_REQUEST['name'];
$usn=$_REQUEST['usn'];
$phone=$_REQUEST['phone'];
$admission_date=$_REQUEST['admission_date'];
$category=$_REQUEST['category'];
$total_fees=$_REQUEST['total_fees'];
$due_fees=$_REQUEST['due_fees'];

$name=$_REQUEST['name'];
$usn=$_REQUEST['usn'];
$dept=$_REQUEST['dept'];
$proctor_name=$_REQUEST['proctor_name'];
$guardian_phone=$_REQUEST['guardian_phone'];
$guardian_phone2=$_REQUEST['guardian_phone2'];

	
$query="insert into student_details values('$name','$usn','$dept','$sem','$phone')";
$query="insert into personal_details values('$name','$usn','$dob','$gender','$city','$religion','$caste','$state','$country','$pincode','$birth_place','$father_name','$mother_name','$guardian')";
$query="insert into student_marks_details values('$usn','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$final_ia_marks','$total_external_marks','$number_of_backlogs','$total_percentage','$assignment_qna_marks');
$query="insert into accounts values('$name','$usn','$phone','$admission_date','$category,'$total_fees','$due_fees');
$query="insert into proctor_details values('$name','$usn','$dept','$proctor_name','$guardian_phone','$guardian_phone2');

$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "DATA INSERTED SUCESSFULLY!";

$var=mysqli_query($dbh,"select *from student_data");

echo"<table border size=2>";
echo"<tr><th>name</th> <th>usn</th> <th>dept</th> <th>sem</th> <th>phone</th></tr>";
echo"<tr><th>name</th> <th>usn</th> <th>dob</th> <th>gender</th> <th>city</th> <th>religion</th> <th>caste</th> <th>state</th> <th>country</th> <th>pincode</th> <th>birth_place</th> <th>father_name</th> <th>mother_name</th> <th>guardian</th> </tr>";
echo"<tr><th>usn</th> <th>s1</th> <th>s2</th> <th>s3</th> <th>s4</th> <th>s5</th> <th>s6</th> <th>s7</th> <th>s8</th> <th>s9</th> <th>final_ia_marks</th> <th>total_external_marks</th> <th>number_of_backlogs</th> <th>total_percentage</th> <th>assignment_qna_marks</th> </tr>"; 
echo"<tr><th>name</th> <th>usn</th> <th>phone</th> <th>admission_date</th> <th>category</th> <th>total_fees</th> <th>due_fees</th></tr>";
echo"<tr><th>name</th> <th>usn</th> <th>dept</th> <th>proctor_name</th> <th>guardian_phone</th> <th>guardian_phone2</th></tr>";

while ($arr=mysqli_fetch_row($var))
{
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> <td>$arr[7]</td> <td>$arr[8]</td> <td>$arr[9]</td> <td>$arr[10]</td> <td>$arr[11]</td> <td>$arr[12]</td> <td>$arr[13]</td> </tr>";
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> <td>$arr[7]</td> <td>$arr[8]</td> <td>$arr[9]</td> <td>$arr[10]</td> <td>$arr[11]</td> <td>$arr[12]</td> <td>$arr[13]</td> <td>$arr[14]</td> </tr>";
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> </tr>";
echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> </tr>";
}
echo"</table>";
?>
<a href="index.html">click here to go back to the home page</a>
	</body>
</html> 