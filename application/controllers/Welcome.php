<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->benchmark->mark('code_start');
		$str = 0;
		var_dump(ENVIRONMENT);
		for($i=0;$i<100;$i++){
			$str += $i;
		}

		$this->benchmark->mark('code_end');
		echo $str.'</br>';
		echo $this->benchmark->elapsed_time('code_start', 'code_end');
		
		$data['title'] = 'first';
		$this->load->view('welcome_message',$data);
	}

	public function smarty(){
        //$this->load->view('welcome_message');
        $data['title'] = '标题';
        $data['num'] = '123456789';
        //$this->cismarty->assign('data',$data); // 亦可
        $this->assign('data',$data);
        $this->assign('tmp','hello');
        //$this->cismarty->display('test.html'); // 亦可
        $this->display('test.html');
    }
}
