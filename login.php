<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

$nickname_sent = $_GET['nickname'];
$password_sent = $_GET['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE nickname = '$nickname_sent' and password = '$password_sent'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();    
    header("Location: good.php");
    echo "<style>*{background:#2ed573}</style><center><h1 style='color:#fff';margin-top:50%>Welcome " . $row['name'] . "</h1></center>";
} else {
    echo " <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'><style> 
    body {
        background: black;
    }
    h1 {
      width: 180px;
      height: 100px;
      
      position: relative;
      animation: myfirst 5s infinite;
      animation-direction: alternate;
    }
    
    @keyframes myfirst {
      0%   {background: 187103; left: 430px; top: 400px;}
      25%  {background: 0A3200; left: 360px; top: 570px;}
      50%  {background: 2BD401; left: 230px; top: 320px;}
      75%  {background: 2BD401; left: 500px; top: 200px;}
      100% {background: #green; left: 450px; top: 450px;}
    }
    </style> <a href='index.html'> <h1><button class='btn btn-secondary' >  Contraseña Incorrecta (Dame Click paara volver)</button></h1> </a>";
}

$conn->close();
?>
