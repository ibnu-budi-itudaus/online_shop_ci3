<?php 
class Model_toko extends CI_Model{
	public function tampil_data(){
		return $this->db->get('tb_toko');
	}

	public function tambah_barang($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_barang($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id){
		$result = $this->db->where('id_toko', $id)
						   ->limit(1)
						   ->get('tb_toko');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}

	public function detail_brg($id_toko)
	{
		$result = $this->db->where('id_toko',$id_toko)->get('tb_toko');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

}
 
 ?>