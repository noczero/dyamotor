<?php
class Home extends CI_Controller{
  public function __construct() {
    parent::__construct();
    $this->load->model('AuthModel');
    $this->load->model('Mobil_model');
    $this->load->model('Tukartambah_Model', 'tt');
    $this->load->model('UserData');
    $this->load->model('Beli_Mobil');
    $this->load->model('Rekening');
    $this->load->model('Kredit');
    $this->load->library('form_validation');
    
    if($this->session->userdata('isLoggedIn')) {
      if($this->session->userdata('roles') != 2) {
        header("Location: " . base_url('Admin'));
      }
    } else {
      header("Location: " . base_url());
    }
  }

  public function index()
  {
    $this->load->view("layout/header_user");
    $this->load->view("user/home", array('datas' => $this->Mobil_model->semua_mobil()));
    $this->load->view("layout/footer");
  }

  public function tukar_tambah1()
  {
    $this->load->view("layout/header_user");
    $this->load->view("tukar_tambah1", array('datas' => $this->Mobil_model->semua_mobil()));
    $this->load->view("layout/footer");
  }

  public function tukar_tambah1_submit() {
	  $this->form_validation->set_rules('merek_mobil', 'Merek Mobil', 'trim|required');
	  $this->form_validation->set_rules('model_mobil', 'Model Mobil', 'trim|required');
	  $this->form_validation->set_rules('harga_mobil', 'Harga Mobil', 'trim|required');
	  $this->form_validation->set_rules('jarak_tempuh', 'Jarak Tempuh', 'trim|required');
	  $this->form_validation->set_rules('id_mobil', 'Mobil Pilihan', 'trim|required');

	  if ($this->form_validation->run() == FALSE) {

		  $this->tukar_tambah1();
		  return;
	  }
	  $data = $this->input->post();
	  $data['id_user'] = $this->session->userdata('id');
	  $input = $this->tt->tambah($data);

	  if ($input) {

		  redirect('home/tukar_tambah2/'. $input,'refresh');
	  }
  }



	public function tukar_tambah2_submit($id) {

		$this->form_validation->set_rules('nama_pemilik', 'Pemilik mobil', 'trim|required');
		$this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'trim|required');
		$this->form_validation->set_rules('no_stnk', 'Nomor STNK', 'trim|required');
		$this->form_validation->set_rules('no_bpkb', 'Nomor BPKB', 'trim|required');
		$this->form_validation->set_rules('tgl_pengajuan', 'Tanggal Pengajuan', 'trim|required');

