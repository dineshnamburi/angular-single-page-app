<?php

class Common extends CI_Controller {
  public function __construct() {
    parent::__construct ();
    $this->load->library('email');
    $this->load->model('home_model');
    $this->load->model('core_model');
    $this->load->helper('url');
    header ( 'Access-Control-Allow-Origin: *' );
    header ( "Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method" );
    header ( "Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE" );
    $method = $_SERVER ['REQUEST_METHOD'];
    if ($method == "OPTIONS") {
      die ();
    }
  }


  public function index() {

  }

  public function getPageById(){
    $id = $_POST['id'];
    $response = $this->core_model->getTableRowData('cms', $id);
    if($response){
      $response['content'] = html_entity_decode($response['content'],ENT_QUOTES);
      $response['content2'] = html_entity_decode($response['content2'],ENT_QUOTES);
      $data = array('data'=>$response, 'status'=>200, 'message'=>'Success');
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }else{
     $data = array('data'=>'Something Went Wrong', 'status'=>200, 'message'=>'Error');
     $this->output->set_content_type('application/json')->set_output(json_encode($data));
   }
 }

 public function registerTraining(){
  $this->load->library('form_validation');
  $this->form_validation->set_rules('title', 'Title', 'required');
  $this->form_validation->set_rules('name', 'Name', 'required');    
  $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|is_unique[users.email]'); 
  $this->form_validation->set_rules('phone', 'phone', 'required');     
  if ($this->form_validation->run() === FALSE)
  {

   $data = array('data'=>'Validation Errors', 'status'=>200, 'message'=>'Error');
   $this->output->set_content_type('application/json')->set_output(json_encode($data));


 }
 else
 {
  $user_data=array(
    'title'=>$this->input->post('title'),
    'name'=>$this->input->post('name'),
    'email'=>$this->input->post('email'),
    'phone'=>$this->input->post('phone'),
    'position'=>$this->input->post('position'),
    'company'=>$this->input->post('company'),
    'address'=>$this->input->post('address'),
    'city'=>$this->input->post('city'),
    'state'=>$this->input->post('state'),
    'postal_code'=>$this->input->post('postal_code'),
    'country'=>$this->input->post('country'),
    'training'=>$this->input->post('training'),
    'status'=>0,
    );
  $this->core_model->insertData('users',$user_data);
  $insert_id = $this->db->insert_id();
  $response=array('userid'=>$insert_id);
  $data = array('data'=>$response, 'status'=>200, 'message'=>'Success');
  $this->output->set_content_type('application/json')->set_output(json_encode($data));
}
}

public function payment_success(){
  $item_number = $_GET['item_number']; 
  $txn_id = $_GET['tx'];
  $payment_gross = $_GET['amt'];
  $currency_code = $_GET['cc'];
  $payment_status = $_GET['st'];
  print_r($_REQUEST);

}
public function sendEmail(){

  $data['settings']=$this->core_model->getTableRowData('settings','1');
  $email = $this->input->post('email');
  $admin_mail = $data['settings']['email'];
  $message_data= '<p style="margin-bottom:30px;"> <strong>A user has been subscribed for News Letter with '.$email.'</strong></p>';
  $config['charset']    = 'utf-8';
  $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not
        $this->email->initialize($config);

        $this->email->from('noreply@luxbill.com');
        $this->email->to($email);
        $this->email->to($admin_mail); 
        $this->email->message($message_data);
        $this->email->subject('Luxbill Subscription');
        if($this->email->send() == true)
        {
          $data = array('data'=>'You Have been Subscribed', 'success' => 1, 'status'=>200, 'message'=>'Success');
          $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }else{
         $data = array('data'=>'Something Went Wrong', 'success' => 0, 'status'=>200, 'message'=>'Error');
         $this->output->set_content_type('application/json')->set_output(json_encode($data));

       }
     }

