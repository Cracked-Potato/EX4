
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Operations in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: skyblue;
            margin: 0;
            padding: 0;
            color: darkgreen;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: darkgreen;
        }

        .file-content, {
            margin-top: 20px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            white-space: pre-wrap;
        }

       
    </style>
</head>
<body>

<div class="container">
    <h2>Thank You For Sending us your email</h2>
    <p>We'll be in contact soon!</p>
 <div class="file-content">
    <?php

if (isset($_POST['email'])) {
    
    $email = htmlspecialchars($_POST['email']);
    echo "Your email is $email! You submitted your email.";
} else {
    echo "Please enter your email in the form.";
}
?>
    </div>
</body>
</html>
