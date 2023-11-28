<h2>Input Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
        <tr>
            <td>PAK ID</td>
            <td><input type="text" name="pak_id" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="user_full_name" required></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><input type="text" name="user_alamat" required></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="user_hp" required></td>
        </tr>
        <tr>
            <td>KTP</td>
            <td><input type="text" name="user_ktp" required></td>
        </tr>
        <tr>
            <td>USER ID</td>
            <td><input type="text" name="user_id" required></td>
        </tr>
        <tr>
            <td>PEL AKTIF</td>
            <td><input type="text" name="pel_aktif" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>