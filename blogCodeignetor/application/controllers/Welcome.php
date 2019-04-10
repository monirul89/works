<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
                $data = array();
                $data['maincontent'] = $this->load->view('home_content', '', TRUE);  
                $data['title']='Home';
                $data['slider']=1;
                $data['menu']=1;
                $data['sponsors']=1;
		$this->load->view('master', $data);
	}
        
        public function support(){
            $data=array();
            $data['maincontent'] = $this->load->view('support_content', '', TRUE);
            $data['title']='Support';
            $data['slider']='';
            $data['menu']=1;
            $data['sponsors']='';
            $this->load->view('master', $data);
        }
        
        public function about(){
            $data = array();
            $data['maincontent']= $this->load->view('about_content', '', TRUE);
            $data['title']='About Us';
            $data['slider']='';
            $data['menu']=1;
            $data['sponsors']='';
            $this->load->view('master', $data);
        }
        
        public function blog(){
            $data=array();
            $data['maincontent']= $this->load->view('blog_content', '', TRUE);
            $data['title']='Blog';
            $data['slider']='';
            $data['menu']=1;
            $data['sponsors']='';
            $this->load->view('master', $data);
        }
        
        public function contact(){
            $data=array();
            $data['maincontent']= $this->load->view('contact_content', '', TRUE);
            $data['title']='Contact Us';
            $data['slider']='';
            $data['menu']=1;
            $data['sponsors']='';
            $this->load->view('master', $data);
        }
}
