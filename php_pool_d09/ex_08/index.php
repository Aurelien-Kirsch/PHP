<html>  
<body>

<?php
if($_POST['name'] == NULL){?>
<form method="post">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>
<?php } 
elseif(isset($_POST['name'])){
    $name = $_POST['name'];
    echo "Welcome" . " " . $name;
}
?>
</body>
</html>