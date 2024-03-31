<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function login($post){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        return $this->db->get();
    }

    public function get($id = null){
        $this->db->select('*');
        $this->db->from('user');
        if($id != null){
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['address'] = $post['address'] != "" ? $post['address'] : null;
        $params['level'] = $post['level'];
        $this->db->insert('user', $params);
    }

    public function delete($id){
        $this->db->where('user_id', $id);
        $this->db->delete('user');
    }
}