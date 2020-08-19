<html>
    <header>
        <style>
            .error {color: #FF0000;}
        </style>
    </header>
        <body>
                <?php

                    $nameErr = $emailErr = $passwordErr = $password_confirmationErr = "";
                    $name = $email = $password = $password_confirmation = "";

                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        if(empty($_POST["name"])){
                            $nameErr = "Invalid name";
                        } 
                        else{
                            $name = test_input($_POST["name"]);
                                if(!preg_match("/^[a-zA-Z ]*$/",$name)){
                                    $nameErr = "Invalid name";
                                }
                            }
                        if(empty($_POST["email"])){
                            $emailErr = "Invalid email";
                        } 
                        else{
                            $email = test_input($_POST["email"]);
                                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                    $emailErr = "Invalid email";
                                }
                        }
                        if(empty($_POST["password"])){
                            $passwordErr = "Invalid password";
                        }
                        if(empty($_POST["password_confirmation"])){
                            $password_confirmationErr = "Invalid password or password_confirmation";
                        }
                        else{
                            if($password_confirmation != $password){
                                $password_confirmationErr = "Invalid password or password_confirmation";
                            }
                            else{
                                $password == $password_confirmatiion;
                                password_hash($password_confirmation, PASSWORD_DEFAULT);
                            }
                        }
                        $servername = "localhost";
                        $username = "root";
                        $password = "Aur_006_$";
                        $dbname = "mydb";
                        try{
                            $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "CREATE TABLE MyGuests (
                                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                name VARCHAR(30) NOT NULL,
                                email VARCHAR(20) NOT NULL,
                                password VARCHAR(100) NOT NULL,
                                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                                )";
                             $conn->exec($sql);
                             echo "New record created successfully";
                            }
                        catch(PDOException $e){
                            echo $sql . "<br>" . $e->getMessage();
                        }
                        $conn = null;
                    }
                function test_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Name: <input type="text" name="name" placeholder="name" minlength="3" maxlength= "10">
                <span class="error">* <?php echo $nameErr;?></span><br>
                E-mail: <input type="text" name="email" placeholder="email">
                <span class="error">* <?php echo $emailErr;?></span><br>
                Password: <input type="password" name="password" placeholder="password" minlength="3" maxlength= "10">
                <span class="error">* <?php echo $passwordErr;?></span><br>
                Password_confirmation: <input type="password" name="password_confirmation" placeholder="password_confirmation">
                <span class="error">* <?php echo $password_confirmationErr;?></span><br>
                <input type="submit">
            </form>

        </body>
</html> 
