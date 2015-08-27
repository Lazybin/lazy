<?php

/**
 * Created by PhpStorm.
 * User: ab
 * Date: 15/8/27
 * Time: 下午9:10
 */
class Passport extends CI_Controller
{
    public function login()
    {
        $this->load->view('passport/login.phtml');
    }
}