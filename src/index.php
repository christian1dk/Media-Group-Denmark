<?php
require_once 'db.php';

$conn = getDbConnection();

if (!$conn === null) {
    echo "<h1>Forbindelse fejlede</h1>";
    echo "<p>Kunne ikke oprette forbindelse til databasen.</p>";
} else
{
    echo "<h1>Velkommen</h1>";
}
?>