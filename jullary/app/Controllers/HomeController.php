<?php 



class HomeController extends Controller
{
    public function index()
    {
        $data = ["name"=>"moro"];
        $this->view('home',$data);
    }
}