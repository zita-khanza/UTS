
<html>

<head>
    <title>
    </title>
    <style>
        body p {
            text-align: center;
        }

        table {
            margin-left: 30%;
            width: 20px;
        }

        table tr td {
            text-align: center
        }
    </style>

</head>

<body>







    <br>
    <br>
    <p align="center">Data Pemantauan Covid19 wilayah <?php echo $_GET['wilayah']; ?> <br> 18 April 2020 21:38:16
        (<?php
            date_default_timezone_set('Asia/Jakarta');
            $time = time();
            echo date('l, d-m-y H:i:s a');  ?>)<br>
        Muzakiyatul Asma Zita/<?php echo $_GET['nimM']; ?></p>


    <table border="1" cellspacing="10" cellpadding="20">

        <thead>
            <tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </tr>
        </thead>
        <tbody>

            <td><?php echo $_GET['jmlhp']; ?></td>
            <td><?php echo $_GET['jmlhr']; ?></td>
            <td><?php echo $_GET['jmlhs']; ?></td>
            <td><?php echo $_GET['jmlhm']; ?></td>
        </tbody>
    </table>



</body>

</html>