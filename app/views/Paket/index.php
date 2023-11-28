<h2>Paket</h2>

<a href="<?php echo URL; ?>/paket/input" class="btn">Input Paket</a>

<table id="dtb">
<thead>
      <tr>
            <th>NO</th>
            <th>ID PAK</th>
            <th>NAMA PAK</th>
            <th>HARGA</th>
            <th>EDIT</th>
      </tr> 
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['pak_id']; ?></td>
                  <td><?php echo $row['pak_nama']; ?></td>
                  <td><?php echo $row['pak_harga']; ?></td>
                  <td><a href="<?php echo URL; ?>/paket/edit/<?php echo $row['pak_id']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php $no++;
      } ?>
      </tbody>

</table>