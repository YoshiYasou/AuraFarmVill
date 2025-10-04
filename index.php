<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AuraFarmVill - Animal Records</title>
</head>
<body>
<?php
// Helpful during development: show all PHP errors in the browser
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Use correct relative path to the config inside the 'asests' folder
// Verify that config file exists before requiring it to avoid fatal parse errors
$dbConfigPath = __DIR__ . '/assests/config/dbconfig.php';
if (!file_exists($dbConfigPath)) {
  echo '<p style="color:red;">Missing include: ' . htmlspecialchars($dbConfigPath) . '</p>';
} else {
  require_once $dbConfigPath;
}

// Basic safety: ensure $conn exists
if (!isset($conn) || !($conn instanceof mysqli)) {
    echo '<p style="color:red;">Database connection is not available. Check dbconfig.php.</p>';
} else {
    $sql = "SELECT * FROM animalaf";
    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        echo '<p style="color:red;">Query error: ' . htmlspecialchars(mysqli_error($conn)) . '</p>';
    }
}
?>

  <h1>Animal Records from AuraFarmVil</h1>
  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th>
      <th>Animal</th>
      <th>Species</th>
      <th>Age</th>
      <th>Sex</th>
    </tr>
    <?php if (isset($result) && $result !== false): ?>
      <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= htmlspecialchars($row['ID_NUM']) ?></td>
          <td><?= htmlspecialchars($row['Animal']) ?></td>
          <td><?= htmlspecialchars($row['Species']) ?></td>
          <td><?= htmlspecialchars($row['Age']) ?></td>
          <td><?= htmlspecialchars($row['Sex']) ?></td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="5">No records found or an error occurred.</td></tr>
    <?php endif; ?>
  </table>

<?php
// Close connection if it's open
if (isset($conn) && ($conn instanceof mysqli)) {
  mysqli_close($conn);
}
?>

</body>
</html>