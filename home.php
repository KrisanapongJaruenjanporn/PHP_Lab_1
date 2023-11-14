<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;500&family=Sarabun&display=swap"
        rel="stylesheet">
    <title>My Home Page</title>
    <!-- #### ส่วนของ CSS ตกแต่งเว็บไซต์ ### -->
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <style>
    body,
    html {
        background-size: cover;
        font-family: 'Kanit', sans-serif;
    }

    a {
        text-decoration: none;
        color: black;
    }

    img,
    H2 {

        display: inline;
    }

    .row {
        display: flex;
    }

    .column {
        flex: 50%;
    }

    table {
        margin: auto auto auto auto;
    }
    </style>

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->

<body background="./31.png">
    <?php
        $birthdate = '2002-11-01';
        $currentDate = date('Y-m-d');
        $birthdateObj = new DateTime($birthdate);
        $currentDateObj = new DateTime($currentDate);
        $age = $birthdateObj->diff($currentDateObj)->y;
    ?>
    <div class="row">

        <div class="column" align="right" style="padding-right: 20px;padding-top: 40px;">
            <!-- ใส่ลิงก์ในหน้าเว็บที่นี่ -->
            <a href="home.php"><strong>HOME</strong></a><strong> |
                <a href="php1.php">PHP 1</a> |
                <a href="php2.php">PHP 2</a> |
                <a href="loop.php">LOOP</a> |
                <a href="array.php">ARRAY</a>
            </strong>
        </div>

    </div>
    <hr />
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

    <!-- ใส่ CODE PHP ที่นี่ -->
    <table border="1">
        <tr>
            <td>Firstname</td>
            <td>HARRY</td>
        </tr>
        <tr>
            <td>Lastname</td>
            <td>POTTER</td>
        </tr>
        <tr>
            <td>Nickname</td>
            <td>HARRY</td>
        </tr>
        <tr>
            <td>Age</td>
            <td><?php echo $age ?></td>
        </tr>
        <tr>
            <td>Update</td>
            <td><?php echo $currentDate ?></td>
        </tr>
    </table>

</body>

</html>