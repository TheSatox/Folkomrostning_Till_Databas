<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "folkomrostning";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO omrostning_namnlista (firstname, lastname, phonenumber,email)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[phonenumber]', '$_POST[email]')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="sv">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="shit n stuff">
    <meta name="author" content="Oscar Eriksson">

    <title>Folkomröstning</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/simple-sidebar.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.html">
                        <h1>Folkomröstning</h1>
                    </a>
                </li>
                <li>
                    <a href="index.html#vad">Vad är en folkomröstning?</a>
                </li>
                <li>
                    <a href="index.html#vem">Hur fungerar det?</a>
                </li>
                <li>
                    <a href="index.html#vem">Vem får vara med och rösta?</a>
                </li>
                <li>
                    <a href="#">Rösta här!</a>
                </li>
                <li>
                    <a href="#">Kontakt</a>
                </li>
            </ul>
        </div>

        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Meny</a>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Folkomröstning -  Systembolagets monopol på alkohol i Sverige</h1>
                        <p>Till skillnad från de flesta länder i EU så har svenska staten ett monopol på alkohol genom Systembolaget.</p>
                        <p></p>
                        <h2 id="vad">Vad är en folkomröstning?</h2>
                        <p></p>                                           
                        <h2>Hur fungerar folkomröstningar?</h2>
                        <p></p>
                        <h2 id="vem">Vem får vara med och rösta?</h2>
                        <p></p>

                        <h1>Tack för att du gjort din röst hörd! </h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
        <a href="tabell.php"><buttun type ="button">Tabell</buttun></a>
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <a href="tabell.php"><buttun type ="button">Tabell</buttun></a>
</body>

</html>
