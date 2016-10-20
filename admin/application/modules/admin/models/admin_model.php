<?php

class Admin_model extends CI_Model {

	function getTableData($table)
	{ $query = $this->db->get($table);
	  return $query->result_array();
	 }
	 
	 function getTableDataCond($table,$cond)
	{ 
		$query = $this->db->get_where($table,$cond);
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
	function getTableRowDataCond($table,$field,$val)
	{ 
	 $this->db->where($field,$val);
		$query = $this->db->get($table);
		return $query->row_array();
	}
	function countTableData($table)
	{ 
		$query = $this->db->get($table);
		return $query->num_rows();
	}
	function countTableDataCond($table,$field,$val)
	{ 
	 $this->db->where($field,$val);
		$query = $this->db->get($table);
		return $query->num_rows();
	}
	
}