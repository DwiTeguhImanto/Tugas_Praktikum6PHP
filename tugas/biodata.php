<!-- <html>

<head>
    <title>Form Bioadata</title>
</head>

<body>
    <form action="isiBiodata" method="post">
        <div class="form-group">
            <label for="">Nama : </label>
            <input type="text" name="nama" placeholder="Isi Nama Anda.." required>

            <label for="">NIM : </label>
            <input type="number" name="nim" placeholder="Isi NIM Anda.." required>

            <label for="">Alamat : </label>
            <input type="text" name="alamat" placeholder="Isi Nama Anda.." required>

            <label for="">Gender : </label>
            <input type="radio" name="gender" value="Pria">
            <input type="radio" name="gender" value="Wanita">

            <label for="">Hobby : </label>
            <input type="text" name="hobby" placeholder="Isi Hobby Anda.." required>

            <label for="">Agama : </label>
            <input type="text" name="agama" placeholder="Isi Agama Anda.." required>

            <label for="">Tanggal Lahir : </label>
            <input type="date" name="tgl">

            <label for="">Status : </label>
            <input type="text" name="status" placeholder="Isi Status Anda.." required>
        </div>
    </form>
</body>

</html> -->

<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <table border=0>
        <form action="isiBiodata.php" method="post">
            <h1>FORM BIODATA</h1>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><input type=text name=NPM></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type=text name=Nama></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <input type=radio name="jurusan" value="Teknik Informatika">Teknik Informatika
                    <input type=radio name="jurusan" value="Sistem Informasi">Sistem Informasi
                    <input type=radio name="jurusan" value="Sains Data">Sains Data
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir </td>
                <td>:</td>
                <td>
                    <input type="text" name="tempat" id="">
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <input type="date" name="Ttl" id="">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type=radio name=JK value=Laki-laki>Laki-laki<input type=radio name=JK
                        value=Perempuan>Perempuan</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type=textfield name=alamat></td>
            </tr>
            <tr>
                <td>Hobby </td>
                <td>:</td>
                <td><input type=text name=hobby></td>
            </tr>
            <tr>
                <td><input type="reset" name=reset value=&lt&lt_Reset>
                    <input type="submit" name=simpan value=Simpan_Data>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>