     public function sendEnquiry(){

      $data['settings']=$this->core_model->getTableRowData('settings','1');
      $category = $this->input->post('category');
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $msg = $this->input->post('msg');
      $admin_mail = $data['settings']['email'];

      $message_data= '<p style="margin-bottom:30px;"> <strong>A user has been enquired for Service '.$category.' with following details.<br>Name: '.$name.'<br> Email: '.$email.'<br>Message :'.$msg.'</strong></p>';
      $config['charset']    = 'utf-8';
      $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not
        $this->email->initialize($config);

        $this->email->from('noreply@luxbill.com');
        $this->email->to($admin_mail); 
        $this->email->message($message_data);
        $this->email->subject('Enquiry For Services');
        if($this->email->send() == true)
        {
          $data = array('data'=>'Your Enquiry has been sent successfully!!', 'success' => 1, 'status'=>200, 'message'=>'Success');
          $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }else{
         $data = array('data'=>'Something Went Wrong', 'success' => 0, 'status'=>200, 'message'=>'Error');
         $this->output->set_content_type('application/json')->set_output(json_encode($data));

       }
     }

     public function sendResume(){

      $data['settings']=$this->core_model->getTableRowData('settings','1');

      $res = $this->do_upload('file');
      $upload = 0;
      if($res['status']==TRUE){
        $udata=$res['upload_data'];
        $resume_path = $udata['full_path'];
        $upload = 1;

      }else{
        print_r($_FILES['file']);
        $error_message = "Not Able to upload your Resume!! Try again Later";
      }
      if($upload == 1){
        $applying_for = $this->input->post('applying_for');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $msg = $this->input->post('message');
        $admin_mail = $data['settings']['email'];
       // $admin_mail = 'sanjay.indianov@gmail.com';

        $message_data= '<p style="margin-bottom:30px;"> <strong>A user has been Applied for  '.$applying_for.' with following details.<br>Name: '.$name.'<br> Email'.$email.'<br>Message'.$msg.'</strong></p>';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not
        $this->email->initialize($config);
        $this->email->attach($resume_path);

        $this->email->from('noreply@luxbill.com');
        $this->email->to($admin_mail); 
        $this->email->message($message_data);
        $this->email->subject('Enquiry For Services');
        if($this->email->send() == true)
        {
          $data = array('data'=>'Your Application has been sent successfully!!', 'success' => 1, 'status'=>200, 'message'=>'Success');
          $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }else{
         $data = array('data'=>'Something Went Wrong', 'success' => 0, 'status'=>200, 'message'=>'Error');
         $this->output->set_content_type('application/json')->set_output(json_encode($data));

       }
     }else{
      $data = array('data'=>$error_message, 'success' => 0, 'status'=>200, 'message'=>'Error');
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

  }

  public function getTrainingData(){
   $data = $this->core_model->getTableDataLimit('training', 3);
   if($data){
    $res = array('data'=>$data, 'success' => 1, 'status'=>200, 'message'=>'Success');
    $this->output->set_content_type('application/json')->set_output(json_encode($res));
  }else{
    $res = array('data'=>'Something Went Wrong', 'success' => 0, 'status'=>200, 'message'=>'Error');
    $this->output->set_content_type('application/json')->set_output(json_encode($res));
  }
}
public function getCourseById(){
  $id = $_POST['id'];
  $response = $this->core_model->getTableRowData('training', $id);
  if($response){

   $data = array('data'=>$response, 'status'=>200, 'message'=>'Success');
   $this->output->set_content_type('application/json')->set_output(json_encode($data));
 }else{
   $data = array('data'=>'Something Went Wrong', 'status'=>200, 'message'=>'Error');
   $this->output->set_content_type('application/json')->set_output(json_encode($data));
 }
}

public function getSettings(){

  $response = $this->core_model->getTableRowData('settings', 1);
  if($response){

   $data = array('data'=>$response, 'status'=>200, 'message'=>'Success');
   $this->output->set_content_type('application/json')->set_output(json_encode($data));
 }else{
   $data = array('data'=>'Something Went Wrong', 'status'=>200, 'message'=>'Error');
   $this->output->set_content_type('application/json')->set_output(json_encode($data));
 }
}

public function getTrainingMenu(){
  $data = $this->core_model->getTableData('training');
  if($data){
    $res = array('data'=>$data, 'success' => 1, 'status'=>200, 'message'=>'Success');
    $this->output->set_content_type('application/json')->set_output(json_encode($res));
  }else{
    $res = array('data'=>'Something Went Wrong', 'success' => 0, 'status'=>200, 'message'=>'Error');
    $this->output->set_content_type('application/json')->set_output(json_encode($res));
  }
}
public function getAllClients(){
 $data = $this->core_model->getTableData('client');
 if($data){
  $res = array('data'=>$data, 'success' => 1, 'status'=>200, 'message'=>'Success');
  $this->output->set_content_type('application/json')->set_output(json_encode($res));
}else{
  $res = array('data'=>'Something Went Wrong', 'success' => 0, 'status'=>200, 'message'=>'Error');
  $this->output->set_content_type('application/json')->set_output(json_encode($res));
}
}

function do_upload($file)
{
  $config['upload_path'] = '../uploads/';
  $config['allowed_types'] = 'doc|docx|pdf';
  $config['max_size'] = '50000';
  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload($file))
  {
   $error = array('error' => $this->upload->display_errors(),'status'=>FALSE);

   return $error;
 }
 else
 {
   $data = array('upload_data' => $this->upload->data(),'status'=>TRUE);

   return $data;
 }
}

public function register(){

 $type = $this->input->post('type');
 $title = $this->input->post('title');
 $name = $this->input->post('name');
 $email = $this->input->post('email');
 $phone = $this->input->post('phone');
 $position = $this->input->post('position');
 $website = $this->input->post('website');
 $company = $this->input->post('company');
 $address = $this->input->post('address');
 $city = $this->input->post('city');
 $state = $this->input->post('state');
 $postal = $this->input->post('postal');
 $country = $this->input->post('country');
 $tax = $this->input->post('taxId');

 $password = $this->randomPassword();
 if($type == 'trainee'){
   $user_data=array(
     'title'=>$title,
     'name'=>$name,
     'email'=>$email,
     'phone'=>$phone,
     'position'=>$position,
     'company'=>$company,
     'address'=>$address,
     'city'=>$city,
     'state'=>$state,
     'postal_code'=>$postal,
     'country'=>$country,
     'verified'=>0,
     'status'=>0,
     'date' => date('Y-m-d H:i:s'),
     'modified' => date('Y-m-d H:i:s'),
     'password'=> md5($password),
     'hash'=>md5($email),
     );
   if($this->core_model->countTableRowsCond('users','email',$email)==0){
     $res=$this->core_model->insertData('users',$user_data);
     if($res){
       $this->sendEmailRegisterUser($email, $password);
       $data = array('data'=>$res, 'status'=>200, 'message'=>'Registration SuccessFull');
       $this->output->set_content_type('application/json')->set_output(json_encode($data));
     }else{
      $data = array('data'=>'Something Went Wrong', 'status'=>300, 'message'=>'Error');
      $this->output->set_content_type('application/json')->set_output(json_encode($data)); 
    }
  }
  else{
    $data = array('data'=>'An account with this email already exist.', 'status'=>300, 'message'=>'Error');
    $this->output->set_content_type('application/json')->set_output(json_encode($data)); 
  }
}elseif($type == 'partner'){
 $user_data=array(
   'name'=>$name,
   'email'=>$email,
   'phone'=>$phone,
   'company'=>$company,
   'street'=>$address,
   'website'=>$website,
   'city'=>$city,
   'state'=>$state,
   'country'=>$country,
   'tax'=>$tax,
   'verified'=>0,
   'status'=>0,
   'created' => date('Y-m-d H:i:s'),
   'modified' => date('Y-m-d H:i:s'),
   'password'=> md5($password),
   'hash'=>md5($email),
   );
 if($this->core_model->countTableRowsCond('partners','email',$email)==0){
   $res= $this->core_model->insertData('partners',$user_data);
   if($res){
    $this->sendEmailRegisterPartner($email,$password);
    $data = array('data'=>$res, 'status'=>200, 'message'=>'Registration SuccessFull');
    $this->output->set_content_type('application/json')->set_output(json_encode($data));
  }else{
    $data = array('data'=>'Something Went Wrong', 'status'=>300, 'message'=>'Error');
    $this->output->set_content_type('application/json')->set_output(json_encode($data)); 
  }
}else{
  $data = array('data'=>'An account with this email already exist.', 'status'=>300, 'message'=>'Error');
  $this->output->set_content_type('application/json')->set_output(json_encode($data)); 
}
}
}

function sendEmailRegisterPartner($email, $password){
  $hash = md5($email);
  $data['settings']=$this->core_model->getTableRowData('settings','1');
  // $email = $this->input->post('email');
  // $admin_mail = $data['settings']['email'];
  $message_data= 'Hello Partner, <p style="margin-bottom:30px;"> <strong>Thank you for registering to Luxbill as Partner, Please Click on the link to verify your account <br /> <a href="https://www.luxbill.com/api/index.php/common/verifyPartner/'.$hash.'">Verify</a><br /> Once you have verified you may use these details to login:<br> <b>Email: </b>'.$email.'<br><b>Password: </b> '.$password.'</strong></p>';
  $config['charset']    = 'utf-8';
  $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not
        $this->email->initialize($config);

        $this->email->from('noreply@luxbill.com');
        $this->email->to($email);
        // $this->email->to($admin_mail); 
        $this->email->message($message_data);
        $this->email->subject('Luxbill Email Verification');
        if($this->email->send() == true)
        {
          $data = array('data'=>'You Have been Verified', 'success' => 1, 'status'=>200, 'message'=>'Success');
          $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }else{
         $data = array('data'=>'Something Went Wrong', 'success' => 0, 'status'=>200, 'message'=>'Error');
         $this->output->set_content_type('application/json')->set_output(json_encode($data));

       }
     }

