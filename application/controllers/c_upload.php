<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_upload extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model('M_upload');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	function do_upload()
	{
		$config['upload_path'] = './assets/video/';
		$config['allowed_types'] = 'mp4|3gp|flv';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('video')){
			$error = array('error' => $this->upload->display_errors());
			print_r($error);
		}
		else{
			$keterangan	= $this->input->post('keterangan');
			$img 	= $this->upload->data();
			$video	= $img['file_name'];

			$data = array('keterangan' 	=> $keterangan,
						  'video' 	=> $video);

			$this->M_upload->upload_video($data);
			echo "upload video sukses :: <br>";
			echo " coba anda cek folder assets/video dan database";
		}
	}
}
