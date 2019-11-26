<?php
	
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('AuthModel');
		$this->load->model('Mobil_model', 'mobil');
		$this->load->library('form_validation');
		
		if($this->session->userdata('isLoggedIn')) {
			if($this->session->userdata('roles') != 1) {
				header("Location: " . base_url('User'));
			}
		} else {
			header("Location: " . base_url());
		}
	}

	public function index()
	{
		$this->load->view("layout/header");
		$this->load->view("admin/home_admin", array('datas' => $this->mobil->semua_mobil()));;
		$this->load->view("layout/footer");
	}

	public function form_mobil()
	{
		$this->load->view("layout/header");
		$this->load->view('form_mobil');
		$this->load->view("layout/footer");
	}

	public function form_edit_mobil($id)
	{
		$this->load->view("layout/header");
		$this->load->view('form_edit_mobil', array('data' => $this->mobil->satu_mobil($id)));
		$this->load->view("layout/footer");
	}

	public function detail_mobil()
	{
		$this->load->view("layout/header");
		$this->load->view('detail_mobil', array('datas' => $this->mobil->semua_mobil()));
		$this->load->view("layout/footer");
	}

	public function edit_mobil()
	{
		$this->form_validation->set_rules('no_plat', 'Nomor Plat', 'trim|required');
		$this->form_validation->set_rules('no_mesin', 'Nomor Mesin', 'trim|required');
		$this->form_validation->set_rules('no_rangka', 'Nomor Rangka', 'trim|required');
		$this->form_validation->set_rules('merek_mobil', 'Merek Mobil', 'trim|required');
		$this->form_validation->set_rules('model_mobil', 'Model Mobil', 'trim|required');
		$this->form_validation->set_rules('tipe_mobil', 'Tipe Mobil', 'trim|required');
		$this->form_validation->set_rules('transmisi', 'Transmisi', 'trim|required');
		$this->form_validation->set_rules('jarak_tempuh', 'Jarak Tempuh', 'trim|required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('warna', 'Warna', 'trim|required');
		$this->form_validation->set_rules('bahan_bakar', 'Bahan Bakar', 'trim|required');
		$this->form_validation->set_rules('kondisi', 'Kondisi Mobil', 'trim|required');
		$this->form_validation->set_rules('stok', 'Stok', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required');

		$config['upload_path']          = './assets/images';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		
		if ($this->form_validation->run() == FALSE) {

			$this->form_edit_mobil($this->input->post('id_mobil'));
			return;
		}

		$data = $this->input->post();
		$id = $this->input->post('id_mobil');
		unset($data['id_mobil']);

		if (!empty($_FILES['gambar']['name'])) {
			if (!$this->do_upload()) {
				$error = array('upload' => $this->upload->display_errors());
				$this->session->set_flashdata('errors', $error);
				
				$this->form_edit_mobil($this->input->post('id_mobil'));
				return;
			}

			$data['gambar'] = $this->upload->data('file_name');
		}

		$input = $this->mobil->ubah($data, $id);

		if ($input) {
			
			redirect('admin/detail_mobil','refresh');
		}
	}

	public function hapus($id)
	{
		$input = $this->mobil->hapus($id);

		if ($input) {
			
			redirect('admin/detail_mobil','refresh');
		}
	}

	public function input_mobil()
	{
		$this->form_validation->set_rules('no_plat', 'Nomor Plat', 'trim|required');
		$this->form_validation->set_rules('no_mesin', 'Nomor Mesin', 'trim|required');
		$this->form_validation->set_rules('no_rangka', 'Nomor Rangka', 'trim|required');
		$this->form_validation->set_rules('merek_mobil', 'Merek Mobil', 'trim|required');
		$this->form_validation->set_rules('model_mobil', 'Model Mobil', 'trim|required');
		$this->form_validation->set_rules('tipe_mobil', 'Tipe Mobil', 'trim|required');
		$this->form_validation->set_rules('transmisi', 'Transmisi', 'trim|required');
		$this->form_validation->set_rules('jarak_tempuh', 'Jarak Tempuh', 'trim|required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required');
		$this->form_validation->set_rules('warna', 'Warna', 'trim|required');
		$this->form_validation->set_rules('bahan_bakar', 'Bahan Bakar', 'trim|required');
		$this->form_validation->set_rules('kondisi', 'Kondisi Mobil', 'trim|required');
		$this->form_validation->set_rules('stok', 'Stok', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required');

		$config['upload_path']          = './assets/images';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		
		if ($this->form_validation->run() == FALSE) {

			$this->form_mobil();
			return;
		} 

		if (!$this->do_upload()) {
			$error = array('upload' => $this->upload->display_errors());
			$this->session->set_flashdata('errors', $error);
			
			$this->form_mobil();
			return;
		}

		$data = $this->input->post();
		$data['gambar'] = $this->upload->data('file_name');

		$input = $this->mobil->tambah($data);

		if ($input) {
			
			redirect('admin/detail_mobil','refresh');
		}
	}

	public function do_upload()
	{

		if ( ! $this->upload->do_upload('gambar'))
		{

			return false;
		}

		return true;
	}

}

/* End of file Admin.php */
	
?>
