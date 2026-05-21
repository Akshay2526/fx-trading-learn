<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<style>
body{
font-family:Arial;
padding:20px;
}

table{
width:100%;
border-collapse:collapse;
}

th,td{
border:1px solid #ccc;
padding:10px;
text-align:left;
}

th{
background:#2c3e50;
color:white;
}
</style>
</head>
<body>

<h2>Student Registrations</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Course</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM registrations");

while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['course']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>
