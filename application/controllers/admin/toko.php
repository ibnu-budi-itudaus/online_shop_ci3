<?php 

class Toko extends CI_Controller {

	public function __construct(){
		parent:: __construct();

		if($this->session->userdata('role_id') != '1')
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
				redirect('auth/login');
		}
	}


	public function index()
	{
		$data['judul'] = 'Data Toko';
		$data['barang'] = $this->model_toko->tampil_data()->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_toko', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$this->form_validation->set_rules('nama_brg','Nama barang','required',['required' => 'Nama barang wajib diisi']);
		$this->form_validation->set_rules('keterangan','Keterangan','required',['required' => 'Keterangan wajib diisi']);
		$this->form_validation->set_rules('kategori','Kategori','required',['required' => 'Kategori wajib diisi']);
		$this->form_validation->set_rules('harga_brg','Harga barang','required',['required' => 'Harga barang wajib diisi']);
		$this->form_validation->set_rules('stok','Stok','required',['required' => 'Stok wajib diisi']);
		$gambar = $_FILES['gambar']['name'];
		if($gambar=''){}else{
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar gagal diupload!";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_brg' => $this->input->post('nama_brg'),
			'keterangan' => $this->input->post('keterangan'),
			'kategori' =>  $this->input->post('kategori'),
			'harga_brg' => $this->input->post('harga_brg'),
			'stok' => $this->input->post('stok'),
			'gambar' => $gambar

		);

		$this->model_toko->tambah_barang($data, 'tb_barang');
		redirect('admin/data_toko/index');
	}

	public function edit ($id)
	{
		$where = array('id_brg' => $id);
		$data['barang'] = $this->model_toko->edit_barang($where, 'tb_barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update (){
		$id			        = $this->input->post('id_brg');
		$nama_brg			= $this->input->post('nama_brg');
		$keterangan			= $this->input->post('keterangan');
		$kategori			= $this->input->post('kategori');
		$harga			    = $this->input->post('harga_brg');
		$stok			    = $this->input->post('stok');

		$data = array(
				'nama_brg'     => $nama_brg,
				'keterangan'   => $keterangan,
				'kategori'     => $kategori,
				'harga_brg'    => $harga,
				'stok'         => $stok
		);

		$where = array(
			'id_brg	' => $id
		);

		$this->model_toko->update_data($where, $data, 'tb_barang');
		redirect('admin/data_toko/index');
	}

	public function hapus($id)
	{
		$where = array('id_brg' => $id);
		$this->model_toko->hapus_data($where,'tb_barang');
		redirect('admin/data_toko/index');
	}

	public function detail($id_brg)
	{
		$data["barang"] = $this->model_toko->detail_brg($id_brg);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_barang', $data);
		$this->load->view('templates_admin/footer');
	}
}

 ?>