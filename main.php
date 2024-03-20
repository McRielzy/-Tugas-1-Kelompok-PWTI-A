<?php include ("header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elemen Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .transparent-table td {
            font-weight: 500;
            padding: 8px;
            /* Adding padding for spacing */
        }

        .background-column {
            background-image: url('startup-593341_1280.jpg');
            width: 900px;
            height: 800px;
            /* Adjust height as needed */
            padding: 20px;
        }
    </style>
</head>

<body style="background-color: #FFFFF; color: black;">
    <div class=" ">
        <div class="row" style=" width: 100%;">
            <div class="col background-column d-flex justify-content-center align-items-center">
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <div>
                    <form method="POST" action="hasil.php" enctype="multipart/form-data">
                        <table class="transparent-table td">
                            <tr >
                                <td><strong>Nama</strong></td>
                                <td><input type="text" name="nama" class="form-control" style="background-color: #D9D9D9;"></td>
                            </tr>
                            <tr>
                                <td>Nomor Induk Mahasiswa</td>
                                <td><input type="text" name="nim" class="form-control" style="background-color: #D9D9D9;"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><input type="date" name="tglLahir" class="form-control" style="background-color: #D9D9D9;"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki <input type="radio"
                                        name="jk" value="Perempuan">Perempuan</td>
                            </tr>
                            <tr>
                                <td>Foto Profil</td>
                                <td><input type="file" name="foto" class="form-control" style="background-color: #D9D9D9;"></td>
                            </tr>
                            <tr>
                                <td>Angkatan Mahasiswa</td>
                                <td>
                                    <select name="angkatan_mahasiswa" class="form-select" style="background-color: #D9D9D9;">
                                        <option value="">--Pilih--</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Hobi</td>
                                <td >
                                    <input type="checkbox" name="check1" value="Bola">Bola
                                    <input type="checkbox" name="check1" value="Baca">Baca
                                    <input type="checkbox" name="check1" value="Nyanyi">Nyanyi
                                </td>
                            </tr>
                        </table>
                        <button style=" margin-top: 10px; margin-left: 203px; background-color: #D9D9D9; color: black;" type="submit" name="submit" class="btn btn-outline-light">Kirim</button>

                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <?php include ("Footer.php"); ?>
</body>

</html>