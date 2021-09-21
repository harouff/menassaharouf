<?php session_start(); 
include_once('../includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['adminid']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";

exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="admin/index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>دخول المشرف</title>
        <link href="../css/styles.css" rel="stylesheet" />
    
    </head>
    <body class="sb-nav-fixed">
       <?php include_once('navbar1.php');?>
       
          
        <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">

<div class="card-header">
<hr />
    <h3 class="text-center font-weight-light my-4">Admin Page</h3></div>
                                    <div class="card-body">
                                        
                                        <form method="post">
                                            
<div class="form-floating mb-3">
<input class="form-control" name="username" type="text" placeholder="اسم االمستخدم"  required/>
<label for="inputEmail">Admin ID</label>
</div>
                                            

<div class="form-floating mb-3">
<input class="form-control" name="password" type="password" placeholder="كلمة المرور" required />
<label for="inputPassword">Password</label>
</div>


<!--<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
<a class="small" href="password-recovery.php">هل نسيت كلمة المرور؟</a>

</div>--><button class="btn btn-primary" name="login" type="submit">Sign-in</button>
</form>
</div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="../index.php">Main Page</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><?php include('../includes/footer.php');?>
                </main>
            
            </div>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>
