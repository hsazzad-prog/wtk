<!DOCTYPE html>
<html>
<body>

<h2>The method Attribute</h2>



<form action="action.php"  method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  Select a hobby
  <input type="checkbox" id="check1" name="check1" value="reading">Reading
  <input type="checkbox" id="check2" name="check2" value="surfing">Surfing
  <br><br>
  Select a gender
  <input type="radio" id="gender1" name="gender" value="male">Male
  <input type="radio" id="gender2" name="gender" value="female">Female
 
  
  
  <input type="submit" value="Submit">
</form>

<p>After you submit, notice that the form values is visible in the address bar of the new browser tab.</p>

</body>
</html>
