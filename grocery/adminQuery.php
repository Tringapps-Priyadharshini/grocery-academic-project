<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query</title>
    <link rel="stylesheet" href="adminQuery.css">
</head>

<body>
    <?php
    $select = mysqli_query($conn, "select * from admincontact");
    ?>
    <div class="query-container">
        <table class="tableStyle" border="1" cellspacing="10" cellpadding="10">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Shopname</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <?php
            if (mysqli_num_rows($select) > 0) {
                while ($row = mysqli_fetch_assoc($select)) {
            ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['shopname']; ?> </td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['message']; ?></td>
                    </tr>
                <?php }
            } else {
                ?>
                <tr>
                    <td colspan="4">No Queries</td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>