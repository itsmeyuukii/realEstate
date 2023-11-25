<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
</head>

<body>
    <h1>Contact List</h1>
    <?php if (!empty($users)): ?>
        <table border="1">
            <tr>
                <th>User ID</th>
                <th>User NAme</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td>
                        <?php echo $user->id ?>
                    </td>
                    <td>
                        <?php echo $user->username ?>
                    </td>
                    <td>
                        <?php echo $user->email ?>
                    </td>
                    <td>
                        <div>
                            <?php echo $user->active ? 'Active' : 'Inactive'; ?> <!-- to show 1 = active and 0 = inactive -->
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <h1>No Records Found</h1>
    <?php endif; ?>


    <?php ?>

</body>

</html>