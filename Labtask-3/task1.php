 <?php
 if(isset($_POST['form']))
  {if($_POST['name'] == ""){
   $error_msg['name'] = "Name is required";
  }
}
$name =$_POST["name"];
if(!preg_match("/^[a-zA-Z -]*$/", $name))
   { $error_msg["name"] = "Only Character Please";}


  $email =$_POST["email"];
  {if ($_POST["email"] == "") {
    $error_msg["email"] = "E-Mail is required";
}
}
 $birthdate =$_POST["birthdate"];
  {if ($_POST["birthdate"] == "") {
    $error_msg["birthdate"] = "Date Of Birth is required";
}
}

 { if (empty($_POST["gender"]))
{
  $error_msg["gender"] = "Gender is required";
}
}

  {if (empty($_POST["degree"])) {
    $error_msg["degree"] = "Degree is required";
}
}
$BLOOD =$_POST["BLOOD"];
  {if ($_POST["BLOOD"] == "Null") {
    $error_msg["BLOOD"] = "BLOOD is required";
}
}



?>










<!DOCTYPE HTML>  
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form With validation and Read file PHP</title>
</head>
<body>  

 
<div class="Form-validation">
<form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  <table>
  <tr class="row">
  <td class="Label"> <LABEL for="name">NAME</LABEL></td>
    <td><input class="text" type="text" id="name" name="name" placeholder="NAME">
    <?php
if (isset($error_msg["name"]))
  {echo "<div class='error'>".$error_msg["name"]."</div>";
}
?>
</td> 
  </tr>
  <tr class="row">
    <td class="Label"> <LABEL for="email">E-MAIL</LABEL></td>
    <td><input class="text" type="text" id="email" name="email" placeholder="E-Mail">
    <?php
if (isset($error_msg["email"]))
{
  echo "<div class='error'>".$error_msg["email"]."</div>";
}
?></td> </tr>
    <tr class="row">
  <td class="Label"> <LABEL for="birthdate">DATE OF BIRTH</LABEL></td>
   <td><input type="Date" name="birthdate" id="birthdate" >
   <?php
if (isset($error_msg["birthdate"]))
{
  echo "<div class='error'>".$error_msg["birthdate"]."</div>";
}
?></td></tr>
  <tr class="row">
  <td class="Label"> <LABEL for="gender">Gender</LABEL></td>
  <td> 
  <input type="radio" name="gender" value="female" id="gender"
  <?php if (isset($gender) && $gender ='female') echo "checked='checked'"; ?> />
  <Label for="gender">Female</Label>
  <input type="radio" name="gender" value="Male" id="gender"
  <?php if (isset($gender) && $gender ='Male') echo "checked='checked'"; ?> />
  <Label for="gender">Male</Label>
  <input type="radio" name="gender" value="Other" id="gender"
  <?php if (isset($gender) && $gender ='Other') echo "checked='checked'"; ?> />
  <Label for="gender">Other</Label>
   <?php
if (isset($error_msg["gender"]))
{
  echo "<div class='error'>".$error_msg["gender"]."</div>";
}
?></td></tr>
<tr class="row">
 <td class="Label"> <LABEL for="degree">Degree</LABEL></td>
    <td>
  <input type="radio" name="degree" value="SSC" id="degree"
  <?php if (isset($degree) && $degree ='SSC') echo "checked='checked'"; ?> />
  <Label for="degree">SSC</Label>
  <input type="radio" name="degree" value="HSC" id="degree"
  <?php if (isset($degree) && $degree ='HSC') echo "checked='checked'"; ?> />
  <Label for="gender">HSC</Label>
  <input type="radio" name="degree" value="BSC" id="degree"
  <?php if (isset($degree) && $degree ='BSC') echo "checked='checked'"; ?> />
  <Label for="degree">BSC</Label>
  <input type="radio" name="degree" value="MSC" id="degree"
  <?php if (isset($degree) && $degree ='MSC') echo "checked='checked'"; ?> />
  <Label for="degree">MSC</Label>
  <?php
if (isset($error_msg["degree"]))
{
  echo "<div class='error'>".$error_msg["degree"]."</div>";
}
?></td></tr>

<tr class="row">
  <td class="Label"> <LABEL for="BLOOD">Blood Group</LABEL></td>
        <td>
           <select name="BLOOD" id="BLOOD">
          <option name="BLOOD" value="Null" placeholder="Select a Option"> </option>   
        <option name="BLOOD" value="A+">A+</option>
        <option name="BLOOD" value="A-">A-</option>
        <option name="BLOOD" value="B+">B+</option>
        <option name="BLOOD" value="B-">B-</option>
        <option name="BLOOD" value="AB+">AB+</option>
        <option name="BLOOD" value="AB-">AB-</option>
        <option name="BLOOD" value="O+">O+</option>
        <option name="BLOOD" value="O-">O-</option>
        </select>
        <?php
if (isset($error_msg["BLOOD"]))
{
  echo "<div class='error'>".$error_msg["BLOOD"]."</div>";
}
?></td></tr>
 <tr class="row">
  <td class="Label"> <LABEL for="submit"></LABEL></td>
  <td><input type="submit" name="form" ></td></tr>


</table>
</form>
</div>




</body>
</html>

  <?php
echo "<h2>Your Input:</h2>";
echo $_POST["name"];
echo "<br>";
echo $_POST["email"];
echo "<br>";
echo $_POST["birthdate"];
echo "<br>";
echo $_POST["gender"];
echo "<br>";
echo $_POST["degree"];
echo "<br>";
echo $_POST["BLOOD"];

?>

<?php
$file = fopen("lab3-file.txt", "w") or die("Unable to open file!");
$name;
$email;
$birthdate;
$gender = $_POST["gender"];
$degree = $_POST["degree"];
$BLOOD;

fwrite($file, $name); 
fwrite($file, $email); 
fwrite($file, $birthdate);
fwrite($file, $gender);
fwrite($file, $degree);
fwrite($file, $BLOOD);



fclose($file);
?>
