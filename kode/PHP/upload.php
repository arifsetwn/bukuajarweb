<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload Gambar</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" accept="image/*" name="foto">
        <input type="submit" value="Upload">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namafile = $_FILES['foto']['name'];
        $lokasifile = $_FILES['foto']['tmp_name'];

        if ($namafile != "") {
            move_uploaded_file($lokasifile, "images/" . $namafile);
            echo "<img src='images/$namafile' width='200'>";
        }
    }
    ?>
</body>
</html>