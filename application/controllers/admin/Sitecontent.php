<?php
class Sitecontent extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(21);
        $this->table_name = 'sitecontent';
    }

    public function home()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_home';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'home'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 7; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],300,'thumb_');
                    if($i==1)
                    {
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],2000,'2000p_');
                    }
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'1000p_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],500,'500p_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/1000p_".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/500p_".$content_row['image'.$i]);
                        
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            if (isset($_FILES["video"]["name"]) && $_FILES["video"]["name"] != "") {
                
                $video = upload_file(UPLOAD_PATH.'images/', 'video', 'video');
                if(!empty($video['file_name'])){
                    if(isset($content_row['video']))
                        $this->remove_file(UPLOAD_PATH."images/".$content_row['video']);
                    $vals['video'] = $video['file_name'];
                }
            }

            if (isset($_FILES["poster"]["name"]) && $_FILES["poster"]["name"] != "") {
                
                $poster = upload_file(UPLOAD_PATH.'images/', 'poster');
                generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$poster['file_name'], 1500, 'thumb_');
                if(!empty($poster['file_name'])){
                    if(isset($content_row['poster']))
                        $this->remove_file(UPLOAD_PATH."images/".$content_row['poster']);
                    $vals['poster'] = $poster['file_name'];
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'home');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/home");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'home'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function about_us()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_about_us';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'about_us'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 7; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],300,'thumb_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'1000p_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],500,'500p_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/1000p_".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/500p_".$content_row['image'.$i]);
                        
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'about_us');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/about_us");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'about_us'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function services()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_services';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'services'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 2; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],300,'thumb_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'1000p_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],500,'500p_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/1000p_".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/500p_".$content_row['image'.$i]);
                        
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'services');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/services");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'services'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    

    function contact() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_contact';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();


            for($i = 1; $i <= 1; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],300,'thumb_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],1000,'1000p_');
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],500,'500p_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/1000p_".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/500p_".$content_row['image'.$i]);
                        
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data), 'ckey', 'contact');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/contact");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function get_a_quote() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_get_a_quote';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'get_a_quote'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row = array();

            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name, array('code' => $data), 'ckey', 'get_a_quote');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/get_a_quote");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'get_a_quote'));
        $this->data['row'] = unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }




    public function delete()
    {
        $arr = $this->input->post('delete');
        foreach ($arr as $key => $values) {
            $this->master->delete($this->table_name, 'id', $values);
        }
        redirect("admin/sitecontent/slider", 'refresh');
    }

    function remove_file($filepath)
    {
        if (is_file($filepath))
            unlink($filepath);
        return;
    }

}
?>