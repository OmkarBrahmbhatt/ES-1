<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table1 {
            border: 1px solid black;
            border-collapse: collapse;
            width: 65%;
            margin: auto;
            padding: 2%;
            background-color: silver;
        }

        .detail {
            font-size: 20px;
            border-collapse: collapse;
            width: 80%;
            margin: auto;

        }

        .t1 {
            text-align: right;
            padding: 10px !important;
        }
    </style>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="index.html">ETHHEADS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="navbar-toggler-icon"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "puc";

    $conn = mysqli_connect(
        $servername,
        $username,
        $password,
        $dbname
    );
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $cnum = $_POST['cnum'];

    $q = "SELECT * FROM details WHERE Cnum = '$cnum'";
    $result = mysqli_query($conn, $q);

    //show all details
    echo "<div class='table1'>";
    echo "<table class='detail'>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr class='row1'><th class='t1'>Full Name:</th><td>&nbsp;</td><td>" . $row['Fname'] . "</td></tr>";
        echo "<tr class='row1'><th class='t1'>Contact:</th><td></td><td>" . $row['Contact'] . "</td></tr>";
        echo "<tr class='row1'><th class='t1'>Email:</th><td></td><td>" . $row['Email'] . "</td></tr>";
        echo "<tr class='row1'><th class='t1'>Car Number:</th><td></td><td>" . $row['Cnum'] . "</td></tr>";
        echo "<tr class='row1'><th class='t1'>Car Registration:</th><td></td><td>" . $row['Creg'] . "</td></tr>";
        echo "<tr class='row1'><th class='t1'>Fuel:</th><td></td><td>" . $row['Fuel'] . "</td></tr>";
        echo "<tr class='row1'><th class='t1'>PUC Validity Date:</th><td></td><td>" . $row['puc'] . "</td></tr>";
    }
    echo '
    <tr>
        <td>
            <a href="index.html"><button class="btn btn-primary">Back</button></a>
        </td>
    </tr>';
    echo "</table>";

    // Close connection
    mysqli_close($conn);

    ?>
    <table>
        <tr>
            <th>Vehicle Type</th>
            <th>Percentage of CO</th>
            <th>Hydrocarbon measured in ppm</th>
        </tr>
        <tr>
            <td>2 and 3 wheeled vehicles (2 or 4 stroke) that are manufactured on or before 31st March 2000</td>
            <td>4.5</td>
            <td>9000</td>
        </tr>
        <tr>
            <td>2 and 3 wheeled vehicles (2 stroke) that are manufactured after 31st March 2000</td>
            <td>3.5</td>
            <td>6000</td>
        </tr>
        <tr>
            <td>2 and 3 wheeled vehicles (4 stroke) that are manufactured after 31st March 2000</td>
            <td>3.5</td>
            <td>4500</td>
        </tr>
        <tr>
            <td>4 wheeled vehicles that are manufactured as per the Pre Bharat Stage II Norms</td>
            <td>3</td>
            <td>1500</td>
        </tr>
        <tr>
            <td>4 wheeled vehicles that are manufactured as per the Pre Bharat Stage II, Stage III or subsequent Norms</td>
            <td>0.5</td>
            <td>750</td>
        </tr>
    </table>

    </div>
</body>

</html>