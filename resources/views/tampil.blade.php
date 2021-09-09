<h1 align="center">DATA NASABAH </h1>

<a class="btn btn-primary" href="?page=nasabah&action=tambah" style="margin-bottom: 20px">Tambah</a>
<table class="table table-bordered" style="margin-top: 15px" id="myTable">



    <thead>
      <tr>
      	<th> Id </th>
        <th> Nama </th>
        <th> Jaminan </th>
        <th> Kondisi Ekonomi </th>
        <th> Status Rumah </th>
        <th> Pekerjaan </th>
        <th> Penghasilan </th>
        <th> Opsi </th>
      </tr>
    </thead>
    <tbody>

	 <?php
     $sql = "SELECT*FROM nasabah ORDER BY id ASC";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
 	?>

    <tr>
        <td align="center"><?php echo $row['id']; ?></td>
		<td align="center"><?php echo $row['nama']; ?></td>
		<td align="center"><?php echo $row['jaminan']; ?></td>
		<td align="center"><?php echo $row['kondisi_ekonomi']; ?></td>
		<td align="center"><?php echo $row['status_rumah']; ?></td>
		<td align="center"><?php echo $row['pekerjaan']; ?></td>
		<td align="center"><?php echo $row['penghasilan']; ?></td>

		<td align="center">
            <a class="btn btn-warning" href="?page=nasabah&action=update&id=<?php echo $row['id']; ?>">Edit</a>
            <a onclick="return confirm('Yakin menghapus data nasabah ini ?')" class="btn btn-danger" href="?page=nasabah&action=hapus&id=<?php echo $row['id']; ?>">Hapus</a>
        </td>
     </tr>
 	 
 	 <?php
     }
     $conn->close();
 	 ?>

   </tbody>
</table>