<?php
class Testimonials_model extends CI_Model {

	function getTableData($table)
	{ 
	$query = $this->db->get($table);
	  return $query->result_array();
	 }
	 function getTableDataOrderBy($table,$order)
	{
	 $this->db->order_by($order,"asc");
	$query = $this->db->get($table);
	  return $query->result_array();
	 }
	 
	 function getTableDataCond($table,$field,$val)
	{ 
	 $this->db->where($field,$val);
		$query = $this->db->get($table);
		return $query->result_array();
	}
	
	function getTableRowData($table,$rowid)
	{ 
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
	function chkTableRowDataCond($table,$cond)
	{ 
	 $this->db->where($cond);
		$query = $this->db->get($table);
		return $query->num_rows();
	}
	public function delete_tab_row($tab,$id)
    {
       
 return  $this->db->delete($tab, array('id' => $id));        
    }
	function getTableLastRow($table)
	{ 
	  $this->db->order_by('id','DESC');
	  	  $this->db->limit('1');
		$query = $this->db->get($table);
		return $query->row_array();
	}
	 function getSearchResult($table,$data,$exp)
	{ 
          $this->db->like($data); 
		  $this->db->where('experience >=', $exp);
		$query = $this->db->get($table);
		return $query->result_array();
	}
	
}