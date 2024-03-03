<?php
class Home extends Controller
{
    public function index()
    {
        // echo 'Home/index';

        $this->view('home');
    }
}