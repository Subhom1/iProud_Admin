<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    function __construct() {
            parent::__construct();
            $this->load->library('pagination');
            $this->load->model('userModel');
             $this->load->helper('url');
             $this->load->library('session');
             
        }

//Pages::-->

    public function dashboard($page ='dashboard')
	{
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }
        // if(($this->session->userdata('email'))==false){
        //             $this->login();
        //             }
       if($this->session->userdata('email')){

       
        $data['dstats'] = $this->userModel->fetchAllDetails();
             
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('includes/footer');}
        else {$this->login();}   
    }
    
    public function coach($userid = 0,$page ='coach')
	{
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }
        if($this->uri->segment(3)==NULL){
            $offset=0;
        }else{
            $offset=$this->uri->segment(3);
        }
        //$this->userModel->getCoachCount();
        if($this->session->userdata('email')){
        
        $config = [
            'per_page'=>2,
            'base_url'=>base_url().'index.php/pages/coach',
            'total_rows' => $this->userModel->getCoachCount()
        ];
        $this->pagination->initialize($config);
        $data['users'] = $this->userModel->fetchCoach(2,$offset);

       
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('includes/footer');}else{$this->login();}   
    }
    
    public function trainee($userid = 0,$page ='trainee')
	{
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) 
          show_404();
        if($this->session->userdata('email')){

        if($this->uri->segment(3)==NULL){
            $offset=0;
        }else{
            $offset=$this->uri->segment(3);
        }
            $config = [
            'per_page'=>5,
            'base_url'=>base_url().'index.php/pages/trainee',
            'total_rows' => $this->userModel->getTraineeCount(),        
            
        ];
        $this->pagination->initialize($config);

        $coachid=$userid;
        $data['users'] = $this->userModel->fetchTrainee(5,$offset);
        $data['coaches'] = $this->userModel->fetchCoachforTrainee();
        $data['coachtrainee'] = $this->userModel->fetchcoachTrainees($coachid);
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('includes/footer');}else{$this->login();}   
    }

    public function coachtrainee($coachid = 0,$page ='coachtrainee')
	{
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) show_404();
        if($this->session->userdata('email')){
        
        
        $data['coaches'] = $this->userModel->fetchCoachforTrainee();
        $data['coachtrainee'] = $this->userModel->fetchcoachTrainees($coachid);
        
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('includes/footer');}else{$this->login();}   
    }


    public function searchtrainee($page='searchtrainee')
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) show_404();

        if($this->session->userdata('email')){
        $key = $this->input->get('key');
        

        $data['coaches'] = $this->userModel->fetchCoachforTrainee();
        $data['result']=$this->userModel->searchTrainee($key);

        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('includes/footer');}else{$this->login();}

    }

    public function searchcoach($key='', $page='searchcoach')
    {
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) show_404();
        if($this->session->userdata('email')){
        $key = $this->input->get('key');
        $data['result']=$this->userModel->searchCoach($key);

        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('includes/footer');}else{$this->login();}
        
    }
    public function inviteuser()
    {
        //$userid = $this->input->get('userid');
        $email = $this->input->post('email');
        $fullname = $this->input->post('fullname');
        $this->userModel->invite($email,$fullname);
        redirect(base_url().'index.php/pages/invite');
    }


    public function profile($userid = 0,$page ='profile')
	{
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))show_404();
        if($this->session->userdata('email')){
        //$userid = $this->input->get('userid');
        $data['users'] = $this->userModel->fetchTraineeDetail($userid);
        $data1['usersact'] = $this->userModel->fetchActivityDetail($userid);

        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('pages/traineecard',$data);
        $this->load->view('pages/activitycard',$data1);
        
        //$this->load->view('pages/profile', $actidata);
        $this->load->view('includes/footer');}else{$this->login();}
    }

    
    public function editprofile($userid = 0,$page ='editprofile')
	{
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))show_404();
        if($this->session->userdata('email')){
        //$userid = $this->input->get('userid');
        $data['users'] = $this->userModel->fetchTraineeDetail($userid);

        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('includes/footer');}else{$this->login();}   
    }

    public function coachedit($userid=0,$page ='coachedit')
	{
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) show_404();
        if($this->session->userdata('email')){
        $coachid=$userid;
        //$userid = $this->input->get('userid');
        $data['coaches'] = $this->userModel->fetchCoachDetails($coachid);

        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('includes/footer');}else{$this->login();} 
    }

    public function coachupdate($userid)
    {
        $coachid=$userid;
        $fullname = $this->input->post('fullname');
        $bio = $this->input->post('bio');
        //$coachid = $this->input->get('coachid');
        $this->userModel->updatecoach($fullname,$coachid,$bio);
        redirect(base_url().'index.php/pages/coach');
    }

    
    public function login()
	{
        
        $this->load->view('pages/login');
        
        
    }
    
    public function invite($page ='invite')
	{
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))show_404();
        if($this->session->userdata('email')){
        //$this->userModel->inviteTrainee();
        $data['title'] = ucfirst($page);
    
        
        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('includes/footer');}else{$this->login();}         
    }

    
    
    public function import($page ='import')
	{
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))show_404();
        if($this->session->userdata('email')){
        $data['title'] = ucfirst($page);

        $this->load->view('includes/header');
        $this->load->view('includes/navbar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('includes/footer');}else{$this->login();}          
    }
    
    public function  logout()
    {
        $this->session->unset_userdata('email');
        redirect(base_url().'index.php/pages/login');
    }


    //-------LOGIN VERIFY-----------//

    function login_verify()
       {
        $email=$this->input->post('email');
        $password=$this->input->post('password');

            if($email=="m@m.com" && $password=="qwerty1"){
            $this->session->set_userdata('email', 'm@m.com');
            $this->dashboard();
            }else{redirect(base_url().'index.php/pages/login?error=error');}
       }

    //-----DB ACCESS-------------//
        function sendMail()
        {
            $this->load->library('email');
            //SMTP & mail configuration
            $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'user@gmail.com',
                'smtp_pass' => 'gmail_password',
                'mailtype'  => 'html',
                'charset'   => 'utf-8'
            );
            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");

            //Email content
            $heighttmlContent = '<h1>Sending email via SMTP server</h1>';
            $heighttmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

            $userid=$this->input->post('email');
            $this->email->to($userid);
            $this->email->from('sender@example.com','iproud.com');
            $this->email->subject('Welcome to iproud,thank you.');
            $this->email->message($heighttmlContent);

            //Send email
            $this->email->send();
            if($userid='coachid'){
                redirect(base_url().'pages/coach');
            }
            else redirect(base_url().'pages/trainee');
        }

        function updateTrainee($userid)
        {
            
            $fullname=$this->input->post('fullname');
            $dob=$this->input->post('dob');
            $gender=$this->input->post('gender');
            $relationshipstatus=$this->input->post('relationshipstatus');
            $noofchildren=$this->input->post('noofchildren');
            $height=$this->input->post('height');
            $heightunit=$this->input->post('heightunit');
            $weight=$this->input->post('weight');
            $weightunit=$this->input->post('weightunit');
            $doexercise=$this->input->post('doexercise');
            $workingschedule=$this->input->post('workingschedule');
            $challengesfaceCSV=$this->input->post('challengesfaceCSV');
            $needsCSV=$this->input->post('needsCSV');
            $workingweekhours=$this->input->post('workingweekhours');
            $workingdailyhours=$this->input->post('workingdailyhours');
            $dailywalkinghours=$this->input->post('dailywalkinghours');
            $badhabitsCSV=$this->input->post('badhabitsCSV');
            $foodallergiesCSV=$this->input->post('foodallergiesCSV');
            //$button=$this->input->post('submit');
            
            $this->userModel->updateUser($fullname,$dob,$gender,$relationshipstatus,$noofchildren,
            $height,$heightunit,$weight,$weightunit,$doexercise,$workingschedule,$challengesfaceCSV,
            $needsCSV,$workingweekhours,$workingdailyhours,$dailywalkinghours,$badhabitsCSV,$foodallergiesCSV,$userid);
            redirect(base_url().'index.php/pages/profile/'.$userid);   
        }

        function traineeDelete($userid)
        {
            $this->userModel->deleteUser($userid);
            redirect(base_url().'index.php/pages/trainee');
        }

        function coachDelete($userid)
        {
            $this->userModel->deleteUser($userid);
            redirect(base_url().'index.php/pages/coach');
        }

}
?>




