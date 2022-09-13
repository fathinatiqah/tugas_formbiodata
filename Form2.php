<html>
    <head><title>Data Diri</title></head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<center><h3>Form Data Diri</h3></center>

<div>
  <form action="/action_page.php">
    <label for="nama">Nama Lengkap</label>
    <input type="text" id="nama" name="nama" placeholder="Your name...">

    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" placeholder="Address...">

    <label for="jenis kelamin">Jenis Kelamin</label>
    <br>
    <input type="radio" id="Laki-Laki" name="Laki-Laki" value="Laki-Laki">
    <label for="Laki-Laki">Laki-Laki</label><br>
    <input type="radio" id="Perempuan" name="Perempuan" value="Perempuan">
    <label for="perempuan">Perempuan</label><br><br>

    <label for="agama">Agama</label>
    <select id="agama" name="agama">
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katolik">Katolik</option>
      <option value="Konghucu">Konghucu</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
    </select>
    
    <label for="TL">Tempat Lahir</label>
    <input type="text" id="TL" name="TL" placeholder="Tempat Lahir..."><br>

    <label for="TL">Tanggal Lahir</label>
    <input type="date" id="TL" name="TL" placeholder="tanggal lahir..."><br><br>

    <label for="hobi">Hobi</label>
    <input type="text" id="hobi" name="hobi" placeholder="Hobby...">

    <label for="cita">Cita-Cita</label>
    <input type="text" id="cita" name="cita" placeholder="Cita-Cita...">

    <label for="usia">Usia</label>
    <input type="text" id="usia" name="usia" placeholder="Usia...">

    <label for="asal">Asal Sekolah</label>
    <input type="text" id="asal" name="asal" placeholder="Asal Sekolah...">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>