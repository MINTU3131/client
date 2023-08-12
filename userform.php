<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
                    <!-- Get user_id from localStorage and set it as a hidden input value -->
                    <?php $user_id = $_GET['user_id'] ?? ''; ?>
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" />
                    <input type="submit" name="submit" value="Submit" />
                </td>
            </tr>
        </table>
    </form>

    <script>
        // Get user_id from localStorage
        const user_id = localStorage.getItem('user_id');
        // Set the user_id value in the hidden input
        document.getElementById('user_id').value = user_id;
    </script>
</body>

</html>