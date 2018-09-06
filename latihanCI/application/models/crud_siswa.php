<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class crud_siswa extends CI_Model
{
	
	function __construct(){
		parent:: __construct();
		$this->load->database();//codeigniter
	}

//Fungsi untuk menampilkan data siswa dari database
	public function tampil_siswa(){
	$query = $this->db->get('siswa');//query dari tabel siswa
	return $query->result();
	}
//Fungsi tambah data
	public function tambahdata($siswa){
		return $this->db->insert('siswa',$siswa);//memasukan data ke tabel siswa dengan parameter $siswa
	}

	public function likntambahdata(){
		$this->load->view('tambah_data.php');
	}
	//fungsi untuk mengedit (update) data siswa berdasarkan ID [primary key] yg ada pd tabel
	public function editdatasiswa($siswa, $id){
		$this->db->where('siswa.id',$id);
		return $this->db->update('siswa',$siswa);
	}

	//untuk membuat/mengambil ID atau mendefinisikan data mana yg
	//akan dipakai atau di edit
	public function getuser($id){
		$query = $this->db->get_where('siswa',array('id' => $id ));
		return $query->row_array();

	}
	//fungsi untuk menghapus data siswa
	public function deletesiswa($id){
		$this->db->where('siswa.id', $id);
		return $this->db->delete('siswa');
	}

}
?>
