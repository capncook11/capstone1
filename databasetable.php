<html>
  <head>
    <style type="text/css">
      table {
        border-collapse: collapse;
        width: 100%;
        color: #05BFDB;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
      }

      th {
        background: #05BFDB;
        color: white;
      }

      tr:nth-child(even){background-color: #05BFDB}

    </style>
  </head>

  <body>
    <table>
      <tr>
        <th>LastName</th>
        <th>FirstName</th>
        <th>Middle Initial</th>
        <th>Email</th>
        <th>Address</th>
        <th>Date of Birth</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
      </tr>

      <?php
      $conn = mysqli_connect("localhost", "root", "regform");
      $sql = "SELECT * FROM users";
      $result = $conn-> query($sql);

      if($result->num_rows > 0) {
        while($row = $result-> fetch_assoc()){
          echo "<tr><td>" . $row["LastName"] . "<tr><td>" . $row["FirstName"] ."<tr><td>" . $row["MiddleInitial"] ."<tr><td>" . $row["Email"] ."<tr><td>" . $row["Address"] . "<tr><td>" . $row["Date of Birth"] ."<tr><td>" . $row["City"] ."<tr><td>" . $row["State"] . "<tr><td>" . $row["Zip"] 
        }
       
      }
      else {
        echo "No Results";
      }
      $conn->close();
      ?>


    </table>
  </body>
  </html>
