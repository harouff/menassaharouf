<?php session_start();
require_once('includes/config.php');

//Code for Registration 
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
   
    $email=$_POST['email'];
   $password=$_POST['password'];
    $contact=$_POST['contact'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('رقم هذه السيارة قد تم تسجيله مسبقا ');</script>";
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
} else{
    $msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$password','$contact')");

if($msg)
{
    echo "<script>alert('تم التسجيل بنجاح');</script>";
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
}
}
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>المنصة</title>
        <link href="css/styles.css" rel="stylesheet" />
        
    
        <script type="text/javascript">

</script>
    </head>
    <body class="sb-nav-fixed">
     <?php include_once('includes/navbar.php');?>
       
          
            <div id="layoutSidenav_content">
            
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><br>
                                        
<h2 align="center">تسجيل منصة حاروف لتعبئة البنزين</h2>
<hr />
                                        
                                    <div class="card-body">
<form method="post" name="signup" onsubmit="return checkpass();">

<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="fname" name="fname" type="text" placeholder="الإسم" required />
<label for="inputFirstName">الإسم الأول</label>
</div>
</div>
                                                
<div class="col-md-6">
<div class="form-floating">
<input class="form-control" id="lname" name="lname" type="text" placeholder="الشهرة" required />
 <label for="inputLastName">الشهرة</label>
</div>
</div>
</div>

<div class="form-floating mb-3">
<input class="form-control" id="contact" name="contact" type="text" placeholder="03858326"  required />
<label for="inputcontact">رقم الهاتف</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="email" name="email" placeholder="رقم السيارة/الرمز" required/>
<label for="inputEmail">رقم السيارة/الرمز</label>
</div>

<div class="form mb-3">
 <div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="password" name="password" placeholder="لون الآلية" required/>
<label for="inputPassword">لون الآلية</label>
</div>
</div>
                                                





        



                                            

<div class="mt-4 mb-0">
<div class="d-grid"><button type="submit" class="btn btn-primary btn-block" name="submit">تسجيل</button></div>
</div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
 
  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div></div>
         <?php include_once('includes/footer.php');?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
