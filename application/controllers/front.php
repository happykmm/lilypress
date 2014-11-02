<?php
class Front extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('front_model');
    }

    public function home()
    {
        $data['article'] = $this->front_model->get_article(10,0);
        $this->load->view("templates/front-header");
        $this->load->view("front/home", $data);
        $this->load->view("templates/front-footer");
    }

    public function article($id = 0)
    {
        $data['article_item'] = $this->front_model->get_article_id($id);
        $this->load->view("templates/front-header");
        $this->load->view("front/article", $data);
        $this->load->view("templates/front-footer");
    }
}