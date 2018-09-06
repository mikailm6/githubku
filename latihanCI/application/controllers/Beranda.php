<?php 
defined("BASEPATH") or exit ('No Direct Script Case Acces Allowed');
/**
 * 
 */
class Beranda extends CI_Controller
{

	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('crud_siswa');
		
}
	public function index(){
		$data['siswa'] = $this->crud_siswa->tampil_siswa();
		$this->load->view('beranda.php', $data);
		
	}

	public function linktambahdata(){
		$this->load->view('tambah_data.php');//link menuju tambah_data.php
	}

	public function tambahdata(){
		//mendefinisikan inptan sesuai dengan apa yg ada d tabel
		$siswa['nama'] = $this->input->post('nama');
		$siswa['kelas'] = $this->input->post('kelas');
		$siswa['password'] = $this->input->post('password');

		//membuat query untuk menamuung data ke tabel
		//berdasarkan model tambah data yg telah d buat
		$query = $this->crud_siswa->tambahdata($siswa);
		//mereferensi query dari class crud_siswadan fungsi tambah data 
		//yg ada di folder model->cruud_siswa.php

		//fungsi if untuk mengembalikan ke index.php
		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}


	public function linkeditdata($id){
		$data['siswa'] = $this->crud_siswa->getuser($id);
		$this->load->view('editdatasiswa', $data);
		//fungsi mengedit data siswa berdasarkan ID siswa
	}

	public function update($id){
		//hampir sama dengan tambahdata
		$siswa['nama'] = $this->input->post('nama');
		$siswa['kelas'] = $this->input->post('kelas');
		$siswa['password'] = $this->input->post('password');

		$query = $this->crud_siswa->editdatasiswa($siswa,$id);

		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}

	public function deletesiswa($id){
		$query = $this->crud_siswa->deletesiswa($id);
		
		if($query){
			header('location:'.base_url().$this->index());	
		}
	}

}
	
?>