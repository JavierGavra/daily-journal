<?php
//memulai session atau melanjutkan session yang sudah ada
session_start();

//menyertakan code dari file koneksi
include "koneksi.php";

//check jika sudah ada user yang login arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
	header("location:admin.php"); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];

    //menggunakan fungsi enkripsi md5 supaya sama dengan password  yang tersimpan di database
    $password = md5($_POST['pass']);

	//prepared statement
    $stmt = $conn->prepare("SELECT username 
                            FROM user 
                            WHERE username=? AND password=?");

	//parameter binding 
    $stmt->bind_param("ss", $username, $password);//username string dan password string

    //database executes the statement
    $stmt->execute();

    //menampung hasil eksekusi
    $hasil = $stmt->get_result();

    //mengambil baris dari hasil sebagai array asosiatif
    $row = $hasil->fetch_array(MYSQLI_ASSOC);

    //check apakah ada baris hasil data user yang cocok
    if (!empty($row)) {
        //jika ada, simpan variable username pada session
        $_SESSION['username'] = $row['username'];

        //mengalihkan ke halaman admin
        header("location:admin.php");
    } else {
	    //jika tidak ada (gagal), alihkan kembali ke halaman login
        header("location:login.php");
    }

	//menutup koneksi database
    $stmt->close();
    $conn->close();
} else {
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | My Daily Journal</title>
    <link rel="icon" href="img/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-danger-subtle">
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow rounded-5">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="bi bi-person-circle h1 display-4"></i>
                            <p>Welcom to My Daily Journal</p>
                            <hr />
                        </div>
                        <form action="" method="post">
                            <input
                                type="text"
                                name="user"
                                class="form-control my-4 py-2 rounded-4"
                                placeholder="Username"
                            />
                            <input
                                type="password"
                                name="pass"
                                class="form-control my-4 py-2 rounded-4"
                                placeholder="Password"
                                />
                            <div class="text-center my-3 d-grid">
                                <button class="btn btn-danger rounded-4">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    //set variable username dan password dummy
    $username = "admin";
    $password = "123456";
    $head = "<div class='card container w-25 p-3 mt-5 text-center rounded-5 ";
    $content = "";

    //check apakah ada request dengan method POST yang dilakukan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //tampilkan isi dari variable array POST menggunakan perulangan
        foreach($_POST as $key => $val){
            $content .= "$key : $val" . "</br>";
        } 

        //check apakah username dan password yang di POST sama dengan data dummy
        if ($_POST['user'] == $username AND $_POST['pass'] == $password) {
            $content .= "<span class='text-success'>Username dan Password Benar</span>";
            $head .= "bg-success-subtle'>";
        } else {
            $content .= "<span class='text-danger'>Username dan Password Salah</span>";
            $head .= "bg-warning-subtle'>";
        }

        echo $head . $content . "</div>";
    };
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
}
?>