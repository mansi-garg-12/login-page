<html>
<style>
	div{
               background-color:lightblue;
               border:2px solid black;
		width:600px;
		height:250px;
		margin-top:100px;
		margin-left:100px;
		padding-top:50px;
	}
</style>
<body>
<style>
body {
  background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20190223/ourmid/pngtree-pure-color-watercolor-graffiti-gradient-background-board-design-board-design-image_66713.jpg');
}
</style>
<script language="javascript">
	function cls()
	{
		document.getElementById("name").value="";
		document.getElementById("course").value="";
		document.getElementById("phoneno").value="";
	        document.getElementById("father").value="";
		document.getElementById("mother").value="";
		document.getElementById("city").value="";
	}
</script>
<center>
<div >
<?php

	if(isset($_POST['name']))
	{
		$name=$_POST['name'];
                $course=$_POST['course'];
                $phoneno=$_POST['phoneno'];
		
                $father=$_POST['fathername'];
		$mother=$_POST['mothername'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$con=new mysqli("localhost","root","","coaching");
                if($con->connect_error)
                {
                  die("Connection failed: " . $con->connect_error);

                }	
		$smt=$con->prepare("insert into details(name,course,phoneno,fathername,mothername,address,city)values(?,?,?,?,?,?,?)");
		$smt->bind_param("ssissss",$name,$course,$phoneno,$father,$mother,$address,$city);
		$smt->execute();
                echo "***RECORD ENTERED SUCCESSFULLY NOW ENTERED THE  NEW RECORD***";
$smt->close();
$con->close();

	}
	?>

      <form action=register.php method="post">
	<table>
              <tr>
			<td>Student's Name</td>
			<td><input type=text name=name id=name required></td>
		</tr>
		<tr>
			<td>Course name</td>
			<td><input type=text name=course  id=course required></td>
		</tr><tr>
			<td>Phone no</td>
			<td><input type=text name=phoneno id=phoneno required></td>
		</tr>
<tr>
			<td>Father name</td>
			<td><input type=text name=fathername id=father required></td>
		</tr>
<tr>
			<td>Mother name</td>
			<td><input type=text name=mothername id=mother required></td>
		</tr>
		
		<tr>
			<td>Address</td>
			<td><input type=text name=address required id=address></td>
		</tr>
		<tr>
			<td>City</td>
			<td>
				<select name=city id=city><option value=Mumbhai>mumbhai</option>
					<option value=Delhi>delhi</option>
					<option value=Hyderabad>hyderabad</option>
					<option value=Hapur>hapur</option>
					<option value=Merrutr>merrut</option>
					<option value=kanpur>kanpur</option>
                                         <option value=lucknow>lucknow</option>
					<option value=bhopal>bhopal</option>
					<option value=patna>patna</option>
					<option value=ghazibad>gazibad</option>
					<option value=agra>agra</option>
					<option value=srinagar>srinagar</option>
					<option value=Ajmer>Ajmer</option>
					<option value=Jaipur>Jaipur</option>
					<option value=Bikaner>Bikaner</option>
					<option value=Jodhpur>Jodhpur</option>
					<option value=Badmer>Badmer</option>
					<option value=Jaisalmer>Jaisalmer</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type=button value=clear onclick=cls()></td>
			<td><input type=submit value=Submit></td>
		</tr>
</table>
</form>
</div>
</center>
</body>
</html>
