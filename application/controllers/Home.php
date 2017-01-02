<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
function __construct(){
parent::__construct();
}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function delete()
	{
		$id= $this->uri->segment(3);
			$this->db->query("delete from countries where id ='".$id."'");
			$this->load->view('welcome_message');
		
	}

	function update()
	{   
		
		$countries=$this->db->get_where('countries',array('id' => $this->uri->segment('3')));
		$data['res']=$countries->result();
		$data['title']="update country";
		$data['id']=$this->uri->segment('3');
		$this->load->view("update",$data);
		if($this->input->post('up'))
		{
			$donnee = array(
							'countryCode' => $this->input->post('c_code'),
							'population'  => $this->input->post('population'),
							'countryName' => $this->input->post('c_name')
							);
			$this->db->where('id',$this->uri->segment('3'));
			$this->db->update('countries',$donnee);
			redirect('Home');
		}


	}
	function up()
	{
		
	}
}
