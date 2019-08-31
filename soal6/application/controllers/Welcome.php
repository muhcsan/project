<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper(array("form","url","html"));
		$this->load->library(array("session", "form_validation"));
		$this->load->database();
		$this->load->model("MyModel");
	}

	public function index()
	{
		$data["work"] = $this->MyModel->getwork();
		$data["salary"] = $this->MyModel->getsalary();
		$data["nama"] = $this->MyModel->getnama();

		if ($this->session->flashdata("sukses")) {
			$data["sukses"] = $this->session->flashdata("sukses");
		}

		$this->load->view('welcome_message',$data);
	}

	public function tambahdata()
	{
		$datainput = array(
			'nama' => $this->input->post('nama'),
			'id_work' => $this->input->post('work'),
			'id_salary' => $this->input->post('salary')
		 );
		$this->MyModel->insertnama($datainput);
		return redirect('/');
	}

	public function hapusdata($id)
	{
		$this->MyModel->hapusnama($id);
		$this->session->set_flashdata("sukses", "Berhasil menghapus data.");
		return redirect('/');		
	}

	public function editdata($id)
	{
		$data["work"] = $this->MyModel->getwork();
		$data["salary"] = $this->MyModel->getsalary();
		$data["nama"] = $this->MyModel->getnamabyid($id);
		echo $this->load->view('edit_data',$data, TRUE);
	}

	public function updatedata()
	{
		$id = $this->input->post("id");
		$datainput = array(
			'nama' => $this->input->post('nama'),
			'id_work' => $this->input->post('work'),
			'id_salary' => $this->input->post('salary')
		 );
		$this->MyModel->updatenama($id, $datainput);

		return redirect('/');
	}
}
