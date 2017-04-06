<?php
class News extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url');
    }

    public function index(){
        $data['news'] = $this->news_model->get_news();
        $this->load->view('test_model',$data);
    }

    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);
    }
}