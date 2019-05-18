
<?php  

class Users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$data['users'] = $this->Users_model->getAllUsers();
		$data['judul'] = 'Daftar Programmer';
		$this->load->view("templetes/header",$data);
		$this->load->view("users/index",$data);
		$this->load->view("templetes/footer");
	}
	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data User';

		$this->form_validation->set_rules('name','Nama','required');
		if ($this->form_validation->run() == FALSE ) {
		$this->load->view("templetes/header",$data);
		$this->load->view("users/tambah",$data);
		$this->load->view("templetes/footer");
		} else{
		$this->Users_model->tambahDataUsers();
		$this->session->set_flashdata('flash','Ditambahkan');
		redirect('users');
		}
	}
	public function hapus($id)	
	{
		$this->Users_model->hapusDataUsers($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('users');
	}
	public function detail($id)
	{
		$data['judul'] = 'Detail Users';
		$data['users'] = $this->Users_model->getUsersById($id);
		$this->load->view("templetes/header",$data);
		$this->load->view("users/detail",$data);
		$this->load->view("templetes/footer");
	}
	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Users';
		$data['users'] = $this->Users_model->getUsersId($id);
		$this->form_validation->set_rules('skill','Skill','required');
		if ($this->form_validation->run() == FALSE ) {
		$this->load->view("templetes/header",$data);
		$this->load->view("users/ubah",$data);
		$this->load->view("templetes/footer");
		} else{
		$this->Users_model->ubahDataUsers();
		$this->session->set_flashdata('flash','Diubah');
		redirect('users');
		}
	}
}
