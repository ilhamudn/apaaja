<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('barang_m');
	}
	
	public function index(){
		$data['row'] = $this->barang_m->get();
		$this->template->load('template','barang/data', $data);
	}

	public function add(){
		$barang = new stdClass();
		$barang->nama_brg = null;
		$barang->harga = null;
		$barang->stok = null;
		$barang->keterangan = null;
		$data = array(
			'page' => 'add',
			'row' => $barang
		);
		$this->template->load('template', 'barang/input', $data);
	}

	public function edit($id)
	{	
		$query = $this->barang_m->get($id);
		if($query->num_rows() > 0){
			$barang = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $barang
			);
			$this->template->load('template', 'barang/input', $data);
		} else{
			echo "<script>
			alert('barang gagal di edit');
			window.location='".site_url('barang')."';
			</script>";
		}
	}

	public function process(){
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])){
			$this->barang_m->add($post);
		}else if(isset($_POST['edit'])){
			$this->barang_m->edit($post);
		}
		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil ditambahkan');</script>";
		}
		echo "<script>window.location='".site_url('barang')."';</script>";
	}


	public function del($id)
	{	
		$this->barang_m->del($id);
		if($this->db->affected_rows() > 0){
			echo "<script>alert('data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('barang')."';</script>";
	}
}
