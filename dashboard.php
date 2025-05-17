<?php include_once 'header.php'?>
<?php include_once 'config.php'?>

<?php
    $sql = "SELECT * from users";
        $getUsers = $conn->prepare($sql);
        $getUsers->execute();

        $users= $getUsers->fetchALL();
        ?>
        <table class="mb-5 table table-bordered">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>username</th>
            <th>Email</th>
            <th>Action</th>
        </thead>

        <tbody>
            <?php
                foreach($users as $user){
                    ?>
                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['emri'] ?></td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><a href="delete.php?id=<?php echo $user['id'] ?>">Delete</a> | <a href="edit.php?id=<?php echo $user['id'] ?>">edit</a></td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>