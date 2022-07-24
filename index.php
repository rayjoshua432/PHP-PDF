<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <form action="/PHP-PDF/pdf.php" method="post">
        <h2>Contact Information</h2>
        <label for="f_name"><strong>First Name:</strong></label>
        <input type="text" name="f_name" id="f_name" placeholder="Enter your first name..." required>
        <label for="l_name"><strong>Last Name:</strong></label>
        <input type="text" name="l_name" id="f_name" placeholder="Enter your last name..." required>
        <br>
        <input type="submit" value="Convert to PDF" name="submit">
    </form>
</body>

</html>