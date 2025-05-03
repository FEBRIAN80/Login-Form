
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login & Sign Up</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container" id="container">
    <!-- Sign Up -->
    <div class="form-container sign-up-container">
      <form action="signup.php" method="POST">
        <h1>Buat Akun</h1>
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="password" name="confirm_password" placeholder="Ulangi Password" required />
        <div class="button-group">
          <button type="submit">Sign Up</button>
          <button type="button" class="ghost" id="signIn">Login</button>
        </div>
      </form>
    </div>

    <!-- Sign In -->
    <div class="form-container sign-in-container">
      <form action="login.php" method="POST">
        <h1>Login</h1>
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <div class="button-group">
          <button type="submit">Login</button>
          <button type="button" class="ghost" id="signUp">Sign Up</button>
        </div>
      </form>
    </div>

    <!-- Overlay -->
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Halo, Pengguna Baru!</h1>
          <p>Masukkan data Anda untuk memulai</p>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Selamat Datang Febrian</h1>
          <p>Silakan login dengan akun yang sudah terdaftar</p>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/script.js"></script>
</body>
</html>
