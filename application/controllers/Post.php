<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_post');
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('post');
	}

	public function simpan()
	{
		$data['title']      = $this->input->post("title");
		$data['content']    = $this->input->post("content");
		$data['date']       = $this->input->post("date");
		$data['username']   = $this->input->post("username");
        $this->m_post->simpan($data);
	}
}
