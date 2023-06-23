<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From handling</title>
</head>
<body>
    <h1>From Pendaftaran Mahasiswa STTNF</h1>
    <Form action="belajar_get.php"method="GET">
        <!-- type text -->
         <label for="">Nama Mahasiswa</label><br>
         <input type="text" name="nama"><br><br>

        <!-- type radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-Laki">
            <label for="">Laki-Laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan">
            <label for="">Perempuan</label><br><br>
    
        <!-- type cehkbox -->
        <Label>Mata Kuliah</Label><br>  
        <input type="checkbox" name="mata_kuliah" value="Basis Data">
            <label for="">Basis Data</label><br>
        <input type="checkbox" name="mata_kuliah" value="Bahasa Inggris">
            <label for="">Bahasa Inggris</label><br><br>

        <!-- type number -->
         <label for="">Nomor Telepon</label><br>
         <input type="number" name="nomor_telepon"><br><br>

        <!-- label number -->
         <label for="">prodi</label><br>
         <select name="Prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Teknik Informatika</option>
         </select><br><br>

        <!-- button -->
         <button type="submit">kirim</button>
         <button type="submit">contoh</button>
         <button type="submit">reset</button>
    </Form>
</body>
</html>