     function sendEmailRegisterUser($email, $password){
      $hash = md5($email);
      $data['settings']=$this->core_model->getTableRowData('settings','1');

      $message_data= 'Hello User, <p style="margin-bottom:30px;"> <strong>Thank you for registering to Luxbill as Trainee, Please Click on the link to verify your account <br /> <a href="https://www.luxbill.com/api/index.php/common/verifyUser/'.$hash.'">Verify</a><br /> Once you have verified you may use these details to login:<br> <b>Email: </b>'.$email.'<br><b>Password: </b> '.$password.'</strong></p>';
      $config['charset']    = 'utf-8';
      $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not
        $this->email->initialize($config);

        $this->email->from('noreply@luxbill.com');
        $this->email->to($email);
        // $this->email->to($admin_mail); 
        $this->email->message($message_data);
        $this->email->subject('Luxbill Email Verification');
        if($this->email->send() == true)
        {
          $data = array('data'=>'You Have been Verified', 'success' => 1, 'status'=>200, 'message'=>'Success');
          $this->output->set_content_type('application/json')->set_output(json_encode($data));
        }else{
         $data = array('data'=>'Something Went Wrong', 'success' => 0, 'status'=>200, 'message'=>'Error');
         $this->output->set_content_type('application/json')->set_output(json_encode($data));

       }
     }



