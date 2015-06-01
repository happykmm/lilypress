<?php
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('admin_model');
        $this->load->library('parser');
        date_default_timezone_set("Etc/GMT-8");
    }

    public function test() {
        $this->load->view('admin/test');
    }

    public function console() {
        $this->load->view('admin/console');
    }

    public function article($method="list", $parm=1){
        if ($method == "list") {
            $data['status'] = $parm;
            $data['article'] = $this->admin_model->get_article($parm);
            $this->load->view('admin/article-list', $data);
        } 
        else 
        if ($method == "new") {
            $this->load->view('admin/article-new');
        } 
        else
        if ($method == "edit") {
            $data['article_item'] = $this->admin_model->get_article_id($parm);
            $this->load->view('admin/article-edit', $data);
        } 
        else
        if ($method == "delete") {
            $this->admin_model->delete($parm);
        }
        else
        if ($method == "retrieve") {
            $this->admin_model->retrieve($parm);
        }
        if ($method == 'insert') {
            $data = array(
                'post_title'    => $this->input->post('post_title'),
                'post_content'  => $this->input->post('post_content'),
                'post_author'   => 0,
                'post_category' => $this->input->post('post_category'),
                'post_status'   => 1,
                'post_parent'   => $this->input->post('post_parent'),
                'post_date'     => date("Y-m-d H:i:s"),
                'post_modified' => date("Y-m-d H:i:s")
            );
            echo $this->admin_model->insert($data);
        }
        else 
        if ($method == 'update') {
            $data = array(
                'post_title'    => $this->input->post('post_title'),
                'post_content'  => $this->input->post('post_content'),
                'post_author'   => 0,
                'post_category' => $this->input->post('post_category'),
                'post_status'   => 1,
                'post_modified' => date("Y-m-d H:i:s")
            );
            echo $this->admin_model->update($data, $this->input->post('post_parent'));
            $data['post_parent'] = $this->input->post('post_parent');
            $data['post_date'] = $data['post_modified'];
            echo $this->admin_model->insert($data);
        }
    }

    public function media() {

    }

    public function page() {

    }

    public function comment() {

    }

    public function user() {

    }

    public function theme() {

    }

    public function tool() {

    }

    public function setting() {

    }
}