<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dodaj użytkowników</title>
</head>
<body>
    <h2>Dodaj użytkowników</h2>
    <form action="store.php" method="post">
        <label for="name">Imię:</label><br>
        <input type="text" id="name" name="name" require><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" require><br><br>
        <input type="submit" value="Dodaj">
    </form>
</body>
</html>