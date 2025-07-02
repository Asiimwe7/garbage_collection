<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">User Management</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Users List</a>
                    <a class="nav-link" href="add-user.php">Add User</a>
                </div>
                </div>
            </div>
        </nav>
        <h3>Add User</h3>
        <?php
        // displaying sample post data
        // var_dump($_POST);
        if(isset($_POST) &&isset($_POST['submit'])){
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $gender=$_POST['gender'];
            $phone=$_POST['telephone'];
            $password=md5($password);
            $sql="INSERT INTO user (username,password,phone,email,gender) VALUES ('$username','$password','$phone','$email','$gender');";
            
            $conn=mysqli_connect('localhost','root','','garbage_collection');
            if($conn){
                $insertQuery=mysqli_query($conn,$sql);
                if($insertQuery){
                    echo'Submitted successfully';
                }
                else{
                    echo mysqli_error($conn);
                }
            }
            else{
                echo mysqli_connect_error($conn);
            }
        }
        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" required>
            
            <label for="">Phone</label>
            <input type="tel" name="telephone" class="form-control" required>
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" required>
            <label for="">Gender</label>
            <select name="gender" class="form-control" required>
                <option value="">Select</option>
                <option value="F">Female</option>
                <option value="M">Male</option>
            </select>
            <button type="submit" name="submit" class="btn btn-success">Save</button>

        </form>
        
    </div>
</body>

</html>