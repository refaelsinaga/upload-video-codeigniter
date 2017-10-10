<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload extends CI_Model 
{
	function upload_video($data)
	{
		$this->db->insert('tb_video',$data);
	}
}

/* End of file m_upload.php */
/* Location: ./application/models/m_upload.php */