<?php
include '../includes/db.php';  // Ubah path ini jika file db.php ada di folder berbeda

// Pastikan bahwa metode request adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dapatkan ID kategori dari permintaan AJAX
    $id = $_POST['id'];

    // Pastikan ID bukan kosong dan merupakan angka
    if (!empty($id) && is_numeric($id)) {
        // Query penghapusan data
        $sql = "DELETE FROM tb_kategori WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            // Jika penghapusan berhasil, kirim respons sukses
            echo "success";
        } else {
            // Jika terjadi error saat menghapus
            http_response_code(500); // Kirim kode status error
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        // Jika ID tidak valid
        http_response_code(400); // Kode status 400 untuk "Bad Request"
        echo "Invalid ID";
    }
} else {
    // Jika request bukan POST
    http_response_code(405); // Metode tidak diperbolehkan
    echo "Method not allowed";
}
?>
