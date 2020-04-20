<html>
    <head>
        <title>
            sign up form
        </title>
    </head>
    <style>
        body
        {
            text-align: center;
        }
        
        form
        {
         background-color: orange;
        }

    </style>
    <body>
        <form action="form.php" method="post">
<h1>username</h1><br>
<input type="text" name="username"><br>
<h1>password</h1><br>
<input type="text" name="password"><br>
<input id="s" type="submit" name="submit"><br>
</form>
    </body>
</html>

<?php
$name=$_REQUEST['username'];
$password=$_REQUEST['password'];
echo $name;
echo '<br>';
echo $password;
?>