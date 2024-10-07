<?php 
    include 'db.php'; // Połączenie z bazą danych

$sql = "SELECT id,name,email,created_at FROM users";
$stmt = $conn->query($sql);$users = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<head>
    <title>Lista użytkowników</title>
</head>
<body>
    <h2>Lista użytkowników</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Imie</th>
            <th>Email</th>
            <th>Data utworzenia</th>
            <th>Akcje</th>
        </tr>
        <?php 
            if (count($users) > 0 ) {
                foreach ($users as $user)
                    echo "<tr>";
                    echo "<td>" . $user["id"] . "</td>";
                    echo "<td>" . $user["name"] . "</td>";
                    echo "<td>" . $user["email"] . "</td>";
                    echo "<td>" . $user["created_at"] . "</td>";
                    echo "<td>
                            <a href='edit.php?id=".$user["id"]."'>Edytuj</a>
                            <a href='delete.php?id=".$user["id"]."'>Usuń</a>
                    </td>";
                    echo "</tr>";
                } else {
                    echo "<tr><td colspan='5'>Brak użytkowników</a>"
                ;}
        ?>
    </table>
    <br>
    <a href="create.php">Dodaj nowego uzytkownika</a>
</body>
</html>

<?php 
$conn = null;
?>