<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_model');
	}
	public function index()
	{
		$data = array(
			'image' => $this->welcome_model->getSliderImage(),
			'news' => $this->welcome_model->getLimitNews(),
			'extras' => $this->welcome_model->getLimitExtras(),
			'alumni' => $this->welcome_model->getAlumni(),
			'achievement' => $this->welcome_model->getLimitAchievement(),
			'teacher' =>	$this->welcome_model->getLimitTeacher(),
			'title' => 'SDN TEMAS 1'
		);
		// print_r($data['teacher']);
		$this->parser->parse('Contents/index', $data);
	}
	public function news()
	{
		$this->load->library('pagination');
		$numb = 3;
		$totalData = $this->welcome_model->totalNews();
		$config['total_rows'] = $totalData;
		$config['per_page'] = $numb;
		$config['base_url'] = base_url('news');
		$config['uri_segment'] = $this->uri->segment(2);
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['reuse_query_string'] = FALSE;

		$config['full_tag_open'] = '<div class="custom-pagination">';
		$config['full_tag_close'] = '</div">';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = "<a>";
		$config['first_tag_close'] = '</a>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = "<a>";
		$config['last_tag_close'] = '</a>';

		$config['next_link'] = '&gt;';
		$config['prev_link'] = '&lt;';

		$config['cur_tag_open'] = '<a>';
		$config['cur_tag_close'] = '</a>';

		$this->pagination->initialize($config);
		$data = array(
			'bg_image' => $this->welcome_model->getSliderImage(),
			'news' => $this->welcome_model->getAllNewsPaginate($numb, (($_GET['per_page'] * $numb) - $numb)),
			'total_data' => round($totalData / $numb),
			'title' => 'SDN TEMAS 1'
		);
		// echo $this->pagination->create_links();
		// print_r($from);
		// print_r($data['news']);
		// print_r( round(5/2) );
		$this->load->view('Contents/news', $data);
	}

	public function newsDetail($id)
	{
		$data = array(
			'bg_image' => $this->welcome_model->getSliderImage(),
			'detail' => $this->welcome_model->detailNews($id),
			'title' => 'SDN TEMAS 1'
		);
		$this->load->view('Contents/news_detail', $data);
		// print_r($res);
	}

	public function extra()
	{
		$data = [
			'bg_image' => $this->welcome_model->getSliderImage(),
			'extra' => $this->welcome_model->getExtras(),
			'title' => 'SDN TEMAS 1'
		];
		$this->load->view('Contents/extra', $data);
	}

	public function extraDetail($id)
	{
		$data = array(
			'bg_image' => $this->welcome_model->getSliderImage(),
			'detail' => $this->welcome_model->detailExtra($id),
			'title' => 'SDN TEMAS 1'
		);
		$this->load->view('Contents/extra_detail', $data);
		// print_r($res);
	}

	public function achievement()
	{
		// $this->load->library('pagination');
		// $totalData = $this->welcome_model->totalAchievement();
		// $config['total_rows'] = $totalData;
		// $config['per_page'] = 2;
		// $config['base_url'] = base_url('achievement');
		// $config['uri_segment'] = $this->uri->segment(2) ?? 0;

		// $config['full_tag_open'] = '<div class="custom-pagination">';
		// $config['full_tag_close'] = '</div">';

		// $config['first_link'] = 'First';
		// $config['first_tag_open'] = '<a>';
		// $config['first_tag_close'] = '</a>';

		// $config['last_link'] = 'Last';
		// $config['last_tag_open'] = '<a>';
		// $config['last_tag_close'] = '</a>';

		// $config['next_link'] = '&gt;';
		// $config['prev_link'] = '&lt;';

		// $config['cur_tag_open'] = '<a>';
		// $config['cur_tag_close'] = '</a>';

		// $this->pagination->initialize($config);

		$data = array(
			'bg_image' => $this->welcome_model->getSliderImage(),
			// 'achievement' => $this->welcome_model->getAllAchievementPaginate($config['per_page'], $config['uri_segment']),
			'achievement' => $this->welcome_model->getAchievement(),
			// 'total_data' => $totalData,
			'title' => 'SDN TEMAS 1'
		);
		// echo $this->pagination->create_links();
		// print_r($from);
		$this->load->view('Contents/achievement', $data);
	}

	public function achievementDetail($id)
	{
		$data = array(
			'bg_image' => $this->welcome_model->getSliderImage(),
			'detail' => $this->welcome_model->detailAchievement($id)[0],
			'achieve' => $this->welcome_model->detailAchievement($id)[1],
			'title' => 'SDN TEMAS 1'
		);
		$this->load->view('Contents/achievement_detail', $data);
	}

	public function about()
	{
		$data = array(
			'bg_image' => $this->welcome_model->getSliderImage(),
			'title' => 'SDN TEMAS 1',
		);
		$data['bg_image'][0]['numb'] = 0;
		$data['bg_image'][1]['numb'] = 100;
		$data['bg_image'][2]['numb'] = 200;
		// print_r($data['bg_image'][0]);
		$this->load->view('Contents/about', $data);
	}

	public function teacher()
	{
		$data = array(
			'bg_image' => $this->welcome_model->getSliderImage(),
			'teacher' => $this->welcome_model->getTeacher(),
			'title' => 'SDN TEMAS 1'
		);
		$this->load->view('Contents/teacher', $data);
	}
	public function contactUs()
	{
		$data = array(
			'bg_image' => $this->welcome_model->getSliderImage(),
			'title' => 'SDN TEMAS 1',
		);
		$this->load->view('Contents/contact', $data);
	}
	public function sendMail()
	{
		$config = [
			'mailtype'  => 'text',
			'protocol'  => 'smtp',
			'smtp_host' => 'smtp.gmail.com',
			'smtp_user' => 'dafrizaq@gmail.com',  // Email gmail
			'smtp_pass'   => 'ilmbfgwzxhmrygho',  // Password gmail
			'smtp_crypto' => 'tls',
			'smtp_port'   => 587,
			'_smtp_auth' => TRUE,
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE,
			'newline' => "\r\n",
			'crlf' => "\r\n",
		];
		$data = $this->input->post(array('name', 'email', 'subject', 'message'), TRUE);
		$this->load->library('email', $config);
		$this->email->from('dafrizaq@gmail.com', $data['name']);
		$this->email->to('sdntemas1batu@gmail.com');

		$this->email->subject('Dari : '.$data['email'].', '.$data['subject']);
		$this->email->message('Dari : '.$data['email'].'\n'.$data['message']);
		if ($this->email->send()) {
			$this->session->set_flashdata('success', 'Pesan berhasil terkirim');
			redirect(base_url('contact'));
			// print_r("berhasil");
		} else {
			print_r($this->email->print_debugger());
			print_r("gagal");
		}
		print_r($data);
	}
}
