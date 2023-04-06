<!doctype html>
<html>
<head>
<title>All Event Data</title>
<link rel='stylesheet' href='style.css'>
</head>
<body>
<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		
		th {
			background-color: #f2f2f2;
		}
	</style>
<div>
    <?php
    // Create a connection to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wp project";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve data from the "hackathon" table
    $sql = "SELECT * FROM `registration_form`;";
    $result = $conn->query($sql);

    // Display the data in an HTML table
    echo "<h2>Registration Data</h2>";
    echo "<table>";
    echo "<tr><th>Name</th><th>email</th><th>password</th><th>mobno</th><th>program</th><th>gender</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["fname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>" . $row["mobno"] . "</td>";
        echo "<td>" . $row["program"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Close the connection
    $conn->close();
    ?>
</div>
</body>
</html>
