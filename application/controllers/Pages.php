<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pages_model', 'page');
    }

    function about()
    {
        $meta = $this->page->getMetaContent('about_us');
        $this->data['page_title'] = $meta->page_name;        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('about_us');
        if ($data) {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->data['testimonials'] = $this->master->get_data_rows('testimonials', ['status' => '1']);
            $this->data['owners']  = $this->master->getRows('owners', ['status' => '1', 'type'=> '1'], '','', 'asc', 'id');
            $this->data['members'] = $this->master->getRows('owners', ['status' => '1', 'type'=> '2'], '','', 'asc', 'id');
            $this->load->view('about', $this->data);
        } else {
            show_404();
        }
    }

    function services()
    {
        $meta = $this->page->getMetaContent('services');
        $this->data['page_title'] = $meta->page_name;        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('services');
        if ($data) {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta>content);
            $this->data['faqs'] = $this->master->getRows('faqs', ['status' => '1'], '','', 'asc', 'sort_order');
            $this->data['services'] = $this->master->getRows('services', ['status' => '1'], '','', 'desc', 'id');
            $this->load->view('services', $this->data);
        } else {
            show_404();
        }
    }

    function product_detail($p_id)
    {
        $meta = $this->page->getMetaContent('detail');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('detail');
        $p_id = doDecode($p_id);
        $this->data['product'] = $this->master->getRow('products', ['id'=> $p_id]);
        $this->data['images']  = $this->master->getRows('product_images', ['product_id'=> $p_id]);
        if ($data) {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->load->view('detail', $this->data);
        } else {
            show_404();
        }
    }

    function shop()
    {
        $meta = $this->page->getMetaContent('shop');
        $this->data['page_title'] = $meta->page_name;  
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('shop');
        if ($data) {
            $this->data['content'] = unserialize($data->code);
            $this->data['details'] = ($data->full_code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->data['categories'] = $this->master->getRows('categories', ['status'=> 1]);
            $this->data['brands'] = $this->master->getRows('brands', ['status'=> 1]);
            $this->data['types'] = $this->master->getRows('phone_types', ['status'=> 1]);
            $this->load->view('shop', $this->data);
        } else {
            show_404();
        }
    }

    function search()
    {
        if($this->input->post())
        {
            $this->data['products'] = $products = $this->page->get_products($this->input->post());
            $this->data['html'] = $html = $this->load->view('load-products', $this->data, TRUE);
            echo json_encode(['status'=> 1, 'html'=> $html]);
        }
    }


    function contact()
    {
        if ($vals = $this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('phone', 'Phone Number', 'required');
            $this->form_validation->set_rules('msg', 'Message', 'required');
            if ($this->form_validation->run() === FALSE) {
                $res['status'] = 0;
                $res['msg'] = validation_errors();
            } else {
                $vals['msg'] = html_escape($this->input->post('msg'));
                $vals['created_date'] = date('Y-m-d H:i:s');
                $vals['status'] = 0;
                $this->master->save('contact', $vals);
                $vals['site_email'] = $this->data['site_settings']->site_email;
                $vals['site_noreply_email'] = $this->data['site_settings']->site_noreply_email;
                $okmsg = send_email($vals);
                if ($okmsg) {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                    // $res['redirect_url'] = site_url('contact-us');
                } else {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                }
            }
            exit(json_encode($res));
        } else {
            $meta = $this->page->getMetaContent('contact');
            $this->data['page_title'] = $meta->page_name;
            $this->data['slug'] = $meta->slug;
            $data = $this->page->getPageContent('contact');
            if ($data) {
                $this->data['content'] =  unserialize($data->code);
                $this->data['meta_desc'] = json_decode($meta->content);
                $this->load->view('contact', $this->data);
            } else {
                show_404();
            }
        }
    }

    function get_a_quote()
    {
        if ($vals = html_escape($this->input->post())) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone Number', 'required');

            $this->form_validation->set_rules('resquested_transport_date', 'Requested Transport Date', 'required');
            $this->form_validation->set_rules('pickup_city', 'Pickup City', 'required');
            $this->form_validation->set_rules('pickup_zip', 'Pickup Zip', 'required');
            $this->form_validation->set_rules('ending_city', 'Ending City', 'required');
            $this->form_validation->set_rules('ending_zip', 'Ending Zip', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');
            if ($this->form_validation->run() === FALSE) {
                $res['status'] = 0;
                $res['msg'] = validation_errors();
            } else {
                $vals['created_date'] = date('Y-m-d H:i:s');
                $vals['resquested_transport_date'] = date('Y-m-d', strtotime($vals['resquested_transport_date']));
                $vals['status'] = 0;
                $this->master->save('quotes', $vals);
                // $vals['site_email'] = $this->data['site_settings']->site_email;
                // $vals['site_noreply_email'] = $this->data['site_settings']->site_noreply_email;
                // $okmsg = send_email($vals);
                if ($okmsg) {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                    // $res['redirect_url'] = site_url('contact-us');
                } else {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                }
            }
            exit(json_encode($res));
        } else {
            $meta = $this->page->getMetaContent('get_a_quote');
            $this->data['page_title'] = $meta->page_name;
            $this->data['slug'] = $meta->slug;
            $data = $this->page->getPageContent('get_a_quote');
            if ($data) {
                $this->data['content'] =  unserialize($data->code);
                $this->data['meta_desc'] = json_decode($meta->content);
                $this->load->view('quote', $this->data);
            } else {
                show_404();
            }
        }
    }

    function error()
    {
        $this->load->view('pages/404', $this->data);
    }
}
