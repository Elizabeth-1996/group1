<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class first extends CI_Controller {

	/**
	 * Index Page for= this controller.
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
	public function index()
	{
		echo "hello";
		$this->load->view('new');
	}
		public function regist()
	{

		$this->load->view('reg_form');
	}

public function registrationForm()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("fname","firstname",'required');
		$this->form_validation->set_rules("lname","lastname",'required');
		$this->form_validation->set_rules("age","age",'required');
		$this->form_validation->set_rules("gender","gender",'required');
		$this->form_validation->set_rules("address","address",'required');
		$this->form_validation->set_rules("phno","phonenumber",'required');
	$this->form_validation->set_rules("aadhar","aadharnumber",'required');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');
		$pass=$this->input->post("password");
		$encpass=$this->mainmodel->encpswd($pass);
		$reg=array("fname" => $this->input->post("fname"),
					"lname"=>$this->input->post("lname"),
					"age"=>$this->input->post("age"),
					"gender"=>$this->input->post("gender"),
					"address"=>$this->input->post("address"),
					"phno"=>$this->input->post("phno"),
					"aadhar"=>$this->input->post("aadhar"));
		$log=array("email"=>$this->input->post("email"),
				"password"=>$encpass,
				"utype"=>'1');
		$this->mainmodel->rgstr($reg,$log);
		redirect(base_url().'first/regist');
		}
	}

//load login page
	public function log()
	{
		$this->load->view('login');
	}

	//login function
		public function login()
		{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","email",'required');
		$this->form_validation->set_rules("password","password",'required');
		if($this->form_validation->run())
		 	{
		 		$this->load->model('mainmodel');
		 		$email=$this->input->post("email");
		 		$pass=$this->input->post("password");
		 		$rslt=$this->mainmodel->selepass($email,$pass);
		 		if($rslt)
		 		{
		 			$id=$this->mainmodel->getuserid($email);
		 			$user=$this->mainmodel->getuser($id);
		 			$this->load->library(array('session'));	 
		 			$this->session->set_userdata(array('id'=>(int)$user->id,'utype'=>$user->utype));
		 			if($_SESSION['utype']=='0')
			 			{
			 				redirect(base_url().'first/log');
			 			}
		 			elseif($_SESSION['utype']=='1') 
			 			{
			 			 	redirect(base_url().'first/regist');
			 			 } 
		 			}
		 		else
		 		{
		 			echo "invalid user";
		 		}
		 }
	else
	{
		redirect('first/login','refresh');
	}
}

	public function home()
	{

		$this->load->view('home');
	}
	public function flight()
	{

		$this->load->view('flight');
	}
	public function flightForm()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("flname","flightname",'required');
		$this->form_validation->set_rules("flno","flightno",'required');
	$this->form_validation->set_rules("depar","departuredata",'required');
		$this->form_validation->set_rules("depdate","depar date",'required');
		$this->form_validation->set_rules("deptime","depar time",'required');
		$this->form_validation->set_rules("dest","destination",'required');
	$this->form_validation->set_rules("desdate","destdate",'required');
		$this->form_validation->set_rules("destime","desttime",'required');
		$this->form_validation->set_rules("btseat","btseat",'required');
		$this->form_validation->set_rules("ftseat","ftseat",'required');
		$this->form_validation->set_rules("etseat","etseat",'required');
		$this->form_validation->set_rules("baseat","baseat",'required');
		$this->form_validation->set_rules("faseat","faseat",'required');
		$this->form_validation->set_rules("easeat","easeat",'required');
		$this->form_validation->set_rules("cost","cost",'required');
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');
		$encpass=$this->mainmodel->encpswd($pass);
		$reg=array("airline" => $this->input->post("flname"),
					"fl_number"=>$this->input->post("flno"),
					"departure"=>$this->input->post("depar"),
					"dep_date"=>$this->input->post("depdate"),
					"dep_time"=>$this->input->post("deptime"),
					"destination"=>$this->input->post("dest"),
					"dest_date"=>$this->input->post("desdate"),
					"dest_time"=>$this->input->post("destime"),
			"btseats"=>$this->input->post("btseat"),
			"ftseats"=>$this->input->post("ftseat"),
			"etseats"=>$this->input->post("etseat"),
			"baseat"=>$this->input->post("baseat"),
			"faseat"=>$this->input->post("faseat"),
			"easeat"=>$this->input->post("easeat"),
			"	cost"=>$this->input->post("cost"));
		$this->mainmodel->regis($reg);
		redirect(base_url().'first/flight');
		}
	}
	
	public function flview()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->flightview();
		$this->load->view('fview',$data);
	}
	public function search()
	{
		
		$this->load->view('search');
	}
	public function flightclass()
	{

		$this->load->view('flightclass');
	}
	public function seat()
	{

		$this->load->view('seat');
	}
	public function airview()
	{
		$this->load->model('mainmodel');
		$data['n']=$this->mainmodel->aview();
		$this->load->view('airportview',$data);
	}
 public function searchf()
    {
        $this->load->view('search');
    }
    public function searchaction()
    {
        $this->load->model('mainmodel');
        $d=date('y-m-d');
        //$this->mainmodel->deletedate($d);
        $dep=$this->input->post("dep");
        $dest=$this->input->post("dest");
        $depdate=$this->input->post("sdate");
        $data['n']=$this->mainmodel->viewflight($dep,$dest,$depdate);
        $this->load->view('fview',$data);

    }
    public function airport()
	{
		
		$this->load->view('airport');
	}
    public function airportForm()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("aname","airportname",'required');
		$this->form_validation->set_rules("abr","abbrevation",'required');
		$this->form_validation->set_rules("city","city",'required');
		$this->form_validation->set_rules("state","state",'required');
		$this->form_validation->set_rules("zip","zip",'required');
		$this->form_validation->set_rules("tzone","tzone",'required');

		
		if($this->form_validation->run())
		{
		$this->load->model('mainmodel');
		$reg=array("airportname" => $this->input->post("aname"),
					"abrv"=>$this->input->post("abr"),
					"city"=>$this->input->post("city"),
					"state"=>$this->input->post("state"),
					"zipcode"=>$this->input->post("zip"),
					"tzone"=>$this->input->post("tzone"));
		$this->mainmodel->air($reg);
		redirect(base_url().'first/airport');
		}
	}
	


}
