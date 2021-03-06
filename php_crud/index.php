<?php include 'server.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($results)): ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <form action="" method="post">
        <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
        </div>
        <div class="input-group">
            <button type="submit" name="save" class="btn">Save</button>
        </div>
    </form>
</body>
</html>