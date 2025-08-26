<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute(['username' => $username, 'email' => $email, 'password' => $password]);
        echo "Pendaftaran berhasil!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- Form Pendaftaran -->
<form method="POST" action="register.php">
    <input type="text" name="username" placeholder="Nama Pengguna" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Kata Sandi" required>
    <button type="submit">Daftar</button>
</form>
