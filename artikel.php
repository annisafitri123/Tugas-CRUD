<?php
include_once 'koneksi.php';
//include('login_session.php');
$title = 'Artikel';
$sql = 'SELECT * FROM artikel order by tanggal DESC';
$result = mysqli_query($conn, $sql);

//include('header.php');
//include('nav.php');
//include('sidebar.php');
 ?>
 <link rel="stylesheet" href="css/style2.css">
 <div class="container">>
		<header>
			
		</header>
		<nav>
			<a href="index.php">Home</a>
			<a href="profile.php">Profile</a>
		</nav>
		
     <?php
        echo '<a href="tambah.php" class="btn btn-large">Tambah Artikel</a>';
      ?>
      <div class="wrap">
			<div class="side">
				
			</div>
			<div class="content">
 <div class="wrap">
 	<div class="content">
 		
 	</div>
	<div class="content_a">
   		<div class="main">
        <h1 style="color: #fbfdfd">Daftar Buku Perpustakaan</h1>
        <br>

     <table border="1" style="color: #fbfdfd">
      <tr>
       <th>Judul</th>
       <th>Tanggal</th>
       <th>Aksi</th>
     </tr>
       <?php while ($row = mysqli_fetch_array($result)):?>
         <tr>
           <td><?php echo $row['title']; ?></td>
           <td><?php echo date("j F Y", strtotime($row['tanggal'])) ;?></td>
           <td>
     				<a class="btn btn-default" href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
     				<a class="btn btn-alert" onclick="return confirm('Yakin akan menghapus data?');"
              href="hapus.php?id=<?php echo $row['id'];?>">Delete</a>
     			</td>
         </tr>
       <?php endwhile; ?>
     </table>
   		</div>
 	</div>
</div>
</div>
<footer>
	<p> Annisa Fitri, Teknik Informatika</p>
</footer>
</div>
</div>				
 <?php
 //include('footer.php');
  ?>
