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

    .container {
        background: #ffffff;
        width: 50%;
        margin: auto auto auto auto;
        
    }

    p {
        text-align: left;
        padding: 5%;
    }
    </style>

</head>
<!-- ตั้งรูปพื้นหลังที่นี่ -->

<body background="./42.png">
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

    <!-- ใส่ CODE PHP ที่นี่ -->
    <div class="container"  align="center">
        <p >
            <?php 
        echo "function2.php ฟังก์ชันส่งค่าพารามิเตอร์ 2 ตัว <br />
        < html ><br />
        < body ><br />
        < ?php
        "
?>
            function writeName($fname).<br />
            {.<br />
            echo $fname . " Refsnes.<br />";
            }.<br />
            echo "My name is ";.<br />
            writeName("Kai Jim");.<br />
            echo "My sister's name is ";.<br />
            writeName("Hege");.<br />
            echo "My brother's name is ";.<br />
            writeName("Stale");.<br />
            ?>.<br />
            < /body> <br />
            < /html>

        </p>
    </div>
</body>

</html>