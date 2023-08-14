<html>
  <head>
    <title>Submitted Comments and Feedback</title>
    <style>
      table, th, td{
        border: 2px solid black;
        border-collapse: collapse;
        font-family: "times new roman";
        font-size: 20px;
        padding-top: 7px;
        padding-bottom: 7px;
        padding-left: 7px;
        padding-right: 7px;
      }
    </style>
  </head>

  <body>
    <table>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Comments and Feedback</th>
        <th>Registry Date</th>
      </tr>

      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "pptrivia";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id, email, comments, reg_date from feedback2";
        $result = $conn -> query($sql);

        if($result -> num_rows > 0) {
          while ($row = $result -> fetch_assoc()) {
            echo "<tr><td>". $row["id"]. "</td><td>". $row["email"]. "</td><td>". $row["comments"]. "</td><td>". $row["reg_date"]. "</td></tr>";
          }
          echo "</table>";
        }
        else{
          echo "0 results";
        }
        $conn -> close();
      ?>
    </table>
  </body>
</html>
