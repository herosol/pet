<?php

class Owners extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        $this->load->model('Owners_model', 'owners_model');
    }

    function index()
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/owners';

        $this->data['rows'] = $this->owners_model->get_rows(array());
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage()
    {
        $this->data['pageView'] = ADMIN . '/owners';
        if ($this->input->post()) {
            $vals = html_escape($this->input->post());
            if (($_FILES["image"]["name"] != "")) {
                $this->remove_file($this->uri->segment(4));
                $image = upload_image(UPLOAD_PATH . "owners/", 'image');
                if (!empty($image['file_name'])) {
                    $vals['image'] = $image['file_name'];
                    generate_thumb(UPLOAD_PATH . "owners/", UPLOAD_PATH . "owners/", $image['file_name'],300,'thumb_');
                } else {
                    $this->session->setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/owners/manage/' . $this->uri->segment(4), 'refresh');
                    exit;
                }
            }
            $this->owners_model->save($vals, $this->uri->segment(4));
            setMsg('success', 'Owner has been saved successfully.');
            redirect(ADMIN . '/owners', 'refresh');
            exit;
        }
        $this->data['row'] = $this->owners_model->get_row_where(array('id' => $this->uri->segment('4')));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete($id) {
        $id = intval($id);
        if ($row = $this->owners_model->get_row($id)) {
            $this->owners_model->delete($this->uri->segment('4'));
            setMsg('success', 'Owner has been deleted successfully.');
            redirect(ADMIN . '/owners', 'refresh');
            exit;
        }
        else
            show_404();
    }

    function remove_file($id) {
        $arr = $this->owners_model->get_row($id);

        $filepath = "./" . UPLOAD_PATH . "/owners/" . $arr->image;
        $filepath_thumb = "./" . UPLOAD_PATH . "/owners/thumb_" . $arr->image;
        if (is_file($filepath)) {
            unlink($filepath);
        }
        if (is_file($filepath_thumb)) {
            unlink($filepath_thumb);
        }
        return;
    }

}

?>