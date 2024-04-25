<?php
class M_post extends CI_Model
{
    function simpan($data){
        // $query = $this->db->query('YOUR QUERY HERE');
        $query = $this->db->query("INSERT INTO `post`(`idpost`, `title`, `content`, `date`, `username`) 
        VALUES ('".$data['title']."','".$data['content']."','".$data['date']."','".$data['username']."'");
        return $query;
    }
}