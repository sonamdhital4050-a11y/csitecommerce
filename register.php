<?php
require_once 'header.php';
require_once 'connection.php';

if(!empty($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); 
    $gender = $_POST['gender'];
    $sql = "INSERT INTO users (name, email, password, gender) 
VALUES ('$name', '$email', '$password', '$gender')";
$result= mysqli_query($conn, $sql);
if($result){
    echo "Registration successful!";    
    }
else{
    echo "Error: ";
}
}
?>

<h1>
    Register Here
</h1>
<form action="register.php" method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Gender:<select name="gender" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br><br>
    <button type="submit">Register</button>

<?php
require_once 'footer.php';
?>

