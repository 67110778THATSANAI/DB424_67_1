
<?php
$server = 'db403-mysql';
$username = 'root';
$password = 'P@ssw0rd';
$db = 'northwind';
$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_errno) {
    die($conn->connect_errno);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL First Contact</title>
</head>
<body>
<!-- โจทย์จากวิชา DB304-->
<h3>โจทย์จากวิชา DB304</h3>
<h>1.เรียกดูชื่อสินค้าที่เลิกผลิตแล้ว แต่ยังมีจำนวนสินค้าคงเหลือค้างอยู่ใน Stock</h> 
<table>
    <tr><th>ProductName</th> <th>UnitsInStock</th></tr>
<?php
$sql =  'SELECT ProductName, UnitsInStock
        FROM products
        WHERE Discontinued=1 AND UnitsInStock>0;';
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo '<tr>'; 
    echo "<td>{$row['ProductName']}</td>"; 
    echo "<td>{$row['UnitsInStock']}</td>"; 
    echo '</tr>'; 
}
?>
</table>





<?php
    $conn->close();
    ?>
</body>
</html>