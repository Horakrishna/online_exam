<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Examination System in PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>
  <div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
     <h2 text-center>Online Examination System.</h2>
  </div>

  <div class="container">
      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="margin-top:20px;">
          
          <span id="message">
         
          </span>
          <div class="card">
            <div class="card-header">Admin Login</div>
            <div class="card-body">
              <form method="post" id="admin_login_form">
                <div class="form-group">
                  <label>Enter Email Address</label>
                  <input type="text" name="admin_email_address" id="admin_email_address" class="form-control" />
                </div>
                <div class="form-group">
                  <label>Enter Password</label>
                  <input type="password" name="admin_password" id="admin_password" class="form-control" />
                </div>
                <div class="form-group">
                  <input type="hidden" name="page" value="login" />
                  <input type="hidden" name="action" value="login" />
                  <input type="submit" name="admin_login" id="admin_login" class="btn btn-info" value="Login"/>
                </div>
              </form>
              <div class="form-group">
                <a href="register.php"><input type="submit" name="" id="admin_login" class="btn btn-primary" value="Register" /></a>
              </div>
            </div>
          </div>
            
        </div>
        <div class="col-md-3">

        </div>
      </div>
  </div>

</body>
</html>