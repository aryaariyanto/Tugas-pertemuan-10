<?php

namespace App\Models;

use App\Core\Model;

class Paket extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_paket";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $pak_nama = $_POST['pak_nama'];
          $pak_harga = $_POST['pak_harga'];

          $sql = "INSERT INTO tb_paket SET pak_nama=:pak_nama, pak_harga=:pak_harga";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pak_nama", $pak_nama);
          $stmt->bindParam(":pak_harga", $pak_harga);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_paket WHERE pak_id=:pak_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":pak_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $pak_nama = $_POST['pak_nama'];
          $pak_harga = $_POST['pak_harga'];
          $id = $_POST['id'];

          $sql = "UPDATE tb_paket
          SET pak_nama=:pak_nama, pak_harga=:pak_harga WHERE pak_id=:pak_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":pak_nama", $pak_nama);
          $stmt->bindParam(":pak_harga", $pak_harga);
          $stmt->bindParam(":pak_id", $id);

          $stmt->execute();
     }

     public function delete($id)
      {
            $sql = "DELETE FROM tb_paket WHERE pak_id=:pak_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":pak_id", $id);
            $stmt->execute();
      }
}
