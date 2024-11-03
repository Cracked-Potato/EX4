
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
    <h2>You Might See Your Name On Our Website Soon</h2>
    <p>Thank you!</p>
 <div class="file-content">
<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "Hello, $name! You submitted your name.";
} else {
    echo "Please enter your name in the form.";
}
?>
 </div>
</body>
</html>
