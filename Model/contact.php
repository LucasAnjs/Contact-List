<?php
include('../DB/database.php');

$contact = $_POST["contact"];

$query = "SELECT name, mail, phone, department FROM contact_list WHERE name LIKE '%".$contact."%'";
$res = mysqli_query($connection, $query);
if (mysqli_num_rows($res)) {
  while ($row = mysqli_fetch_assoc($res)) {
    echo "<tr>";
    echo "<td>". $row["name"] ."</td>";
    echo "<td>". $row["mail"] ."</td>";
    echo "<td>". $row["phone"] ."</td>";
    echo "<td>". $row["department"] ."</td>";
    echo "</tr>";
  }
}
?>