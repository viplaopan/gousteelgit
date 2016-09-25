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
class LogisticsController extends Controller {
    public function index($from = '' ,$to = ''){
        if($from&&$to){
            $from = I('get.from');
            $to = I('get.to');
            $map['from'] = $from;
            $map['to'] = array('like',"%$to%");
        }


        $map['status'] = 1;
        $lists = D('Logistics')->where($map)->select();
        $this->assign('lists', $lists);
        $this->display();
    }
}