		$config['upload_path']          = './assets/images';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);

		if ($this->form_validation->run() == FALSE) {

			$this->tukar_tambah2($id);
			return;
		}

		$data = $this->input->post();

		if (!$this->do_upload('upload_ktp')) {
			$error = array('upload' => $this->upload->display_errors());
			$this->session->set_flashdata('errors', $error);

			$this->tukar_tambah2($id);
			return;
		}

		$data['upload_ktp'] = $this->upload->data('file_name');

		if (!$this->do_upload('upload_stnk')) {
			$error = array('upload' => $this->upload->display_errors());
			$this->session->set_flashdata('errors', $error);

			$this->tukar_tambah2($id);
			return;
		}

		$data['upload_stnk'] = $this->upload->data('file_name');

		if (!$this->do_upload('upload_bpkb')) {
			$error = array('upload' => $this->upload->display_errors());
			$this->session->set_flashdata('errors', $error);

			$this->tukar_tambah2($id);
			return;
		}

		$data['upload_bpkb'] = $this->upload->data('file_name');

		if (!$this->do_upload('upload_mobil')) {
			$error = array('upload' => $this->upload->display_errors());
			$this->session->set_flashdata('errors', $error);

			$this->tukar_tambah2($id);
			return;
		}

		$data['upload_mobil'] = $this->upload->data('file_name');
		$input = $this->tt->ubah($data, $id);

		if ($input) {

			redirect('home/tukar_tambah3','refresh');
		}
	}

	public function tukar_tambah2($id)
	{
		$this->load->view("layout/header_user");
		$this->load->view("tukar_tambah2", array('id' => $id));
		$this->load->view("layout/footer");

	}

	public function tukar_tambah3()
	{
		$this->load->view("layout/header_user");
		$this->load->view("tukar_tambah3");
		$this->load->view("layout/footer");
	}

	public function detail_tt()
	{
		$this->load->view("layout/header_user");
		$this->load->view("detail_tt");
		$this->load->view("layout/footer");
	}

	public function detail_tt2()
	{
		$this->load->view("layout/header_user");
		$this->load->view("detail_tt2");
		$this->load->view("layout/footer");
	}

	public function galeri()
	{
		$this->load->view("layout/header_user");
		$this->load->view("galeri", array('datas' => $this->mobil->semua_mobil()));
		$this->load->view("layout/footer");
	}

	public function deskripsi_mobil()
	{
		$this->load->view("layout/header_user");
		$this->load->view("deskripsi_mobil");
		$this->load->view("layout/footer");
	}

	public function do_upload($name)
	{

		if ( ! $this->upload->do_upload($name))
		{
			return false;
		}

		return true;
	}

	public function beli($id){
		//print_r($id);
		$id_user = $this->session->userdata('id');
		$data = $this->UserData->get_user_data($id_user)->result_array();
		$this->load->view("layout/header_user");
		$this->load->view("user/beli_tahap1", array('id' => $id , 'user_data' => $data));
		$this->load->view("layout/footer");
	}

	public function beli_mobil_tahap1($id){

		$this->form_validation->set_rules('nama_lengkap', 'Nama Pemilik', 'trim|required');
	  	$this->form_validation->set_rules('no_ktp', 'No. KTP', 'trim|required');
	  	$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
	  	$this->form_validation->set_rules('kode_pos', 'Kode Pos', 'trim|required');
	  	$this->form_validation->set_rules('no_hp', 'No. HP', 'trim|required');
	  	$this->form_validation->set_rules('no_rekening', 'No. Rekening', 'trim|required');


	  	$config['upload_path']          = './assets/images/foto_ktp';
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);

		  if ($this->form_validation->run() == FALSE) {

			  $this->beli($id);
			  return;
		  }

		if (!$this->do_upload('foto_ktp')) {
			$error = array('upload' => $this->upload->display_errors());
			$this->session->set_flashdata('errors', $error);
			
			 $this->beli($id);
			return;
		}

		$id_user = $this->session->userdata('id');

		$data = $this->input->post();
		$data['id_user'] = $id_user;
		$data['foto_ktp'] = $this->upload->data('file_name');

		$input = $this->UserData->tambah($data);

		if ($input) {
			$this->beli_mobil_tahap2($id);
		}


	}

	public function edit_mobil_tahap1($id_user_data,$id_mobil ){

		$id_user = $this->session->userdata('id');
		$this->form_validation->set_rules('nama_lengkap', 'Nama Pemilik', 'trim|required');
	  	$this->form_validation->set_rules('no_ktp', 'No. KTP', 'trim|required');
	  	$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
	  	$this->form_validation->set_rules('kode_pos', 'Kode Pos', 'trim|required');
	  	$this->form_validation->set_rules('no_hp', 'No. HP', 'trim|required');
	  	$this->form_validation->set_rules('no_rekening', 'No. Rekening', 'trim|required');


	  	$config['upload_path']          = './assets/images/foto_ktp';
		$config['allowed_types']        = 'jpg|png|jpeg';

		$this->load->library('upload', $config);

		  if ($this->form_validation->run() == FALSE) {

			  $this->beli($id);
			  return;
		  }
		$data = $this->input->post();
		$data['id_user'] = $id_user;
		if(!empty($_FILES['foto_ktp']['name'])){
			if (!$this->do_upload('foto_ktp')) {
				$error = array('upload' => $this->upload->display_errors());
				$this->session->set_flashdata('errors', $error);
				
				 $this->beli($id);
				return;
			}
			$data['foto_ktp'] = $this->upload->data('file_name');
		} 

		$input = $this->UserData->ubah($data, $id_user_data);

		if ($input) {
		
			redirect('home/beli_mobil_tahap2/'.$id_mobil, 'refresh'); 
		} else {
			redirect('home/beli_mobil_tahap2/'.$id_mobil, 'refresh'); 
		}


	}


	public function beli_mobil_tahap2($id_mobil){
		$this->load->view("layout/header_user");
		$this->load->view("user/beli_tahap2", array('id' => $id_mobil));
		$this->load->view("layout/footer");
	}

	public function proses_beli_mobil_tahap2($id_mobil) {
		$this->form_validation->set_rules('metode_pembayaran', 'Metode Pembayaran', 'trim|required');
	  	$this->form_validation->set_rules('transfer_bank', 'Transfer Bank', 'trim|required');

	  	if ($this->form_validation->run() == FALSE) {
	  		$this->proses_beli_mobil_tahap2($id_mobil);
			return;
		}

	  	$id_user = $this->session->userdata('id');
		$data = $this->input->post();
		$data['id_mobil'] = $id_mobil;
		$data['id_user'] = $id_user;

		$id_beli = $this->Beli_Mobil->insert_data_get_id($data);
		//$this->konfirmasi_pembelian($id_beli,$id_mobil);
		//$this->session->set_userdata('id_beli',$id_beli); // set session beli
		//print_r($id_beli);
		// if ($input) {
		// 	$this->konfirmasi_pembelian($id_mobil);
		// }

		// cek metode pembayaran 
		$metode_pembayaran = $this->cek_metode_pembayaran($id_beli);

		if ($metode_pembayaran == 1){
			// cash
			redirect('home/konfirmasi_pembelian/'.$id_beli.'/'.$id_mobil, 'refresh'); 
		} else if ($metode_pembayaran == 2){
			// kredit
			redirect('home/simulasi_kredit/'.$id_beli.'/'.$id_mobil, 'refresh'); 

		}

	
	}

	public function konfirmasi_pembelian($id_beli,$id_mobil){

		$data['user_data'] =  $this->Beli_Mobil->get_konfirmasi_pembelian($id_beli);
		//print_r($data);
		$data['id'] = $id_mobil;

		$this->load->view("layout/header_user");
		$this->load->view("user/konfirmasi_pembelian", $data);
		$this->load->view("layout/footer");
	
	}

	public function transfer($id_beli){
		$data['belimobil'] =  $this->Beli_Mobil->get_data_belimobil($id_beli);
		//print_r($data);
		$data['id_mobil'] = $data['belimobil']['id_mobil'];

		//print_r($data['belimobil']);
		$rek_tujuan = $data['belimobil']['transfer_bank'];

		$data['rekening'] = $this->Rekening->get_rekening($rek_tujuan);


		$this->load->view('layout/header_user');
		$this->load->view('user/transfer', $data);
		$this->load->view('layout/footer');
	}

	public function upload_bukti_pembayaran($id_beli){
		$config['upload_path']          = './assets/images/bukti_pembayaran';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$this->load->library('upload', $config);

		if (!$this->do_upload('bukti_pembayaran')) {
			$error = array('upload' => $this->upload->display_errors());
			$this->session->set_flashdata('errors', $error);
			
			 $this->transfer($id_beli);
			return;
		}

		$data['bukti_pembayaran'] = $this->upload->data('file_name');

		$input = $this->Beli_Mobil->ubah($data, $id_beli);

		if ($input) {
		
			redirect('home','refresh'); 
		} 

	}

	public function cek_metode_pembayaran($id_beli){
		// return metode pembayaran dari model beli
		// 1 cash, 2 kredit.

		$data = $this->Beli_Mobil->get_one_only($id_beli);

		$result = $data['metode_pembayaran'];


		return $result;
	}

	public function simulasi_kredit($id_beli, $id_mobil){
		// cek mobil bekas atau baru
		$data_mobil = $this->Mobil_model->satu_mobil($id_mobil);
		$kondisi = $data_mobil['kondisi'];

		// kondisi mobil 0 baru, 1 bekas
		if ($kondisi){
			// bekas
			$uang_muka = $data_mobil['harga'] * 0.2;
		} else {
			// baru
			$uang_muka = $data_mobil['harga'] * 0.3;
		}

		$data['id_beli'] = $id_beli;
		$data['id_mobil'] = $id_mobil;
		$data['harga'] = $data_mobil['harga'];
		$data['uang_muka'] = $uang_muka;
		$data['kondisi'] = $kondisi;

		$this->load->view('layout/header_user');
		$this->load->view('user/simulasi_kredit', $data);
		$this->load->view('layout/footer');


	}

	public function insert_kredit($id_beli, $id_mobil){

	  	$this->form_validation->set_rules('uang_muka', 'Uang Muka', 'trim|required');

	  	$this->form_validation->set_rules('asuransi', 'Asuransi', 'trim|required');

	  	if ($this->form_validation->run() == FALSE) {
	  		$this->simulasi_kredit($id_beli, $id_mobil);
			return;
		}


		$data['id_beli'] = $id_beli;
		$data['uang_muka'] = $this->input->post('uang_muka');
		$data['asuransi'] = $this->input->post('asuransi');

		$id_kredit = $this->Kredit->insert_kredit_get_id($data);

		redirect('home/tenor_kredit/'.$id_kredit, 'refresh'); 	
 		
	}


	public function tenor_kredit($id_kredit){
		// tampil tabel tenor
		$data_kredit = $this->Kredit->get_one($id_kredit);
		$harga_mobil = $this->Kredit->get_harga_mobil($id_kredit);
		$id_mobil = $this->Kredit->get_id_mobil($id_kredit);


		//print_r($data_kredit);
		//print_r($harga_mobil['harga']);
		//print_r($id_mobil['id_mobil']);
		$data['id_kredit'] = $id_kredit;
		$data['id_mobil'] = $id_mobil['id_mobil'];
		$data['id_beli'] = $data_kredit['id_beli'];
		$data['uang_muka'] = $data_kredit['uang_muka'];
		$data['uang_angsuran'] = ((int) $harga_mobil['harga']) - ((int) $data['uang_muka']); // selisih harga mobil kurang dari uang muka.
		// print_r($data);

		 $this->load->view('layout/header_user');
		 $this->load->view('user/tenor_kredit' , $data);
		 $this->load->view('layout/footer');


	}

	public function apply_kredit(){
		$data = $this->input->get();

		$data_update['bayar'] = $data['bayar'];
		$data_update['angsuran'] = $data['angsuran'];
		$data_update['lama_tenor'] = $data['tenor'];
		$data_update['metode_kredit'] = $data['metode_kredit'];
		$id_kredit = $data['id_kredit'];
		$result = $this->Kredit->apply($data_update,$id_kredit);

		//print_r($result);
		redirect('home/konfirmasi_pembelian_kredit/'.$id_kredit, 'refresh'); 

	}


	public function konfirmasi_pembelian_kredit($id_kredit){
		$data_kredit = $this->Kredit->get_one($id_kredit);
		$id_mobil = $this->Kredit->get_id_mobil($id_kredit);


		$data['user_data'] =  $this->Beli_Mobil->get_konfirmasi_pembelian($data_kredit['id_beli']);
		//print_r($data);
		$data['id'] = $id_mobil['id_mobil'];
		$data['data_kredit'] = $data_kredit;
		$data['id_kredit'] = $id_kredit;

		$this->load->view("layout/header_user");
		$this->load->view("user/konfirmasi_pembelian_kredit", $data);
		$this->load->view("layout/footer");
	}

	public function transfer_kredit($id_kredit){
		$data_kredit = $this->Kredit->get_one($id_kredit);
		$id_mobil = $this->Kredit->get_id_mobil($id_kredit);
		//print_r($data);
		$data['belimobil'] =  $this->Beli_Mobil->get_data_belimobil($data_kredit['id_beli']);
		$data['id_mobil'] = $id_mobil['id_mobil'];
		$data['id_beli'] = $data_kredit['id_beli'];

		//print_r($data['belimobil']);
		$rek_tujuan = $data['belimobil']['transfer_bank'];

		$data['rekening'] = $this->Rekening->get_rekening($rek_tujuan);
		$data['data_kredit'] = $data_kredit;

		$this->load->view('layout/header_user');
		$this->load->view('user/transfer_kredit', $data);
		$this->load->view('layout/footer');
	}

}
