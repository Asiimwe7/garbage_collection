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
            require_once("inc/db_connection.php");
            $query="SELECT * FROM user";
            $users=mysqli_query($conn,$query);
            
        ?>

        <h3>Users List</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($users && mysqli_num_rows($users)>0){
                    while($row=mysqli_fetch_assoc($users)){ ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['phone']?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php }
                }
                ?>

                
            </tbody>
        </table>
    </div>
</body>

</html>