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
        <?php 
        require_once('inc/menu.php');
        ?>
        <h3>Add User</h3>
        
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