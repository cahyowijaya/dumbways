<!DOCTYPE html>
<html>
<head>
    <title>CRUD Petani Kode</title>
    <link rel="icon" href="http://www.petanikode.com/favicon.ico" />
</head>
<body>



<h3>CRUD Sederhana</h3>
    <a href="tambah.php">+ Tambah data Categori</a> | 
    <a href="tambahpenulis.php">+ Tambah data Penulis</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama Buku</th>
            <th>Categori</th>
            <th>Penulis</th>
            <th>Tahun Publikasi</th>
            <th>Gambar</th>
            <th>OPSI</th>
        </tr>
        <?php 


        // --- koneksi ke database
        $koneksi = mysqli_connect("localhost","root","root","dbdumbways") or die(mysqli_error());
        $query = "SELECT book_tb.name as nmbook, category_tb.name as nmcategory, writer_tb.name as nmwriter, publication_year, img from book_tb
            left join category_tb on book_tb.category_id = category_tb.id
            left join writer_tb on book_tb.writer_id = writer_tb.id";
        $no = 1;
        $data = mysqli_query($koneksi,$query);
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nmbook']; ?></td>
                <td><?php echo $d['nmcategory']; ?></td>
                <td><?php echo $d['nmwriter']; ?></td>
                <td><?php echo $d['publication_year']; ?></td>
                <td><?php echo $d['img']; ?></td>
                <td>To Do list</td>
            </tr>
            <?php 
        }
        ?>
    </table>

</body>
</html>