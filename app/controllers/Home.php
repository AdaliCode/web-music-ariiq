<?php
class Home extends Controller
{

    public function index()
    {
        $data['title'] = 'Home';
        $data['web_name'] = 'ASIC';
        $this->view('templates/header', $data); //buat method view yang ada di controller
        $this->view('index', $data);
        $this->view('templates/footer');
    }
}
