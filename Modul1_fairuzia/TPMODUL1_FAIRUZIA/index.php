<?php
// Inisialisasi variabel untuk menyimpan nilai input dan error
// Nama : Fairuzia Meyla Fatinah
// Nim : 102022300147
// Kelas SI4708

$nama = $email = $nim = "";
$namaErr = $emailErr = $nimErr = "";

    // **********************  1  **************************  
    // Tangkap nilai nama yang ada pada form HTML
if ($_SERVER["REQUEST_METHOD"]== "POST"){
    // silakan taruh kode kalian di bawah
    $nama = $_POST['nama'];
    if (empty($nama)){
        $namaErr = 'Nama Wajib Diisi!';
    }


    // **********************  2  **************************  
    // Validasi format email agar sesuai dengan standar
    // silakan taruh kode kalian di bawah
     // silakan taruh kode kalian di bawah
     $email = $_POST['email'];
     if (empty($email)){
         $emailErr = 'Email Wajib Diisi!';
     }

    // **********************  3  **************************  
    // Pastikan NIM terisi dan  angka
    // silakan taruh kode kalian di bawah
     // silakan taruh kode kalian di bawah
     $nim = $_POST['nim'];
     if (empty($nim)){
         $nimErr = 'NIM Wajib Diisi!';
     }elseif (!ctype_digit($nim)){
        $nimErr = 'NIM Harus berupa Angka!';
     }
}
    
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Mahasiswa Baru</title>
    <link rel="stylesheet" href="styles.css">  
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Logo" class="logo">
        <h2>Formulir Pendaftaran Mahasiswa Baru</h2>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <?php if (!empty($namaErr) || !empty($emailErr) || !empty($nimErr)) { ?>
                <div class="alert alert-danger">
                    <strong>Kesalahan!</strong> Harap perbaiki data yang salah.
                </div>
            <?php } else { ?>
                <div class="alert alert-success">
                    <strong>Berhasil!</strong> Data pendaftaran telah diterima.
                </div>
            <?php } ?>
        <?php } ?>

        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

         <!-- **********************  4  ************************** -->
         <!-- Tambahkan kolom input untuk Nama, Email, dan NIM dengan mengambil class form-group sebagai referensi -->

         <div class="form-group">
                <!-- tambahkan label nama -->
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">
                <span class="error"><?php echo $namaErr? "* $namaErr" :""; ?> </span>
                <!-- Tampilkan pesan error jika variabel $namaErr tidak kosong -->
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                <!-- Tampilkan pesan error jika variabel $emailErr tidak kosong -->
                <span class="error"><?php echo $emailErr? "* $emailErr" :""; ?></span>
            </div>

            <div class="form-group">
                <!-- tambahkan label nim -->
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" value="<?php echo $nim; ?>">
                <!-- Tampilkan pesan error jika variabel $nimErr tidak kosong -->
                <span class="error"><?php echo $nimErr? "* $nimErr" :""; ?></span>
            </div>

            <div class="button-container">
                <button type="submit">Daftar</button>
            </div>
        

        </form>
    </div>
</body>
</html>


