<?php

class Quotes extends Admin_Controller {

    private $table_name = "quotes";

    public function __construct() {
        parent::__construct();
        $this->isLogged();
    }

    public function index() {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN.'/quotes';
        $this->data['rows'] = $this->master->getRows($this->table_name,'','','','DESC');;
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    function manage() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN.'/quotes';
        $arr['status'] = 1;
        $this->master->save($this->table_name, $arr, 'id', $this->uri->segment(4));
        $this->data['row'] = $this->master->getRow($this->table_name, array('id' => $this->uri->segment(4)));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete() {
        $this->master->delete($this->table_name, 'id', $this->uri->segment('4'));
        setMsg('success', 'Delete successfully !');
        redirect(ADMIN . '/quotes', 'refresh');
    }
    function deleteAll(){
        $ids = $this->input->post('checkbox_id');
        if(!empty($ids)){
            $delete=$this->master->delete($this->table_name,'id',$ids);
            setMsg('success', 'Deleted successfully !');
        }
        else{
            setMsg('error', 'Please Select atleast 1 Record !');
        }
        redirect(ADMIN . '/quotes', 'refresh');
    }
}

?>