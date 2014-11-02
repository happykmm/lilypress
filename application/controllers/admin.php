<?php
class Admin extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('admin_model');
      $this->load->library('parser');
    }

    public function artlist($status = 1)
    {
      $data['status'] = $status;
      $data['article'] = $this->admin_model->get_article($status);

      $this->load->view('templates/admin-header');
      $this->load->view('admin/artlist', $data);
      $this->load->view('templates/admin-footer');
    }

    public function newart()
    {
      $this->load->view('templates/admin-header');
      $this->load->view('admin/newart');
      $this->load->view('templates/admin-footer');
    }

    public function edit($id = 0)
    {
      $data['article_item'] = $this->admin_model->get_article_id($id);
      $this->load->view('templates/admin-header');
      $this->load->view('admin/edit', $data);
      $this->load->view('templates/admin-footer');
    }

    public function delete($id = 0)
    {
        $this->admin_model->delete($id);
        $this->artlist();
    }

    public function retrieve($id = 0)
    {
        $this->admin_model->retrieve($id);
        $this->artlist(-1);
    }

    public function submit($method = 'insert')
    {
        if ($method == 'insert') {
            $data = array(
                'post_title'    => $this->input->post('post_title'),
                'post_content'  => $this->input->post('post_content'),
                'post_author'   => 0,
                'post_category' => $this->input->post('post_category'),
                'post_status'   => 1,
                'post_parent'   => $this->input->post('post_parent'),
                'post_date'     => time(),
                'post_modified' => time()
            );
            echo $this->admin_model->insert($data);
        }
        else if ($method == 'update') {
            $data = array(
                'post_title'    => $this->input->post('post_title'),
                'post_content'  => $this->input->post('post_content'),
                'post_author'   => 0,
                'post_category' => $this->input->post('post_category'),
                'post_status'   => 1,
                'post_modified' => time()
            );
            echo $this->admin_model->update($data, $this->input->post('post_parent'));
            $data['post_parent'] = $this->input->post('post_parent');
            $data['post_date'] = $data['post_modified'];
            echo $this->admin_model->insert($data);
        }

    }

}