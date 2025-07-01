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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">User Management</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">View Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create User</a>
                    </li>
                </ul>
            </div>
        </nav>

        <h3 class="m-2">User List</h3>
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
                <tr>
                    <td>1</td>
                    <td>wilber</td>
                    <td>088788999</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">edit</a>
                        <a href="" class="btn btn-danger btn-sm">delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>