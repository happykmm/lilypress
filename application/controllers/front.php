<?php
class Front extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('front_model');
    }

    public function home()
    {
        $data['article'] = $this->front_model->get_article(10,0);
        //$this->load->view("front/home", $data);
        $this->assign('data', $data);
        $this->display("front/home.php");
    }

    public function article($id = 0)
    {
        $data['article_item'] = $this->front_model->get_article_id($id);
        //$this->load->view("front/article", $data);
        $this->assign('data', $data);
        $this->display("front/article.php");
    }
}