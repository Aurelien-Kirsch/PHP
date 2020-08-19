<html>
<header>
        <style>
            .error {color: #FF0000;}
        </style>
    </header>
    <body>

    <?php
      
    $emailErr = $passwordErr = "";
    $email = $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["email"])){
            $emailErr = "Incorrect email";
        } 
        else{
            $email = test_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Incorrect email";
                }
        }
        if(empty($_POST["password"])){
            $passwordErr = "Incorrect password";
        }
 
    }


    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            E-mail: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span><br>
            password: <input type="password" name="password">
            <span class="error">* <?php echo $passwordErr;?></span><br>
            <input type="submit">
        </form>

    </body>
</html> 