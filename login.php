<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon/logo.png">
    <title>Login - UJIKOM</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post" action="simpan_masyarakat.php">
                <h1>Daftar</h1>
                <br><br>
                <input type="number" name="nik" placeholder="Masukan NIK" maxlength="16" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                <input type="text" name="nama" placeholder="Masukan Nama" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                <input type="text" name="username" placeholder="Masukan Username" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                <input type="password" name="password" placeholder="Masukan Password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                <input type="text" name="telp" placeholder="No Telepon / No Handphone" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                <button type="submit">Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="post" action="cek_login.php">
                <h1>Masuk</h1>
                <br><br>
                <input type="username" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                <input type="password" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                <button type="submit">Masuk</button><br>
                <i class="bi bi-arrow-right"></i><a href="login_admin.php">Masuk Sebagai Admin/Petugas </a>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1><img src="img/logo/logo.png" height="80" width="80"></h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Masuk</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1><img src="img/logo/logo.png" height="80" width="80"></h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Daftar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>