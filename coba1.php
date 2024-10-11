<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- tag pembuka form -->
<!-- action dan method merupakan atribut, psot merupakan value-->
<!-- post tidak di tampilkan di url,sedangkan get di tampilkan -->
    <form action="form_action.php" method="post">
        <label for="">Username :</label>
        <!-- name adalah variabel, username adalah value/nilai -->
        <input type="text" name="username"
        placeholder="Username">

        <button type="submit">Kirim</button>
    </form>
    <!-- tag penutup form -->
    <br><br><br>
    
</body>
</html>