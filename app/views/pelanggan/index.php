<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Input Pelanggan</a>

<table id="dtb">
    <thead>
      <tr>
            <th>NO</th>
            <th>PAK ID</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>HO HP</th>
            <th>KTP</th>
            <th>USER ID</th>
            <th>PEL AKTIF</th>
            <th>EDIT</th>
      </tr>  
    </thead>
    <tbody>  
        <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['pak_id']; ?></td>
                  <td><?php echo $row['user_full_name']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td><?php echo $row['user_hp']; ?></td>
                  <td><?php echo $row['user_ktp']; ?></td>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['pel_aktif']; ?></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php $no++;
      } ?>
    </tbody>
</table>