     function randomPassword() {
       $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
     $pass = array(); //remember to declare $pass as an array
     $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
     for ($i = 0; $i < 8; $i++) {
       $n = rand(0, $alphaLength);
       $pass[] = $alphabet[$n];
     }
     return implode($pass); //turn the array into a string
   }

   public function login(){
     $email = $this->input->post('email');
     $password = md5($this->input->post('password'));
     $type = $this->input->post('type');
     if($this->input->post('type') == 'partner'){
      $res= $this->core_model->findata('partners',$email, $password, $type);

      if($res){
        $data = array('data'=>$res, 'status'=>200, 'message'=>'Login SuccessFull');
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
      }else{
        $data = array('message'=>'Your Email is not verified yet', 'status'=>300);
        $this->output->set_content_type('application/json')->set_output(json_encode($data)); 
      }
    }elseif ($this->input->post('type') == 'trainee') {
     $res= $this->core_model->findata('users',$email, $password, $type);
       // print_r($res);
     if($res){
      $data = array('data'=>$res, 'status'=>200, 'message'=>'Login SuccessFull');
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }else{
      $data = array('message'=>'Your Email is not verified yet', 'status'=>300);
      $this->output->set_content_type('application/json')->set_output(json_encode($data)); 
    }
  }
}

public function verifyPartner(){
  $hash = $this->uri->segment(3);
  // print_r($hash);
  $res= $this->core_model->getTableRowDataCond('partners','hash',$hash);

  if (count($res) > 0) {
   $email = $res['email'];
   $res2 = $this->core_model->changeStatus('partners',$email);

   if($res2){
    redirect('https://www.luxbill.com/');
  }
}else{
  echo 'Invalid or Expired Link!! Click <a href="https://www.luxbill.com/">here</a> to go back to Luxbill.com';
}
}

public function verifyUser(){
  $hash = $this->uri->segment(3);

  $res= $this->core_model->getTableRowDataCond('users','hash',$hash);
  if (count($res) > 0) {
    $email = $res['email'];
    $res2 = $this->core_model->changeStatus('users',$email);
    if($res2){

      redirect('https://www.luxbill.com/');
    }
  }
  else{
    echo 'Invalid or Expired Link!! Click <a href="https://www.luxbill.com/">here</a> to go back to Luxbill.com';
  }
}



public function getProfile(){
  $id = $_POST['id'];
  $type = $_POST['type'];
  if($type == 'trainee'){
    $res = $this->core_model->getTableRowData('users', $id);
  }else{
    $res = $this->core_model->getTableRowData('partners', $id);
  }
  if($res){
    $data = array('data'=>$res, 'status'=>200, 'message'=>'success');
    $this->output->set_content_type('application/json')->set_output(json_encode($data));
  }else{
   $data = array('data'=> '', 'status'=>300, 'message'=>'Something Bad Happened, try again later');
   $this->output->set_content_type('application/json')->set_output(json_encode($data));
 }
}

public function updateUser(){

  $id = $this->input->post('id');

  $type = $this->input->post('type');
  $title = $this->input->post('title');
  $name = $this->input->post('name');
  $email = $this->input->post('email');
  $phone = $this->input->post('phone');
  $position = $this->input->post('position');
  $website = $this->input->post('website');
  $company = $this->input->post('company');
  $address = $this->input->post('address');
  $city = $this->input->post('city');
  $state = $this->input->post('state');
  $postal = $this->input->post('postal_code');
  $country = $this->input->post('country');
  $tax = $this->input->post('tax');
  $street = $this->input->post('street');



  if($type == 'trainee'){
   $user_data=array(
     'title'=>$title,
     'name'=>$name,
     'email'=>$email,
     'phone'=>$phone,
     'position'=>$position,
     'company'=>$company,
     'address'=>$address,
     'city'=>$city,
     'state'=>$state,
     'postal_code'=>$postal,
     'country'=>$country,
     'modified' => date('Y-m-d H:i:s'),
     );
   $res=$this->core_model->updateRowData('users',$id,$user_data);
   if($res){
    $data = array('data'=> '', 'status'=>200, 'message'=>'Profile Updated SuccessFull');
    $this->output->set_content_type('application/json')->set_output(json_encode($data));
  }else{
    $data = array('data'=>'Something Went Wrong', 'status'=>300, 'message'=>'Error');
    $this->output->set_content_type('application/json')->set_output(json_encode($data)); 
  }

}else if($type == 'partner'){
  $user_data=array(
   'name'=>$name,
   'email'=>$email,
   'phone'=>$phone,
   'company'=>$company,
   'street'=>$street,
   'website'=>$website,
   'city'=>$city,
   'state'=>$state,
   'country'=>$country,
   'tax'=>$tax,
   'modified' => date('Y-m-d H:i:s'),
   );

  $res=$this->core_model->updateRowData('partners',$id,$user_data);
  if($res){
    $data = array('data'=> $type, 'status'=>200, 'message'=>'Profile Updated partner SuccessFull');
    $this->output->set_content_type('application/json')->set_output(json_encode($data));
  }else{
    $data = array('data'=>'Something Went Wrong', 'status'=>300, 'message'=>'Error');
    $this->output->set_content_type('application/json')->set_output(json_encode($data)); 
  }
}else{
   $data = array('data'=> $type, 'status'=>200, 'message'=>'Profile Updated partner SuccessFull');
    $this->output->set_content_type('application/json')->set_output(json_encode($data));
}
}


}