<?php

class Core_model extends CI_Model {

	function getTableData($table)
	{ $query = $this->db->get($table);
     return $query->result_array();
 }

 function getTableDataCond($table,$field,$val)
 { 
    $this->db->order_by("id","desc"); 
    $this->db->where($field,$val);
    $query = $this->db->get($table);
    return $query->result_array();
}

function getTableDataCondLimit($table,$cond,$limit)
{ 
    $this->db->order_by("id", "desc"); 
    $this->db->where($cond);
    $this->db->limit($limit);
    $query = $this->db->get($table);
    return $query->result_array();
}

function getTableDataLimit($table,$limit)
{ 
    $this->db->order_by("id", "desc"); 
    $this->db->limit($limit);
    $query = $this->db->get($table);
    return $query->result_array();
}

function getTableDataCondAsc($table,$field,$val)
{ 
    $this->db->order_by("id", "asc"); 
    $this->db->where($field,$val);
    $query = $this->db->get($table);
    return $query->result_array();
}

function getTableRowData($table,$rowid)
{                $this->db->order_by("id", "desc"); 
$query = $this->db->get_where($table,array('id'=>$rowid));
return $query->row_array();
}
function getTableRowDataAsc($table,$rowid)
{                $this->db->order_by("id", "asc"); 
$query = $this->db->get_where($table,array('id'=>$rowid));
return $query->row_array();
}

public function insertData($table,$data)
{
  return $this->db->insert($table, $data);

}

public function updateTableData($table,$field,$val,$data) 
{
    $this->db->where($field,$val);
    return $this->db->update($table, $data);

}
public function updateRowData($table,$rowid,$data) 
{
   $this->db->where('id',$rowid);
   return $this->db->update($table, $data);

}
function chkTableRowData($table,$field,$val)
{ 
  $this->db->where($field,$val);
  $query = $this->db->get($table);
  return $query->num_rows();
}
function getTableRowDataCond($table,$field,$val)
{ 
  $this->db->where($field,$val);
  $query = $this->db->get($table);
  return $query->row_array();
}
function getTableDataCondArrayLimit($table,$cond,$limit,$start)
{ 
  $this->db->where($cond);
  $this->db->order_by("id","desc");
  $this->db->limit($limit, $start);
  $query = $this->db->get($table);
  return $query->result_array();
}
function getTableDataOrCond($table,$cond)
{ 
  $this->db->where($cond);
  $this->db->order_by("id","desc");
  $query = $this->db->get($table);
  return $query->result_array();
}
function countTableRows($table)
{ 
  $query = $this->db->get($table);
  return $query->num_rows();
}

function chkTableDataCond($table,$cond)
{ 
	$this->db->where($cond);
  $query = $this->db->get($table);
  return $query->num_rows();
}
function chkTableDataCondOR($table,$cond1,$cond2)
{ 
	$this->db->where($cond1);
	$this->db->or_where($cond2);
  $query = $this->db->get($table);
  return $query->num_rows();
}
function countTableRowsCond($table,$field,$val)
{ 
 $this->db->where($field,$val);
 $query = $this->db->get($table);
 return $query->num_rows();
}
function deleteTableDataCond($table,$field,$val)
{ 
    $this->db->where($field,$val);
    return $this->db->delete($table);
}
public function deleteById($table,$id)
{
   return  $this->db->delete($table, array('id' => $id));        
}


public function delete_row($table,$id)
{

   return  $this->db->delete($table, array('id' => $id));        
}
function getLastEntry($table,$field,$val)
{
  $this->db->where($field,$val);
  $this->db->order_by("id", "desc"); 
  $this->db->limit(1);
  $query = $this->db->get($table);
  return $query->row_array();
}



function check_exists($table,$col,$val)
{
    $this->db->where($col,$val);
    $query = $this->db->get($table);
    if ($query->num_rows() > 0){
        return true;
    }
    else{
        return false;
    }
}
public function currency_symbol(){
    $session_data=$this->session->all_userdata();
    $org_id=$session_data['session_userid'];
    $this->db->where('org_id',$org_id);
    $query = $this->db->get('business_settings');
    $row_data=$query->row_array();
    if($row_data['currency_symbol']==1){
        $symbol = '&#8377;';
    }
    else{
        $symbol = '<i class="fa fa-usd"></i>';
    }
    return $symbol;
}
public function currency_symbol_pdf(){
    $session_data=$this->session->all_userdata();
    $org_id=$session_data['session_userid'];
    $this->db->where('org_id',$org_id);
    $query = $this->db->get('business_settings');
    $row_data=$query->row_array();
    if($row_data['currency_symbol']==1){
        $symbol = 'Rs.';
    }
    else{
        $symbol = '$';
    }
    return $symbol;
}
public function decimal_to_words($x)
{
	$x = str_replace(',','',$x);
	$pos = strpos((string)$x, ".");
	if ($pos !== false) { $decimalpart= substr($x, $pos+1, 2); $x = substr($x,0,$pos); }
	$tmp_str_rtn = $this->number_to_words($x);
	if(!empty($decimalpart) && $decimalpart!=0)
		$tmp_str_rtn .= ' and '  . $this->number_to_words($decimalpart) . ' Paise Only';
	return   $tmp_str_rtn.' Only';
} 
public function number_to_words($x){
    $nwords = array(  "", "One", "Two", "Three", "Four", "Five", "Six", 
      "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", 
      "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", 
      "Nineteen", "Twenty", 30 => "Thirty", 40 => "Fourty",
      50 => "Fifty", 60 => "Sixty", 70 => "Seventy", 80 => "Eigthy",
      90 => "Ninety" );

    if(!is_numeric($x))
    {
       $w = '#';
   }else if(fmod($x, 1) != 0)
   {
       $w = '#';
   }else{
       if($x < 0)
       {
           $w = 'minus ';
           $x = -$x;
       }else{
           $w = '';
       }
       if($x < 21)
       {
           $w .= $nwords[$x];
       }else if($x < 100)
       {
           $w .= $nwords[10 * floor($x/10)];
           $r = fmod($x, 10);
           if($r > 0)
           {
               $w .= ' '. $nwords[$r];
           }
       } else if($x < 1000)
       {

           $w .= $nwords[floor($x/100)] .' Hundred';
           $r = fmod($x, 100);
           if($r > 0)
           {
               $w .= ' '. $this->number_to_words($r);
           }
       } else if($x < 100000)
       {
          $w .= $this->number_to_words(floor($x/1000)) .' Thousand';
          $r = fmod($x, 1000);
          if($r > 0)
          {
           $w .= ' ';
           if($r < 100)
           {
               $w .= ' ';
           }
           $w .= $this->number_to_words($r);
       }
   } else {
       $w .= $this->number_to_words(floor($x/100000)) .' Lacs';
       $r = fmod($x, 100000);
       if($r > 0)
       {
           $w .= ' ';
           if($r < 100)
           {
               $word .= ' ';
           }
           $w .= $this->number_to_words($r);
       }
   }
}
return $w;
} 
function getSumColCond($table,$col,$field,$val)
{ 
  $this->db->select_sum($col);
  $this->db->where($field,$val);
  $query = $this->db->get($table);
  return $query->row_array();
}
function cleanName($name)
{ 
  $name=str_replace("/", "-", $name);
  $name=str_replace(" ", "-", $name);
  $name=str_replace(",", "", $name);
  $name=str_replace("'", "", $name);
  $name=str_replace("|", "", $name);
  return $name;
}

function encryptor($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    //pls set your unique hashing key
    $secret_key = 'dstSolutions';
    $secret_iv = 'dst@123';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    //do the encyption given text/string/number
    if( $action == 'encrypt' ) {
        //$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        //decrypt the given text/string/number
        //$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

public function record_count($table,$cond) {
    $this->db->where($cond);
    $this->db->from($table);
    return $this->db->count_all_results();
}

public function filter_phone($num){
	if(strlen($num)==10){
       return $num;
   }
   elseif(strlen($num)==11){
       return substr($num,-10);
   }
   elseif(strlen($num)==12 && (substr($num,0,2)=='91')){
       return substr($num,-10);
   }
   elseif(strlen($num)==13 && (substr($num,0,3)=='+91')){
       return substr($num,-10);
   }
   elseif(strlen($num)==14 && (substr($num,0,4)=='+91-')){
       return substr($num,-10);
   }
   else{
       return FALSE;
   }


}
public function sendEmail($email,$subject,$message){
	
 $config['protocol'] = 'sendmail';
 $config['mailpath'] = '/usr/sbin/sendmail';
 $config['charset'] = 'iso-8859-1';
 $config['mailtype']='html';
 $config['wordwrap'] = TRUE;
 $this->email->initialize($config);
 $this->email->from('admin@shivalikhomes2.co.in', 'Realty 360 Degree');
 $this->email->to($email);

 $this->email->subject($subject);
 $this->email->message($message);

 if($this->email->send()){
    return TRUE;
}
else{
    return FALSE;
}
}

public function sendSMS($phone,$message){

    $url = "http://cloud.smsindiahub.in/vendorsms/pushsms.aspx";
        $postfields = array ("user" => "REALTYCRM", // do not need to change
            "password"=>"realty@143",
            "sid"=>"REALTY",
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

    public function sendSMSPromo($phone,$message){

        $url = "http://cloud.smsindiahub.in/vendorsms/pushsms.aspx";
        $postfields = array ("user" => "REALTY", // do not need to change
            "password"=>"Realty@123",
            "sid"=>"WEBSMS",
        "msisdn" => "$phone", // do not need to change
        "msg" => "$message", // you ID in www.2-waysms.com accout
        "fl"=>0,


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

    public function findata($table, $email, $pass, $type){
        $sql="select id, name, email, verified from  $table where email='$email' AND password='$pass' LIMIT 1";
        $query=$this->db->query($sql);
        $var = $query->row_array();
          // print_r($var);
        if($var['verified'] === '0'){
          
            return FALSE;
        }else{
          $var['type'] = $type;
          return $var;

      }
  }

     public function changeStatus($table, $email ){
          $this->db->where('email',$email);
          return $this->db->update($table, array('status'=>1,'verified'=>1));
        

      }

}