<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use Think\Controller;
/**
 * 其他页面控制器
 * 主要获取首页聚合数据
 */
class ProcessController extends Controller {
    public function index($cate = 0){
    	//读取钢管类 分类
    	$map['status'] = 1;
    	$map['pid'] = 1;
    	$ggs = D('ProcessCategory')->where($map)->order('pid desc')->select();
    	$this->assign('ggs', $ggs);

    	//读取型材类 分类
    	$map['status'] = 1;
    	$map['pid'] = 3;
    	$xcl = D('ProcessCategory')->where($map)->order('pid desc')->select();
    	$this->assign('xcl', $xcl);


    	//法兰类型
    	$map['status'] = 1;
    	$map['pid'] = 5;
    	$fll = D('ProcessCategory')->where($map)->order('pid desc')->select();
    	$this->assign('fll', $fll);

    	//阀门类
    	$map['status'] = 1;
    	$map['pid'] = 6;
    	$fml = D('ProcessCategory')->where($map)->order('pid desc')->select();
    	$this->assign('fml', $fml);

    	//板卷类
    	$map['status'] = 1;
    	$map['pid'] = 7;
    	$bjl = D('ProcessCategory')->where($map)->order('pid desc')->select();
    	$this->assign('bjl', $bjl);


    	//分类
    	if($cate>0){
    		$map['category'] = $cate;
    	}

        $map['status'] = 1;
        $lists = D('Process')->where($map)->select();

        $this->assign('lists', $lists);
        $this->display();
    }
}