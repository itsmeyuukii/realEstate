<?php $validation =  \Config\Services::validation(); ?>

<html>
    <style>
        .text-danger {color:red;}
    </style>
<head>
    <title>Form Validation</title>

</head>

<body>
    <h1>Form Validations</h1>
    <?= form_open(); ?>
    <table>
        <tr>
            <td>Username</td>
            <td>
                <input type="text" name="username" value='<?= set_value('username') ?>'>
                <span class ="text-danger" ></span><?= display_error($validation, 'username'); ?></span>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="text" name="email" value='<?= set_value('email') ?>'>
                <span class ="text-danger">
                    <?= display_error($validation, 'email'); ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password" value='<?= set_value('password') ?>'>
                <span class ="text-danger">
                    <?= display_error($validation, 'password'); ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td>
                <input type="text" name="mobile" value='<?= set_value('mobile') ?>'>
                <span class ="text-danger">
                    <?= display_error($validation, 'mobile'); ?>
                </span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="save" value="Save">
            </td>
        </tr>
    </table>
    <?= form_close(); ?>
</body>

</html>