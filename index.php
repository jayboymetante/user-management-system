<?php
require 'core.php ';
require 'connect.php';

if (loggedin()) {

    echo   'You\'re Log in, ' . $_SESSION['username'] . ' <a href="logout.php"><button>Log out</button></a>'; ?>

    <!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
        <h2>Users List <a href="add.php"><button type="button">Add</button></a> </h2>
        <table style="width:50%; text-align:left;">
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            <?php
            $query = "SELECT * FROM  user_info";
            $result = $mysqli->query($query);
            while ($data = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>";
                        echo "$data[first_name]";
                    echo "</td>";
                    echo "<td>";
                        echo "$data[middle_name]";
                    echo "</td>";
                    echo "<td>";
                        echo "$data[last_name]";
                    echo "</td>";
                    echo "<td>";
                        echo "$data[address]";
                    echo "</td>";
                    echo "<td>";
                        echo ' <a href="edit.php"><button type="button">Edit</button></a>';
                        echo '<a href="delete.php"><button type="button">Delete</button></a>';
                    echo "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
    </html>
<?php } else {
    include 'login.php';
}
?>