<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_m extends CI_Model {
    
    public function get($id= null){ 

        $this->db->from('barangg');
        if($id != null){
            $this->db->where('nama_brg', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $params = [
            'nama_brg' => $post['nama_brg'],
            'harga' => $post['harga'],
            'stok' => $post['stok'],
            'keterangan' => empty($post['keterangan']) ? null : $post['keterangan'],
        ];
        $this->db->insert('barangg', $params);
    }

    public function edit($post){
        $params = [
            'nama_brg' => $post['nama_brg'],
            'harga' => $post['harga'],
            'stok' => $post['stok'],
            'keterangan' => empty($post['keterangan']) ? null : $post['keterangan'],
        ];
        $this->db->where('nama_brg', $post['id']);
        $this->db->update('barangg', $params);
    }

    public function del($id){
        $this->db->where('nama_brg', $id);
		$this->db->delete('barangg');
    }
}