<?php

include_once "connection.php";

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$Legal_Name = $_POST['Legal_Name'];
$country = $_POST['country'];
$first = $_POST['Address'];
$Age = $_POST['Age'];
$Profession = $_POST['Profession'];
$Email= $_POST['Email'];
$Password= $_POST['Password'];


if(!empty($Legal_Name) && !empty($country))
{

$sql = "INSERT into user(Legal_Name,country,Address,Age,Profession) 
values('$Legal_Name','$country','$Address','$Age','$Profession')";
$result = mysqli_query($db,$sql);
if($result){
  header("location: login.php");
  die;
}
else{
  echo '<script >alert("Warning!! Unable to Update Information")</script>';
}
}

else
{
  echo '<script >alert("Warning!! Unable to Update Information")</script>';
}
}

?>

<!DOCTYPE html>
<html>
    <head> 

            <title>sign up uni-invest</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
            <!-- Bootstrap v5.1.3 CDNs -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
            <!-- CSS File -->
            <link rel="stylesheet" href="style.css">
        

        
    </head>
    <body>
        <div class="sihn form">
        <h1 class="text-center">Information</h1>
        <h2> To invest online,the low requries that we collect some info</h2>
        
           <form method="post" class="needs-validation">
           
              <div class="form-group was-validated">
                  <label class="form-label" for="email">Legal Name</label>
                  <input name="Legal_Name" class="form-control" type="text"  required>
                  
              </div>
              <div class="form-group was-validated">
                  <label class="form-label" for="password">country</label>
                  <input name="country" class="form-control" type="text"  required>
                  
              </div>
              <div class="form-group was-validated">
                <label class="form-label" for="email">Address</Address></label>
                <input name="Address" class="form-control" type="text"  required>
                
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="email">Age</label>
                <input name="Age" class="form-control" type="text" id="email" required>
                
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="email">Profession</label>
                <input name="Profession" class="form-control" type="text" id="email" required>

            <div class="form-group form-check">
                  <input class="form-check-input" type="checkbox" id="check">
                  
              </div>
              <input class="btn btn-success w-100" type="submit" value="Save&continue">
          </form>
        </div>
  




    </body>
    
</html>


