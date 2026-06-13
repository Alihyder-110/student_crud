<link rel="stylesheet" href="style.css">
<?php
include("db.php");
?>

<h2>Students Record</h2>

<a href="create.php">Add Student</a>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Action</th>
</tr>

<?php

$query="SELECT * FROM students";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['course']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>">
Edit
</a>

|

<a href="delete.php?id=<?php echo $row['id']; ?>">
Delete
</a>

</td>

</tr>

<?php
}
?>

</table>