<?php
	require _once 'config.php";
Squery = "SELECT ' FROM users*:
$users = $conn-›query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sample Websites</title>
</head>
<body>
	<h1>List of Users V7</h1>
	<ul>
		<?php foreach ($users as $user): ?>
	<li><?= htmlspecialchars($user['name']) ?> (<?= htmlspecialchars($user'email']) ?>)</li>
	<?php endforeach; ?>
  </ul>
</body»
</htmL
