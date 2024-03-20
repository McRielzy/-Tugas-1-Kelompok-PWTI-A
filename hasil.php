<?php include ("header.php"); ?>
<?php
$upload_dir = 'uploads/';

if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true); // Recursive directory creation
}

$photo_path = '';
if (isset ($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $photo_name = uniqid() . '_' . basename($_FILES['foto']['name']);
    $photo_path = $upload_dir . $photo_name;
    move_uploaded_file($_FILES['foto']['tmp_name'], $photo_path);
}

$data = "$photo_path\n";
file_put_contents('data.txt', $data, FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .transparent-table td {
            border: 1px solid black;
            /* Adding black border to each cell */
            padding: 8px;
            /* Adding padding for spacing */
        }

        .wider-table {
            max-width: 800px;
            /* Adjust the max-width value as needed */
            width: 100%;
            /* Make the table responsive */
        }
    </style>
</head>

<body style="background-color: #FFFFF; color: black;">
    <h2 style="text-align: center;">Data Hasil!<h /2>
            <div class="container text-center">


                <table border="1" class="transparent-table text-center">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>
                            <?php echo $_POST['nama']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Induk Mahasiswa</td>
                        <td>:</td>
                        <td>
                            <?php echo $_POST['nim']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <?php echo $_POST['tglLahir']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <?php echo $_POST['jk']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Foto Profil</td>
                        <td>:</td>
                        <td>
                            <?php echo "<img src='$photo_path' alt='Uploaded Photo' style='max-width: 50%; height: auto;'>"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Angkatan Mahasiswa</td>
                        <td>:</td>
                        <td>
                            <?php echo $_POST['angkatan_mahasiswa']; ?>
                        </td>
                    </tr>
                </table>



            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>

            <?php include ("Footer.php"); ?>

</body>

</html>