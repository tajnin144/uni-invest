<!DOCTYPE html>
<html lang="en">

<head>

    <title>login uni-invest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="login">

        <h1 class="text-center">Hi! Welcome Back!</h1>
      
        
        <form class="needs-validation">
          <p> New to uni-invest? <a href="choice.php"> Sign up</a></p>

          
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" required>
                
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" required>
                
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                
            </div>
            <input class="btn btn-success w-100" type="submit" value="login">
            
    </div>

        </form>

    </div>

</body>

</html>