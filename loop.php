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
    .container{
        padding: 6%;
        color: #fff;
        width: 50%;
        margin: auto auto auto auto;
        background: #a21323;
    }
    </style>

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->

<body background="./23.png">
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
    <br /><br /><br /><br /><br /><br /><br />

    <!-- ใส่ CODE PHP ที่นี่ -->
    <div class="container" align="center">
    <?php
        $birthMonth = 12;

        $monthNames = [
            1 => "January",
            2 => "February",
            3 => "March",
            4 => "April",
            5 => "May",
            6 => "June",
            7 => "July",
            8 => "August",
            9 => "September",
            10 => "October",
            11 => "November",
            12 => "December",
        ];

        if (isset($monthNames[$birthMonth])) {
            echo "My Birthday is " . $monthNames[$birthMonth];
            
        } else {
            echo "Invalid Month";
        }

        switch ($birthMonth) {
            case 4:
            case 6:
            case 9:
            case 11:
                for ($days = 30; $days >= 0; $days -= 10) {
                    echo "<br/> Countdown :  $days \n";
                }
                echo "<br/> Happy Birthday to You!! <br/> Wish you all the happiness in the world!";
                break;

            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                for ($days = 31; $days >= 1; $days -= 5) {
                    echo "<br/> Countdown :  $days \n";
                }
                echo "<br/> Happy Birthday to You!! <br/> May all your dreams true!";
                break;

            case 2:
                echo "<br/> Happy Birthday to You!! <br/> May your life be colorfull";
                break;

            default:
                echo "Invalid!";
        }
        ?>
    </div>
</body>

</html>