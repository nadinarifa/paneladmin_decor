<?php
include '../includes/db.php'; // Pastikan jalur ini benar

// Query untuk mengambil daftar kategori
$sql = "SELECT * FROM tb_kategori";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dreams Pos admin template</title>

    <!-- Mengarahkan ke folder assets yang berada dua tingkat di atas -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.jpg">

    <!-- Link CSS dengan path yang benar -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="../assets/pic/logo/logo.png" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="../assets/pic/logo/logo.png" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="#">
                            <div class="searchinputs">
                                <input type="text" placeholder="Search Here ...">
                                <div class="search-addon">
                                    <span><img src="../assets/img/icons/closes.svg" alt="img"></span>
                                </div>
                            </div>
                            <a class="btn" id="searchdiv"><img src="../assets/img/icons/search.svg" alt="img"></a>
                        </form>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <img src="../assets/img/icons/notification-bing.svg" alt="img"> <span
                            class="badge rounded-pill">4</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="../assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added
                                                    new task <span class="noti-title">Patient appointment booking</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="a../ssets/img/profiles/avatar-03.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                    changed the task name <span class="noti-title">Appointment booking
                                                        with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="../assets/img/profiles/avatar-06.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                    added <span class="noti-title">Domenic Houston</span> and <span
                                                        class="noti-title">Claire Mapes</span> to project <span
                                                        class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="../assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                    completed task <span class="noti-title">Patient and Doctor video
                                                        conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="../assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                    added new task <span class="noti-title">Private chat module</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="../assets/img/profiles/avator1.jpg" alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="../assets/img/profiles/avator1.jpg" alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>John Doe</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My
                                Profile</a>
                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                                    data-feather="settings"></i>Settings</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0" href="signin.html"><img
                                    src="../assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>


            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="generalsettings.html">Settings</a>
                    <a class="dropdown-item" href="signin.html">Logout</a>
                </div>
            </div>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.html"><i class="fas fa-tachometer-alt icon"></i><span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fas fa-box icon"></i><span>Produk</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="productlist.php">Daftar Produk</a></li>
                                <li><a href="addproduct.php">Tambah Produk</a></li>
                                <li><a href="categorylist.php" class="active">Daftar Kategori</a></li>
                                <li><a href="addcategory.php">Tambah Kategori</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="customerlist.html">
                                <i class="fas fa-users icon"></i>
                                <span>Pelanggan</span>
                            </a>
                        </li>

                        <li>
                            <a href="komentar.html">
                                <i class="fas fa-comment-dots icon"></i>
                                <span>Komentar User</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fas fa-user icon"></i><span>User</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="newuser.html">User Baru</a></li>
                                <li><a href="userlists.html">Daftar User</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fas fa-cog icon"></i></i><span>Pengaturan</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="generalsettings.html">General Settings</a></li>
                                <li><a href="emailsettings.html">Email Settings</a></li>
                                <li><a href="paymentsettings.html">Payment Settings</a></li>
                                <li><a href="currencysettings.html">Currency Settings</a></li>
                                <li><a href="grouppermissions.html">Group Permissions</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Daftar Kategori Produk</h4>
                        <h6>Lihat Kategori Produk</h6>
                    </div>
                    <div class="page-btn">
                        <a href="addcategory.php" class="btn btn-added">
                            <img src="../assets/img/icons/plus.svg" class="me-1" alt="img">Tambah kategori
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-top">
                            <div class="search-set">
                                <div class="search-input">
                                    <a class="btn btn-searchset"><img src="../assets/img/icons/search-white.svg"
                                            alt="img"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="filter_inputs">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <thead>
                                                <select class="select">
                                                    <option>Pilih Nama Kategori</option>
                                                    <option>Sofa</option>
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Pilih Nama Kategori</option>
                                                <option>Kursi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-12">
                                        <div class="form-group">
                                            <select class="select">
                                                <option>Pilih Nama Kategori</option>
                                                <option>Meja</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                        <div class="form-group">
                                            <a class="btn btn-filters ms-auto"><img
                                                    src="../assets/img/icons/search-whites.svg" alt="img"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>
                                            <label class="checkboxs">
                                                <input type="checkbox" id="select-all">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </th>
                                        <th>ID</th>
                                        <th>Nama Kategori</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Mengambil data kategori
                                    $sql = "SELECT * FROM tb_kategori";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr data-id='" . $row["id"] . "'>
                <td>
                    <label class='checkboxs'>
                        <input type='checkbox'>
                        <span class='checkmarks'></span>
                    </label>
                </td>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nama_kategori"] . "</td>
                <td>
                    <a class='me-3' href='editcategory.php?id=" . $row["id"] . "'>
                        <img src='../assets/img/icons/edit.svg' alt='Edit'>
                    </a>
                    <!-- Tombol hapus memanggil fungsi confirmDelete() -->
                    <a class='me-3 confirm-text' href='javascript:void(0);' onclick='confirmDelete(" . $row["id"] . ")'>
                        <img src='../assets/img/icons/delete.svg' alt='Hapus'>
                    </a>
                </td>
            </tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='4'>Tidak ada kategori</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            // Pop-up konfirmasi penghapusan dengan SweetAlert
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak dapat mengembalikan tindakan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna konfirmasi, lakukan penghapusan via AJAX
                    deleteCategory(id);
                }
            });
        }

        function deleteCategory(id) {
            // AJAX request untuk menghapus data tanpa reload halaman
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "deletecategory.php", true); // Mengirim ke halaman penghapusan
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhr.onload = function () {
                if (this.status == 200) {
                    // Cek respons dari server, jika berhasil, tampilkan notifikasi
                    Swal.fire({
                        title: 'Deleted!',
                        text: 'Kategori telah berhasil dihapus.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        // Hapus baris tabel yang terkait setelah penghapusan sukses
                        document.querySelector(`tr td:contains(${id})`).parentNode.remove();
                    });
                } else {
                    // Jika ada error, tampilkan pesan error
                    Swal.fire({
                        title: 'Error!',
                        text: 'Terjadi kesalahan saat menghapus kategori.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            };

            // Kirim ID kategori yang akan dihapus
            xhr.send("id=" + id);
        }
    </script>


    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <script src="../assets/js/feather.min.js"></script>

    <script src="../assets/js/jquery.slimscroll.min.js"></script>

    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/plugins/select2/js/select2.min.js"></script>


    <script src="../assets/js/script.js"></script>




</html>