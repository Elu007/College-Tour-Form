
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon_cleaned.svg" type="image/x-icon">
    <style>
        @media only screen and (max-width: 1024px){
        
        .container{
            background-color: rgb(179, 147, 209);
            box-shadow: 0px 0px 25px 30px rgb(140, 140, 192);
        }
        .bg {
            opacity: 0;
        }
        .container h1{
            color: white;
        }
        p{
            color: white;
            font-size: 18px;
            font-family: 'Ubuntu', sans-serif;
        }
        .submitMsg{
            color: green;
            font-family: 'Ubuntu', sans-serif;
        }
    }
    </style>
</head>
<body>
    <img class="bg" src="rkmgec.jpeg" alt="College Image Loading">
    <div class="container">
        <h1>Welcome to RKMGEC Bangladesh Travel form</h1>
        <p>Enter your details and submit this form to confirm your participation in this trip.</p>
        <?php
            include("form.php");
            if($insert == true){
                echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the Bangladesh trip.</p>";
                echo '
                <html>
                    <img id="img1" src="success.jpg" alt="success">
                </html>
                ';
            }
        ?>
        <div id="error"></div>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name" required>
            <input type="text" name="age" id="age" placeholder="Enter your age" required>
            <select name="gender" id="gender">
                <option value="">--Select--</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>
            <input type="tel" name="phone" id="phone" placeholder="Enter your phone" required>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information or queries here"></textarea>
            <span>
                <button class="btn" id="submit">Submit</button>
                <button class="btn" id="reset">Reset</button>
            </span>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>