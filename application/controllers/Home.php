<?php

/**
 * Created by PhpStorm.
 * User: ab
 * Date: 15/8/29
 * Time: 下午3:11
 */
class Home extends LazyController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('home/index.phtml');
    }
}