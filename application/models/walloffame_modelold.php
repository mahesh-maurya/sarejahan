<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class Walloffame_model extends CI_Model
{
    public function create($name,$deed,$status)
    {
        $data=array(
            "deed" => $deed,
            "name" => $name,
            "status" => $status
        );
        $query=$this->db->insert( "walloffame", $data );
        $id=$this->db->insert_id();
        if(!$query)
            return  0;
        else
            return  $id;
    }
    public function beforeedit($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("walloffame")->row();
        return $query;
    }
    function getsinglewalloffame($id)
    {
        $this->db->where("id",$id);
        $query=$this->db->get("walloffame")->row();
        return $query;
    }
    public function edit($id,$name,$deed,$status)
    {
        $data=array(
            "deed" => $deed,
            "name" => $name,
            "status" => $status
        );
        $this->db->where( "id", $id );
        $query=$this->db->update( "walloffame", $data );
        return 1;
    }
    
    public function delete($id)
    {
        $query=$this->db->query("DELETE FROM `walloffame` WHERE `id`='$id'");
        return $query;
    }
    
    public function getwalloffamedropdown()
	{
		$query=$this->db->query("SELECT * FROM `walloffame`  ORDER BY `id` ASC")->result();
		$return=array(
		"" => ""
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
    
	function changewalloffamestatus($id)
	{
		$query=$this->db->query("SELECT `status` FROM `walloffame` WHERE `id`='$id'")->row();
//        print_r($query);
		$status=$query->status;
//        echo $status;
		if($status=="0")
		{
			$status="1";
		}
		else if($status=="1")
		{
			$status="0";
		}
		$data  = array(
			'status' =>$status,
		);
		$this->db->where('id',$id);
		$query=$this->db->update( 'walloffame', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
    
    public function getallwalloffame($id)
    {
        $query=$this->db->query("SELECT * FROM `walloffame` WHERE `status`=1 ORDER BY `id` DESC")->result();
        return $query;
    }
    
    
    public function getwalloffamebyid($id)
    {
        $query=$this->db->query("SELECT * FROM `walloffame` WHERE `id`='$id'")->row();
        return $query;
    }
    
    
    
	public function getwalloffamebycategory($id)
	{
		$query=$this->db->query("SELECT `martyr_martyr`.`id`, `martyr_martyr`.`walloffame`, `martyr_martyr`.`name`, `martyr_martyr`.`rank`, `martyr_martyr`.`unit`, `martyr_martyr`.`homestate`, `martyr_martyr`.`operation`, `martyr_martyr`.`dateofdeath`, `martyr_martyr`.`image`, `martyr_martyr`.`age`, `martyr_martyr`.`description`, `martyr_martyr`.`status`, `martyr_martyr`.`lights`, `martyr_martyr`.`email` ,`walloffame`.`name` AS `walloffamename`,`navigation`.`name` AS `navigationname`
        FROM `martyr_martyr` 
        LEFT OUTER JOIN `walloffame` ON `martyr_martyr`.`walloffame`= `walloffame`.`id`
        LEFT OUTER JOIN `navigation` ON `walloffame`.`subcategory`= `navigation`.`id`
        WHERE `walloffame`.`subcategory`='$id'
ORDER BY `walloffame`.`order`")->result();
		return $query;
	}
    public function addlight($id)
    {
        $query=$this->db->query("SELECT `lights` FROM `martyr_martyr` WHERE `id`='$id'")->row();
        $previouslikes=$query->lights;
        $likes=intval($previouslikes)+1;
        $queryaddlamp=$this->db->query("UPDATE `martyr_martyr` SET `lights`='$likes' WHERE `id`='$id'");
        return 1;
    }
    public function getwalloffamestatusdropdown()
    {
        $status=array(
        "0" => "Un Approve",
        "1" => "Approve"
        );
        return $status;
    }
    
    public function adddeed($name,$deed)
    {
        if($name=="" || $deed=="" )
        {
        
        }
        else
        {
        $data=array(
            "name" => $name,
            "deed" => $deed,
            "status" => 0
        );
        $query=$this->db->insert( "walloffame", $data );
        $id=$this->db->insert_id();
        if(!$query)
        return  0;
        else
        return  $id;
        }
    }
}
?>
