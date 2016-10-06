<?php
namespace Pangu\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function __construct() {
		parent::__construct();
		check_admin_login();
	}

	public function index() {
		$this->display();
	}

	public function about_us(){
		$type = I("get.type",1);
		
		$arr = D("aboutus")->where("id=$type")->find();
		$this->assign("list",$arr);
		$this->assign("id",$type);
		$this->display();
	}

	public function add_about(){
  		$data = I("post.");
  		$id = I("get.id");

  		$ids = D("aboutus")->where("id=$id")->save($data);

  		$rd['code'] = 1;
		$rd['msg'] = $id;
		$this->ajaxReturn($rd);exit;

  		if($ids>0){
  			$rd['code'] = 1;
			$rd['msg'] = "成功";
			$this->ajaxReturn($rd);
  		}else{
  			$rd['code'] = -1;
			$rd['msg'] = "失败";
			$this->ajaxReturn($rd);
  		}
	}

	//导师
	public function list_teacher(){
		$list = D("company")->where("type=2")->select();
		for ($i=0; $i <count($list) ; $i++) { 
			$list[$i]['content'] = html_entity_decode($list[$i]['content']);
		}
		$this->assign("list",$list);
		$this->display();
	}

	public function edit_teacher(){
		$type = I("get.type",0);
		$id = I("get.id",0);
		if($type==1){//add
			
		}else if($type==2){
			$list = D("company")->where("id=$id")->find();
			$this->assign("list",$list);
		}
		$this->assign("id",$id);
		$this->display();
	}

	public function edit_service(){
		$id = I("get.id",0);
		$list = D("company")->where("id=$id")->find();
		$this->assign("list",$list);
		
		$this->assign("id",$id);
		$this->display();
	}

	public function list_team(){
		$id = I("get.id",0);
		if($id == 1){
			$list = D("company")->where("type=4")->select();
		}
		if($id == 2){
			$list = D("company")->where("type=5")->select();
		}

		$this->assign("list",$list);
		$this->assign("id",$id);
		$this->display();
	}

	public function edit_team(){
		$type = I("get.type",1);
		$id = I("get.id",0);
		$ids = I("get.ids",0);
		if($type == 1){//add

		}else if($type == 2){
			$list = D("company")->where("id=$id")->find();
			$this->assign("list",$list);
		}

		$this->assign("id",$id);
		$this->assign("ids",$ids);
		$this->display();
	}

	public function list_company(){
		$list = D("company")->where("type=1")->select();
		for ($i=0; $i <count($list) ; $i++) { 
			$list[$i]['content'] = html_entity_decode($list[$i]['content']);
		}
		$this->assign("list",$list);
		$this->display();
	}

	public function edit_company(){
		$type = I("get.type",1);
		$id = I("get.id",0);
		if($type == 1){//add

		}else if($type == 2){
			$list = D("company")->where("id=$id")->find();
			$this->assign("list",$list);
		}

		$this->assign("id",$id);
		$this->assign("ids",$ids);
		$this->display();
	}

	public function list_apply(){
		$list = D("apply")->select();
		$this->assign("list",$list);
		$this->display();
	}

	public function list_news(){
		$list = D("news")->select();
		for ($i=0; $i <count($list) ; $i++) { 
			$list[$i]['content'] = html_entity_decode($list[$i]['content']);
		}
		$this->assign("list",$list);
		$this->display();
	}

	public function edit_news(){
		$type = I("get.type",1);
		$id = I("get.id",0);
		if($type == 1){//add

		}else if($type == 2){
			$list = D("news")->where("id=$id")->find();
			$this->assign("list",$list);
		}

		$this->assign("id",$id);
		$this->display();
	}

	/**
	 * 系统信息
	 * @wxy
	 * @DateTime 2016-05-20T16:11:00+0800
	 * @return   [type]                   [description]
	 */
	public function welcome() {
		//p(build_order_no());
		$arr['php_uname1'] = php_uname('s');
		$arr['php_uname2'] = php_uname('r');
		$arr['php_sapi_name'] = php_sapi_name();
		$arr['PHP_VERSION'] = PHP_VERSION;
		$arr['DEFAULT_INCLUDE_PATH'] = DEFAULT_INCLUDE_PATH;
		$arr['host'] = $_SERVER["HTTP_HOST"];
		$arr['ip'] = GetHostByName($_SERVER['SERVER_NAME']);
		$arr['root'] = $_SERVER['SystemRoot'];
		$arr['port'] = $_SERVER['SERVER_PORT'];
		$arr['day'] = date("Y-m-d");

		$this->assign('sys', $arr);
		$this->display();
	}


	/**
	 * 批量删除
	 * @wxy
	 * @DateTime 2016-05-21T09:59:24+0800
	 * @return   [type]                   [description]
	 */
	public function do_del_all() {
		$ids = I("get.ids");
		$ids = rtrim($ids, ",");
		$table = I("get.table");
		if ($table == "wx_user") {
			$s = D($table)->where("uid in ($ids)")->delete();
		} else {
			$s = D($table)->where("id in ($ids)")->delete();
		}
		$ids = explode(',', $ids);
		echo $s;
	}

	/**
	 * 删除公用方法
	 * @wxy
	 * @DateTime 2016-05-21T09:56:38+0800
	 * @return   [type]                   [description]
	 */
	public function do_del() {
		$id = I("post.id");
		$table = I("post.table");
		if ($table == "wx_user") {
			$s = D($table)->where("uid=$id")->delete();
		} else {
			$s = D($table)->where("id=$id")->delete();
		}
		echo $s;
	}

	/**
	 * 通用编辑页面
	 * @wxy
	 * @DateTime 2016-05-20T16:39:25+0800
	 * @return   [type]                   [description]
	 */
	public function edit() {
		$id = I("get.id", 0);
		$table = I("get.table", 0);
		$arr = D($table)->where("id=$id")->find();

		$this->assign("list", $arr);
		$this->assign("id", $id);
		$this->display("edit_" . $table);
	}

	/**
	 * 通用提交编辑
	 * @wxy
	 * @DateTime 2016-05-20T16:39:51+0800
	 * @return   [type]    [description]
	 */
	public function do_edit() {
		$id = I("get.id", 0);
		$table = I("get.table", 0);
		$data = I("post.");

		if ($table == "match") {
			$data['c_time'] = strtotime($data['c_time']);
		}

		if ($id == 0) {
			$s = D($table)->add($data);
		} else {
			$data['k_time'] = time();
			$data['status'] = 1;//1表示已经开奖了
			$s = D($table)->where("id=$id")->save($data);
		}
		if ($table == "sys_set") {
			S("sys_set", null);
		}
		echo $s;
	}


}