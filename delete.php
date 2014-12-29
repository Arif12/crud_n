<?php
$link= mysqli_connect("localhost",
    "root",
    "lict@2",
    "facebook");

$query="SELECT * FROM users";

$result= mysqli_query($link,$query);
?>

<table border="1" width="70%">
    <tr>
        <td> id </td>
        <td> First Name</td>
        <td> Last Name</td>
        <td> Email</td>
        <td> dob</td>
        <td>gender</td>
        <td>comment</td>
        <td>Action</td>
    </tr>

    <?php
    foreach($result as $row) {
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['firstname']?></td>
            <td><?php echo $row['lastname']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['dob']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['comment']?></td>
           <!-- <td><?php echo $row['passingyear']?></td>
            <td><?php echo $row['duration']?></td>
            <!--<td><?php echo $row['fathers_name']?></td>
            <td><?php echo $row['mothers_name']?></td>
            <td><?php echo $row['religion']?></td> -->
            <td> <a href="edit.php?id=<?php echo $row['id']?>">Edit</a> |
                <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> |
                <a href="view.php?id=<?php echo $row['id']?>">View</a></td>
        </tr>

    <?php

    }
    ?>
</table>
<a href="create.html">HOME</a>
