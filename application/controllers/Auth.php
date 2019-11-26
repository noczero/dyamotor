<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Auth extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->model('AuthModel');
			$this->load->library('form_validation');
			
			if($this->session->userdata('isLoggedIn')) {
				if($this->session->userdata('roles') == 1) {
					header("Location: " . base_url('Admin'));
				} else if($this->session->userdata('roles') == 2) {
					header("Location: " . base_url('Home'));
				}
			}
		}
		

		public function index(){
			if ($this->input->post()){
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
					$query = $this->AuthModel->login($username, $password);
					$data = $query->row();
					$row = $query->num_rows();

					if($row != 0) {
						if ($data->roles == 1) {
							$data_sess = [
								'isLoggedIn' => true,
								'roles' => $data->roles
							];
							
							$this->session->set_userdata( $data_sess );
							
							header("Location: " . base_url('Admin'));
						} else {
							$data_sess = [
								'isLoggedIn' => true,
								'roles' => $data->roles,
								'username' => $username,
								'id' => $data->id
							];
							
							$this->session->set_userdata( $data_sess );
							
							header("Location: " . base_url('Home'));
						}
					} else { ?>
						<script>
							alert('Username atau Password anda salah..!');
						</script>
					<?php $this->load->view('login');
					}
			} else {
				$this->load->view('login');
			}
		}
		public function register()
		{
			if($this->input->post()) {
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
				$confirm_pass = md5($this->input->post('confirm_pass'));
				
				if($password == $confirm_pass) {
					$cek = $this->AuthModel->selectDataUser($username)->num_rows();
					if($cek == 0) {
						$data = [
							'username' => $username,
							'password' => $password,
							'roles' => 2
						];

						$query = $this->AuthModel->register($data);

						if ($query) {
							?>
							<script>
								alert("Akun berhasil dibuat..");
								location = '<?= base_url(); ?>';
							</script>
							<?php
						} else {
							?>
							<script>
								alert("Akun gagal dibuat..!");
								location = '<?= base_url('auth/register'); ?>';
							</script>
							<?php
						}
					} else {
						?>
						<script>
							alert("Username sudah terdaftar..!");
							location = '<?= base_url('auth/register'); ?>';
						</script>
						<?php
					}
				} else { 
					?>
					<script>
						alert("Konfirmasi password tidak sesuai..!");
						location = '<?= base_url('auth/register'); ?>';
					</script>
					<?php
				}
				
			} else {
				$this->load->view('register');
			}
		}
	
		public function forgot()
		{
			$this->load->view('forgot');
		}
		
		public function logout() {
			$this->session->sess_destroy();
			redirect(base_url(), 'refresh');
		}
	
	}
?>