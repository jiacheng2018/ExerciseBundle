<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
   $nameErr=$EmailErr=$GenderErr=$WebsiteErr="";
   $name=$email=$gender=$comment=$website="";
   if($_SERVER["REQUEST_METHOD"]=="POST"){
   	   if(empty($_POST["name"])){
   	   	$nameErr="name is required";
   	   }
   else{
   	   $name=test_input($_POST["name"]);
   }
       if(empty($_POST["website"])){
            $website="";
   }else{
   	       $website=test_input($_POST["website"]);
   }
        if(empty($_POST["comment"])){
        	$comment="";
        }else{
        	$comment=test_input($_POST["comment"]);
        }
        if(empty($_POST["gender"])){
        	$GenderErr="Gender is required";
        }else{
        	$gender=test_input($_POST["gender"]);
        }
   }
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
<label>Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit"> 

</form>

</body>
</html>