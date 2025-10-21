<?php

include 'koneksi.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO produk (nama, harga) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sd", $nama, $harga);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $sql = "UPDATE produk SET nama=?, harga=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdi", $nama, $harga, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $stmt->close();
}


if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];

    $sql = "DELETE FROM produk WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $stmt->close();
}
$produk_data = $conn->query("SELECT * FROM produk ORDER BY id DESC");

$edit_mode = false;
$edit_id = '';
$edit_nama = '';
$edit_harga = '';

if (isset($_GET['action']) && $_GET['action'] == 'edit') {
    $edit_id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $edit_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $edit_mode = true;
        $edit_nama = $data['nama'];
        $edit_harga = rtrim(rtrim($data['harga'], '0'), '.');
    }
    $stmt->close();
}

$conn->close(); 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CRUD Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    
    <h2><?php echo $edit_mode ? 'EDIT PRODUK' : 'TAMBAH PRODUK BARU'; ?></h2>
    <form action="index.php" method="POST">
        <?php if ($edit_mode): ?>
            <input type="hidden" name="id" value="<?php echo $edit_id; ?>">
            <input type="hidden" name="update" value="1">
        <?php else: ?>
            <input type="hidden" name="tambah" value="1">
        <?php endif; ?>

        <div>
            <label for="nama">Nama Produk:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $edit_nama; ?>" required>
        </div>
        <div>
            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga" step="0.01" value="<?php echo $edit_harga; ?>" required>
        </div>
        
        <button type="submit">
            <?php echo $edit_mode ? 'Simpan Perubahan' : 'Tambah Produk'; ?>
        </button>
        <?php if ($edit_mode): ?>
            <a href="index.php" class="action-btn delete-btn" style="background-color: #6c757d;">Batal</a>
        <?php endif; ?>
    </form>
    
    <h2>DATA PRODUK</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($produk_data->num_rows > 0) {
                $no = 1; 
                while($row = $produk_data->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                    echo "<td>Rp" . number_format($row["harga"], 0, ',', '.') . "</td>"; 
                    echo "<td>";
                    echo "<a href='index.php?action=edit&id=" . $row["id"] . "' class='action-btn edit-btn'>Edit</a>";
                    echo "<a href='index.php?action=delete&id=" . $row["id"] . "' class='action-btn delete-btn' onclick=\"return confirm('Yakin ingin menghapus produk " . htmlspecialchars($row["nama"]) . "?');\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='text-align: center;'>Tidak ada data produk.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</div>

</body>
</html>