<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function __construct() {
        parent::__construct();
        
        
    }
    

    public function index(){
        $list_teacher = D("company")->where("type=2")->select();
        for ($i=0; $i <count($list) ; $i++) { 
            $list_teacher[$i]['content'] = html_entity_decode($list_teacher[$i]['content']);
        }

        $list_company = D("company")->where("type=1")->select();
        for ($i=0; $i <count($list_company) ; $i++) { 
            $list_company[$i]['content'] = html_entity_decode($list_company[$i]['content']);
        }

        $list_news = D("news")->select();
        for ($i=0; $i <count($list_news) ; $i++) { 
            $list_news[$i]['content'] = html_entity_decode($list_news[$i]['content']);
        }

        $this->assign("list_teacher",$list_teacher);
        $this->assign("list_company",$list_company);
        $this->assign("list_news",$list_news);
    	$this->display();
    }

    public function wlist(){
        $id = I("get.id",1);
    	$list = D("aboutus")->where("id=$id")->find();
        $list['content'] = html_entity_decode($list['content']);
        $this->assign("list",$list);
        $this->assign("id",$id);
    	$this->display();
    }

    public function show(){
        $id = I("get.id",0);
        $list = D("company")->where("id=$id")->find();
        $list['content'] = html_entity_decode($list['content']);
        $this->assign("list",$list);
        $this->display();
    }

    public function service(){
        $id = I("get.id",0);
        $list = D("company")->where("id=$id")->find();
        $list['content'] = html_entity_decode($list['content']);
        $this->assign("list",$list);
        $this->assign("id",$id);
        $this->display();
    }

    public function team(){
        $id = I("get.id",0);
        if($id == 1){
            $list = D("company")->where("type=4")->select();
        }else if($id == 2){
            $list = D("company")->where("type=5")->select();
        }

        for ($i=0; $i <count($list) ; $i++) { 
            $list[$i]['content'] = html_entity_decode($list[$i]['content']);
        }
    
        $this->assign("list",$list);
        $this->assign("id",$id);
        $this->display();
    }

    public function news(){
        $list = D("news")->select();
        $this->assign("list",$list);
        $this->display();
    }

    public function detail_team(){
        $id = I("get.id",1);
        $list = D("company")->where("id=$id")->find();
        $list['content'] = html_entity_decode($list['content']);
        $this->assign("list",$list);
        $this->display();
    }

    public function detail_com(){
        $id = I("get.id",1);
        $list = D("company")->where("id=$id")->find();
        $list['content'] = html_entity_decode($list['content']);
        $this->assign("list",$list);
        $this->display();
    }

    public function do_apply(){
        $data = I("post.");

        $id = D("apply")->add($data);
        if($id>0){
            $rd['code'] = 1;
            $rd['msg'] = "提交成功";
        }else{
            $rd['code'] = -1;
            $rd['msg'] = "提交失败";
        }

        $this->ajaxReturn($rd);
    }

    public function edit_apply(){
        $id = I("get.id",0);
        $list = D("apply")->where("id=$id")->find();
        $this->assign("list",$list);
        $this->display();
    }

    public function detail_news(){
        $id = I("get.id",1);
        $list = D("news")->where("id=$id")->find();
        $list['content'] = html_entity_decode($list['content']);
        $this->assign("list",$list);
        $this->display();
    }

    //用户提交购买请求
    public function commit(){
        $data = I("post.");
        $type = I("post.type",1);  //lid:获取单品id
        $table = I("post.table","");
        $uid = uid();

        if($table == ""){
            $this->ajaxReturn(array("code"=>-1,'msg'=>"提交失败！"));exit;
        }

        //如果参与过商品，是否可以重复参与
        $check = D($table)->where("uid=$uid and lid=$type")->find();
        if($check>0){
            $this->ajaxReturn(array("code"=>-1,'msg'=>"您已参加过活动，无法重复提交！"));exit;
        }
        
        //获取商品阶梯数量
        $typeinfo = D("list")->where("id=$type")->find();
        
        //参与该商品人数
        $p = D($table)->where("lid=$type and lstatus<3")->count();
        $lrecord = M($table); // 实例化User对象
        
        // 要修改的数据对象属性赋值
        //$arr['status'] = 1;
        $arr = array();

        $arr['lid'] = $type;


        //获取最大Z（组别）
        $z = $lrecord->where("lid=$type")->order('z DESC')->getField('z');
        $count = $lrecord->where("lid=$type")->count();
        
        $data['lstatus'] = $arr['lstatus'];
        $data['lid'] = $type;
        $data['z'] = $arr['z'];
        $data['uid'] = $uid;
        $data['c_time'] = time();
        $lcrecord = D($table);
        $lcrecord->startTrans(); //事务开始

        $id = $lcrecord->add($data);

        //根据条件更新状态
        if($arr['lstatus']==1 || $arr['lstatus']==2 || $arr['lstatus']==3){
        	$lrecord->where("lid=$type and lstatus!=3")->save($arr); 
        }

		if($id>0){
			$lcrecord->commit(); //事务提交
			$this->ajaxReturn(array("code"=>1,'msg'=>"提交成功！"));exit;
		} else {
			$lcrecord->rollback(); //事务回滚
			$this->ajaxReturn(array("code"=>-1,'msg'=>"提交失败！"));exit;
		}
    }
}