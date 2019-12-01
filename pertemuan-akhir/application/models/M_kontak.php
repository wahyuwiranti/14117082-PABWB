<?php
class M_kontak extends CI_Model{

	function barang_list(){
		$hasil=$this->db->query("SELECT * FROM bukutelpon");
		return $hasil->result();
	}

	function simpan_barang($nama,$no_telp,$alamat,$foto){
		$hasil=$this->db->query("INSERT INTO bukutelpon (nama, no_telp, alamat, foto)VALUES('$nama', '$no_telp', '$alamat', '$foto')");
		return $hasil;
	}

	function get_barang_by_no_telp($no_telp){
		$hsl=$this->db->query("SELECT * FROM bukutelpon WHERE no_telp='$no_telp'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'no_telp' => $data->no_telp,
					'nama' => $data->nama,
					'alamat' => $data->alamat,
					'foto' => $data->foto,
					);
			}
		}
		return $hasil;
	}

	function update_barang($nama,$no_telp,$alamat,$foto){
		$hasil=$this->db->query("UPDATE bukutelpon SET nama='$nama', alamat='$alamat', foto='$foto' WHERE no_telp='$no_telp'");
		return $hasil;
	}

	function hapus_barang($no_telp){
		$hasil=$this->db->query("DELETE FROM bukutelpon WHERE no_telp='$no_telp'");
		return $hasil;
	}
	
}