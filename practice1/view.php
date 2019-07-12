<?php
require_once 'Test.php';

$test = new Test();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <title>Document</title>
</head>
<body>
<div class="container">
    <h2 class="subtitle text-center mt-5">Object Oriented PHP</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam asperiores at consequatur delectus
        distinctio, enim est ex, ipsa ipsam nisi nulla officia quaerat quo rem rerum tenetur unde voluptas.</p>
    <hr>
    <?php
    $test->one($_POST);
    ?>

    <form action="" method="POST">
        <table>
            <tr>
                <th>Starting Number</th>
                <td><input type="number" name="sarting_number"></td>
            </tr>
            <tr>
                <th>Ending Number</th>
                <td><input type="number" name="ending_number"></td>
            </tr>
            <tr>
                <th>Your choose</th>
                <td>
                    <input type="radio" name="chiose" value="odd"> Odd
                    <input type="radio" name="chiose" value="even"> Even
                </td>
            </tr>
            <tr>
                <th>Result</th>
                <td><textarea name="result"> </textarea></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" name="submit" value="Button"></td>
            </tr>
        </table>
    </form>

</div>

<!--<script src="js/jquery-3.1.1.min.js"></script>-->
<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="js/popper.min.js"></script>-->
</body>
</html>