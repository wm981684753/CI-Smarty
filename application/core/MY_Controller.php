<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/14
 * Time: 16:54
 */
if (!defined('BASEPATH')) exit('No direct access allowed.');


class MY_Controller extends CI_Controller { // 原文这里写错
    public function __construct() {
        parent::__construct();
    }

    public function assign($key,$val) {
        $this->cismarty->assign($key,$val);
    }

    public function display($html) {
        $this->cismarty->display($html);
    }
}