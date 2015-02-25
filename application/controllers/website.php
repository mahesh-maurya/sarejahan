<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Website extends CI_Controller
{
	public function index( )
	{
		$data["page"]="home";
        $data["category"]=$this->category_model->getcategorytree(0);
//        print_r($data["category"]);
        $this->load->view("frontend",$data);
	}
    public function martry( )
	{
		$data["page"]="martry";
        //$data["category"]=$this->category_model->getallcategories();
        $this->load->view("frontend",$data);
	}
    public function detail( )
	{
        $id=$this->input->get("id");
        $data["row"]=$this->martyr_model->getmartyrbyid($id);
		$data["page"]="details";
        //$data["category"]=$this->category_model->getallcategories();
        $this->load->view("frontend",$data);
	}
    
    public function regiments( )
	{
        $categoryid=$this->input->get("category");
        $data["table"]=$this->regiment_model->getregimentbycategory($categoryid);
		$data["page"]="regiments";
        //$data["category"]=$this->category_model->getallcategories();
        $this->load->view("frontend",$data);
	}
    
    public function lightalamp()
	{
        $id=$this->input->get("id");
        $data['id']=$this->input->get('id');
		$data["page"]="light";
        $data["row"]=$this->martyr_model->getmartyrbyid($id);
//        $this->regiment_model->addlight($id);
        $this->load->view("frontend",$data);
	}
    
    public function lightalampcount($id)
	{
        $this->regiment_model->addlight($id);
        return 1;
	}
    
    public function sendmessage()
	{
        $id=$this->input->get("id");
        $data['id']=$this->input->get('id');
        $data["row"]=$this->martyr_model->getmartyrbyid($id);
		$data["page"]="sendmessage";
//        $data["row"]=$this->martyr_model->sendamessage($id);
//        $this->regiment_model->addlight($id);
        $this->load->view("frontend",$data);
	}
    public function sendmessagesubmit()
	{
        $id=$this->input->post("id");
        $name=$this->input->post("name");
        $contact=$this->input->post("contact");
        $city=$this->input->post("city");
        $email=$this->input->post("email");
        $message=$this->input->post("message");
        if($id!="")
        {
        $this->message_model->addmessage($id,$name,$contact,$city,$email,$message);
        }
		$data["page"]="thank";
        $data["category"]=$this->category_model->getcategorytree(0);
        $this->load->view("frontend",$data);
	}
        public function search()
        {
            $name=$this->input->get_post('name');
            $data['row']=$this->martyr_model->searchbyname($name);
            if(!empty($data['row']))
            {  
                $data["page"]="details";
                $this->load->view("frontend",$data);
            }
            else
            {
                $data["page"]="nodatafound";
                $this->load->view("frontend",$data);
            }
//            $data["page"]="details";
//            $this->load->view("frontend",$data);
        }
    public function bricks()
    {
        $data["page"]="bricks";
        $data['walloffame']=$this->walloffame_model->getallwalloffame();
        $this->load->view("walloffametemplate",$data);
    }
    public function deed()
    {
        $data["page"]="deed";
//        $data["category"]=$this->category_model->getcategorytree(0);
//        print_r($data["category"]);
        $this->load->view("walloffametemplate",$data);
    }
    public function deeddet()
    {
        $data["page"]="deeddet";
        $id=$this->input->get('id');
        $data['walloffame']=$this->walloffame_model->getwalloffamebyid($id);
        $this->load->view("walloffametemplate",$data);
    }
    
    public function adddeed()
	{
        $name=$this->input->post("name");
        
        $fromemail=$this->input->get_post("fromemail");
        $toemail=$this->input->get_post("toemail");
        $date=$this->input->get_post("date");
        $place=$this->input->get_post("place");
        $shortdeed=$this->input->get_post("shortdeed");
        
        $deed=$this->input->post("deed");
        
        $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		$filename="image";
		$image="";
		if (  $this->upload->do_upload($filename))
		{
		$uploaddata = $this->upload->data();
		$image=$uploaddata['file_name'];
             
             $config_r['source_image']   = './uploads/' . $uploaddata['file_name'];
             $config_r['maintain_ratio'] = TRUE;
             $config_t['create_thumb'] = FALSE;///add this
             $config_r['width']   = 800;
             $config_r['height'] = 800;
             $config_r['quality']    = 100;
             //end of configs
                $this->load->library('image_lib', $config_r); 
             $this->image_lib->initialize($config_r);
             if(!$this->image_lib->resize())
             {
                 echo "Failed." . $this->image_lib->display_errors();
                 //return false;
             }  
             else
             {
                 //print_r($this->image_lib->dest_image);
                 //dest_image
                 $image=$this->image_lib->dest_image;
                 //return false;
             }
             
		}
        $this->walloffame_model->adddeed($name,$deed,$fromemail,$toemail,$date,$place,$shortdeed,$image);
		$data["page"]="thankudeed";
        $this->load->view("walloffametemplate",$data);
	}
}
?>