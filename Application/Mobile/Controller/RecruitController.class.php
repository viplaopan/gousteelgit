<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Mobile\Controller;
use Think\Controller;
/**
 * 其他页面控制器
 * 主要获取首页聚合数据
 */
class RecruitController extends Controller {
    public function index($page = 1){
        $map['status'] = 1;
        $lists = D('Recruit')->where($map)->order('create_time desc')->page($page, 20)->select();
        $totalCount = D('Recruit')->where($map)->count();
        $this->assign('totalPageCount', $totalCount);
        
        foreach($lists as &$val){
            //获取公司信息
            $info = D('Company')->where(array('id'=>$val['cid']))->find();
            $val['company'] = $info;
           
            //获取联系信息
            $contact = D('Contact')->where(array('cid'=>$val['cid']))->find();
            $val['contact'] = $contact;
        }
        unset($val);
        $this->assign('lists', $lists);
        $this->display();
    }
}