<?php
// testdb.php — quick connection tester
require_once __DIR__ . '/assests/config/dbconfig.php';
header('Content-Type: text/html; charset=utf-8');
if (isset($conn) && ($conn instanceof mysqli) && $conn->connect_errno === 0) {
    echo '<h2>Connected OK</h2>';
    echo '<p>Host: ' . htmlspecialchars(mysqli_get_host_info($conn)) . '</p>';
    $res = mysqli_query($conn, 'SELECT COUNT(*) AS c FROM animalaf');
    if ($res) {
        $r = mysqli_fetch_assoc($res);
        echo '<p>animalaf rows: ' . (int)$r['c'] . '</p>';
    } else {
        echo '<p style="color:red;">Query error: ' . htmlspecialchars(mysqli_error($conn)) . '</p>';
    }
    mysqli_close($conn);
} else {
    echo '<p style="color:red;">DB connection failed. Check assests/config/dbconfig.php credentials and that MySQL is running.</p>';
}
?>