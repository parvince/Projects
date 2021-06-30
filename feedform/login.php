<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="login.css">
        <script>
            function Submit(){
                var un = document.forms["login"]["uname"].value;
                var pw = document.forms["login"]["pword"].value;
                var admin = document.forms["login"]["uname"].value;
                var pasw = document.forms["login"]["pword"].value;
                if( un == "Aditya" && pw == "123"){
                   window.location.href = "afterloginselection.php";
                }
                else if( admin == "Admin" && pasw == "321"){
                   window.location.href = "admin.php";
                }else{
                    alert('Invalid Username or Password')
                }
            }     
        </script>

    </head>
<body>
    <form name= "login" method="POST">
        <h2 style="color: blueviolet;margin-left: 2%;margin-top: 2%;">Feedback</h2>
        <div class="container">
            <div id="formContent">
                <div style="padding: 10%;">
                    <div>
                        <h3>Login</h3>
                    </div>
                    <div class="A">
                        <input type="text" id="username" name="uname" placeholder="Username">
                    </div>
                    <div class="A">
                        <input type="password" id="password" name="pword" placeholder="password">
                    </div>
                    <div class="A">
                        <button name="login" onclick="submit()" type="submit" style="background-color: #56baed;border: none;color: white;padding: 15px 80px;text-align: center;text-decoration: none;display: inline-block;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
<?php
    session_start();
    include "connection.php";
    if(isset($_POST['login'])){
    $username=$_POST["uname"];
    $password=$_POST["pword"];
    $query="SELECT * from `login` WHERE `username` = '$username' ";
    $sqli=mysqli_query($conn,$query);
    if($sqli)
    {
        $row = mysqli_fetch_array($sqli);
        if($row['password']==$password)
        {
            session_start();
            $_SESSION["username"]=$username;
            if($row['logintype']=="admin")
            {
                header('location:admin.php');
            }
            else{
                header('location:afterloginselection.php');
            }    
        }
        else{
            header('location:login.php');
        }
    }
    else{
        session_unset();
        echo "<script>error</script>";
    }
    }
?>