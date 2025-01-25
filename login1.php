<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","health_predix",3306)or die("Database Error....!");

?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Helth Prediction Website</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="../assets/img/logoi.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->


   <style media="screen">
     body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('doct_back.jpg');
    background-size: cover;
    background-position: center;
}

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            display: flex;
            width: 900px; /* Adjusted width */
            height: 530px; /* Adjusted height */
            max-width: 90%;
            transition: transform 0.3s;
        }

        .login-container:hover {
            transform: translateY(-5px);
        }

        .login-form {
            flex: 1.8;
            padding: 40px;
            text-align: center;
        }

        .login-form h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .login-form input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s;
        }

        .login-form input:hover {
            border-color: #4CAF50; /* Change border color on hover */
        }

        .login-form button {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .login-form button:hover {
            background-color: #45a049;
        }

        .signup-link {
            margin-top: 20px;
            font-size: 14px;
            color: #333;
        }

        .signup-link a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }

        .image-container {
            flex: 1;
            background: url('doctor.jpg') center/cover;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Doctor Login</h2>
            <br>
            <form method="POST" action="login1.php">
                <input type="text" class="form-control" placeholder="Username" required name="uname">
                <br>
                <input type="password" class="form-control" placeholder="Password" required name="password">
                <br>
                <br>
                <br>
                <br>
                <button type="submit" class="btn btn-success" name="save">Login</button>
            </form>
            <div class="signup-link">
                Don't have an account? <a href="../contact.php">Contact to Admin</a>
            </div>
        </div>
        <div class="image-container"></div>
    </div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
<?php
if(isset($_POST['save']))
{
    
    $uname=$_POST['uname'];
    $pass=$_POST['password'];
    
    $res=mysqli_query($con,"SELECT * FROM doctor WHERE Username='".$uname."' && Password='".$pass."'");
    $row=mysqli_fetch_row($res);

   //$res1=mysqli_query($con,"SELECT * FROM hospital WHERE username='".$uname."' && password='".$pass."'");
    //$row1=mysqli_fetch_row($res1);

   if($num=mysqli_num_rows($res)>0)
     {
     session_start();
     $_SESSION['doctor']=$row[0];

    echo'
    <script>
        window.location.href="../doctor/index.php";
    </script>
    ';
    }
   //else if($num1=mysqli_num_rows($res1)>0)
    // {
     //session_start();
    //$_SESSION['hospital']=$row1[0];

    //echo'
    //<script>
  // window.location.href="Hospital/index.php";
   // </script>
    //';
   // }
   
    
    else
    {
        echo'
    <script>
    alert("Wrong Username & Password ");
   window.location.href="login1.php";
    </script>
    ';
    }
}
?>

