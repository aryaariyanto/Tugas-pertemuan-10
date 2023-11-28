<h2>Edit Paket</h2>

<form action="<?php echo URL; ?>/paket/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['pak_id']; ?>">
    <table>
        <tr>
            <td>NAME</td>
            <td><input type="text" name="pak_nama" value="<?php echo $data['row']['pak_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="pak_harga" value="<?php echo $data['row']['pak_harga']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>