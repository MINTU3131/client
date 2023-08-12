<?php
if (count($_POST) > 0) {
    print_r($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dynamic form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form name="form1" method="post" action="">
        <table>
            <tr>
                <td>Enter Name</td>
                <td><input type="text" name="first_name" id="name" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="hidden" name="user_id" id="user_id" value="" />
                    <input type="submit" name="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>