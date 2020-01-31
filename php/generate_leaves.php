<?php
include 'connection.php';

$start_date = $_POST['startDate'];
$returndate = $_POST['returndate'];

$comparison = 'SELECT * FROM leaves ';
$array = mysqli_fetch_row($comparison);
//WHERE num_id = $name && start_date = $start_date

$result = mysqli_query($con, $comparison);
?>
echo "<table border='1'>
    <tr>
        <td align=center> <b>Roll No</b></td>
        <td align=center><b>Name</b></td>
        <td align=center><b>Address</b></td>
        <td align=center><b>Stream</b></td>
        </td>
        <td align=center><b>Status</b></td>";
        <?php
        while ($data = mysqli_fetch_row($result)) {
            echo "
    <tr>";
            echo "<td align=center>$data[0]</td>";
            echo "<td align=center>$data[1]</td>";
            echo "<td align=center>$data[2]</td>";
            echo "<td align=center>$data[3]</td>";
            echo "<td align=center>$data[4]</td>";
            echo "</tr>";
        }
        echo "
</table>";
        ?>