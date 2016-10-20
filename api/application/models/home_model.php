<?php
class home_model extends CI_Model{
    public function __construct() {
        $this->load->database();  
    }
    
    public function get_SourceCity(){
     
     $sql="select * from  city where id=5 OR id=13";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
 
 public function getTopPackageByType($type){
     
     $sql="select * from  holiday_package where type=$type AND active=1 AND current=1 LIMIT 4";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
 public function getPackageByCat($cat){
     
     $sql="select * from  holiday_package where category=$cat AND  active=1";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
  public function getPackageByType($type){
     
     $sql="select * from  holiday_package where type=$type AND active=1";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
  public function getPackageByTypeLimit($type){
     
     $sql="select * from  holiday_package where type=$type AND active=1 limit 4";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
  public function getPromos($type){
     
     $sql="select * from  promos where type=$type AND active=1";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
  public function getGallery(){
     
     $sql="select * from  gallery where status=1";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
 public function getVisa(){
     
     $sql="select * from  visa";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
 public function getVisaById($id){
     
     $sql="select * from  visa where id=$id";
      $query=$this->db->query($sql);
     return $query->row_array();
     
 }
 public function getPage($id){
     
     $sql="select * from  cms where id=$id";
      $query=$this->db->query($sql);
     return $query->row_array();
     
 }
 public function getAdmin(){
     $this->db->where('id',1);
	 $query = $this->db->get('admin');
     
     return $query->row_array();
     
 }
 public function getPackageDetails($id){
     
     $sql="select * from  holiday_package where id=$id AND active=1";
      $query=$this->db->query($sql);
     return $query->row_array();
     
 }
 public function getPackageGallery($id){
     
     $sql="select * from  gallery where tour_id=$id AND status=1";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
 public function get_SourceCityById($id){
     
     $sql="select * from  city where id=$id";
      $query=$this->db->query($sql);
     return $query->row_array();
     
 }
 
 public function get_DestinationCity(){
     
     $sql="select * from  city ORDER BY city_name";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
 
  public function get_DestinationCitById($id){
     
     $sql="select * from  city  where id!='$id' ORDER BY city_name";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
 public function get_busRoutes(){
     
     $sql="select * from  routes";
      $query=$this->db->query($sql);
     return $query->result_array();
     
 }
 public function get_busRoutesfromto($from,$to){
     
     $sql="select * from  routes where from_city='$from' and to_city ='$to'";
     $query=$this->db->query($sql);
      return $query->row_array();
 }
 public function get_busRoutesId($from,$to){
     
     $sql="select * from  routes_details where from_city='$from' and to_city ='$to'";
     $query=$this->db->query($sql);
       return $query->result_array();
      
     
 }
 public function get_busRoutesById($id){
     
     $sql="select * from  routes_details where id='$id'";
      $query=$this->db->query($sql);
     return $query->row_array();
     
 }
  public function get_businfoById($id){
     
     $sql="select * from  bus_info where id='$id'";
      $query=$this->db->query($sql);
      return $query->row_array();
     
 }
 
 public function get_busCatgById($id){
     
     $sql="select * from  bus_catg where id='$id'";
      $query=$this->db->query($sql);
      return $query->row_array();
     
 }
 
 
 public function get_busTypeById($id){
     
     $sql="select * from  bus_type where id='$id'";
      $query=$this->db->query($sql);
      return $query->row_array();
     
 }
  public function get_busSeatsByBuscatgId($id){
     
     $sql="select * from  bus_seats where `bus_catg_id`='$id'";
      $query=$this->db->query($sql);
      return $query->row_array();
     
 }
 public function get_busSeatsById($id){
     
     $sql="select * from  bus_seats where `id`='$id'";
      $query=$this->db->query($sql);
      return $query->row_array();
     
 }
 public function get_busFareByBusId($B_id){
     
     $sql="select * from  bus_fare where  `bus_catg_id`='$B_id'";
      $query=$this->db->query($sql);
      return $query->result_array();
     
 }
 public function get_busFare($R_id,$type,$catg_id,$busid){
     
     $sql="select * from  bus_fare where `subroute`='$R_id' and `bus_type_id`='$type' and  `bus_catg_id`='$catg_id' and `bus_id`='$busid'";
      $query=$this->db->query($sql);
      return $query->row_array();
     
 }
 
 public function get_busFareByouteId($R_id){
     
     $sql="select * from  bus_fare where `route_id`='$R_id'";
      $query=$this->db->query($sql);
      return $query->result_array();
     
 }
 public function SearchBusSchedule($id){
     
     $sql="select * from  schedules where `route_id`='$id'";
      $query=$this->db->query($sql);
     $data= $query->result_array();
     return $data;
     
     
 }
 
 public function Get_Schedule($rid,$bid){
     
     $sql="select * from  schedules where `route_id`='$rid' and `bus_id`='$bid'";
      $query=$this->db->query($sql);
      return $query->row_array();
     
     
     
 }
 public function SearchBusScheduleByBusId($id){
     
     $sql="select  bus_id from  schedules where `route_id`='$id'";
      $query=$this->db->query($sql);
      $bus['bus_id']= $query->result_array();
    return $bus['bus_id'];
     
     
 }
//  public function get_city_id($city_name)
//        {
//            $sql="select * from city where city='$city_name'";
//            $query=$this->db->query($sql);
//            $cid= $query->row_array();
//            return $cid['id'];
//        } 
 
 public function Insert_bus_booking($data){

      
     //$file =profile.jpg;
        return $this->db->insert('bus_booking', $data);
    }
    
     public function Insert_bus_booking_details($data){

      

     //$file =profile.jpg;
        return $this->db->insert('bus_booking_details', $data);
    
    }
    public function gettoatalSeats($id){
        
        
        $sql="select * from  bus_booking_details where bus_booking_id=$id";
      $query=$this->db->query($sql);
     return $query->num_rows();
        
    }
    
    public function gettoatalFare($id){
        
        
        $sql="select sum(price) from  bus_booking_details where bus_booking_id=$id";
      $query=$this->db->query($sql);
     return $query->row_array();
        
    }
public function getBus_bookingId(){
     
     $sql="select * from  bus_booking order by id DESC limit 1";
      $query=$this->db->query($sql);
     return $query->result_array();
     
     
 }
 
 public function getBusbookingById($id){
     
     $sql="select * from  bus_booking where id='$id'";
      $query=$this->db->query($sql);
     return $query->row_array();
     
     
 }
 public function getBus_bookingByTicketNo($tkt_no){
     
     $sql="select * from  bus_booking where ticket_no='$tkt_no'";
      $query=$this->db->query($sql);
     return $query->row_array();
     
     
 }
 public function getvalid_TicketNo($tkt_no){
     
     $sql="select * from  bus_booking where ticket_no='$tkt_no' AND status='1'";
      $query=$this->db->query($sql);
    $data=$query->num_rows();
   if($data==0){
      return true;
      
  }
  else{
    return false;  
      
  }
   
     
     
 }
 public function getvalid_TicketNoEmailId($tkt_no,$email){
     
     $sql="select * from  bus_booking where `ticket_no`='$tkt_no' and `email_id`='$email'";
      $query=$this->db->query($sql);
    $data=$query->num_rows();
   if($data==0){
      return true;
      
  }
  else{
    return false;  
      
  }
   
     
     
 }
 public function getBus_bookingByTktEmail($tkt_no,$email){
     
     $sql="select * from  bus_booking where `ticket_no`='$tkt_no' and `email_id`='$email'";
      $query=$this->db->query($sql);
     return $query->result_array();
     
     
 }
 
 public function getBus_bookingDetailsById($id){
     
     $sql="select * from  bus_booking where id=$id";
      $query=$this->db->query($sql);
     return $query->result_array();
     
     
 }
 
 public function getBus_bookingDetails($id){
     
     $sql="select * from  bus_booking_details where bus_booking_id=$id";
      $query=$this->db->query($sql);
     return $query->result_array();
     
     
 }
 public function ad_txn($Order_Id,$Amount,$Merchant_Param)
 {
     
      $data = array(
            'order_id'=>$Order_Id,
            'amount'=>$Amount,
            'params'=>$Merchant_Param,
             );
        
        return $this->db->insert('ad_txn', $data);
 }


 public function update_bus_booking($id,$date){
     
    $data = array(
                'status'=>'1',
				'booking_date'=>$date,
         
                  );
        
       return $this->db->update('bus_booking', $data,array('ticket_no' => $id));
     
     
 }
 public function gettotalFare($id){
     
     $sql="select sum(price) from  bus_booking_details where bus_booking_id=$id";
      $query=$this->db->query($sql);
     return $query->result_array();
     
     
 }
 public function gettotalBookedSeats($date,$route_id,$bus_id){
     
     $sql="select sum(total_booked_seats) from  bus_booking where date='$date' AND route_id='$route_id' AND bus_id='$bus_id' AND status=1";
      $query=$this->db->query($sql);
     return $query->row_array();    
 }
 public function sendSMS($phone,$message){
 if ($message == "") { return false; die; } else { }
		if ($phone == "") { return false; die; } else { }
  $url = "http://cloud.smsindiahub.in/vendorsms/pushsms.aspx";
        $postfields = array ("user" => "sanjaydolp", // do not need to change
                    "password"=>"DSTDolp@4321",
                    "sid"=>"KKTBUS",
        "msisdn" => "$phone", // do not need to change
        "msg" => "$message", // you ID in www.2-waysms.com accout
		"fl"=>0,
		"gwid"=>2
       
        );      
  if (!$curld = curl_init()) {
        echo "Could not initialize cURL session.";
      
        }
        curl_setopt($curld, CURLOPT_POST, true);
        curl_setopt($curld, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($curld, CURLOPT_URL, $url);
        curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($curld);
        curl_close($curld);
        
              
        return $output;
        }
		
 }
?>