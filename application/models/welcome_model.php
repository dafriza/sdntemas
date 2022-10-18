<?php
class Welcome_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function getSliderImage()
	{
		return $this->db->get('background_slider')->result_array();
	}

	public function getLimitNews()
	{
		return $this->db->limit(6)->get('news')->result_array();
	}

	public function getAllNewsPaginate($limit, $offset)
	{
		return $this->db->get('news', $limit, $offset)->result_array();
	}

	public function totalNews()
	{
		return $this->db->get('news')->num_rows();
	}

	public function detailNews($id)
	{
		return $this->db->get_where('news', array('id' => $id))->result_array();
	}

	public function getLimitExtras()
	{
		return $this->db->limit(4)->get('extra')->result_array();
	}

	public function getExtras()
	{
		return $this->db->get('extra')->result_array();
	}

	public function detailExtra($id)
	{
		return $this->db->get_where('extra', array('id' => $id))->result_array();
	}

	public function getAlumni()
	{
		return $this->db->get('alumni')->result_array();
	}

	public function getAchievement()
	{
		return $this->db->get('achievement')->result_array();
	}

	public function getLimitAchievement()
	{
		return $this->db->limit(4)->get('achievement')->result_array();
	}

	public function totalAchievement()
	{
		return $this->db->get('achievement')->num_rows();
	}

	public function getAllAchievementPaginate($limit, $offset)
	{
		return $this->db->get('achievement', $limit, $offset)->result_array();
	}

	public function detailAchievement($id)
	{
		$res = $this->db->get_where('achievement', array('id' => $id))->result_array();
		// return $res[0]['achievement_name'];
		$this->db->like('achieve_name',$res[0]['achievement_name']);
		$res2 = $this->db->get('achievement_detail')->result_array();
		$data = array($res,$res2);
		return $data;
	}

	public function getLimitTeacher()
	{
		$this->db->like('tenaga_pendidik', 'jabatan');
		return $this->db->get('teacher')->result_array();
	}

	public function getTeacher()
	{
		return $this->db->get('teacher')->result_array();
	}
	public function totalTeacher()
	{
		return $this->db->get('teacher')->num_rows();
	}

	public function getAllTeacherPaginate($limit, $offset)
	{
		$res = $this->db->get('teacher', $limit, $offset);
		return $res->result_array();
	}
}
