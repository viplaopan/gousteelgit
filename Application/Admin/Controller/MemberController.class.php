<?php
/**
 * Created by PhpStorm.
 * User: caipeichao
 * Date: 14-3-14
 * Time: AM10:59
 */

namespace Admin\Controller;

use Admin\Builder\AdminListBuilder;
use Admin\Builder\AdminConfigBuilder;
use Admin\Builder\AdminSortBuilder;

class MemberController extends AdminController
{
	//广告页面
    public function index($page = 1, $r = 20)
    {
    	//读取广告位
        $map = array('status' => array('EGT', 0));
		$MemberModel = D('Member');
       
        $lists = $MemberModel->where($map)->page($page, $r)->order('uid desc')->select();
        $totalCount = $MemberModel->where($map)->count();
        foreach($lists as &$val){
            $cid = get_admin_company($val['uid']);
            $company = D("Company")->where(array('id'=>$cid))->find();

            $con = D('Contact')->where(array('cid'=>$cid))->find();

            $val['name'] = $con['name']?$con['name']:'暂无';
            $val['company_name'] = $company['name']?$company['name']:'客户未填写';
            $val['com_address'] = $company['com_address']?$company['com_address']:'客户未填写';
            $val['mobile2'] = $con['mobile']?$con['mobile']:'暂无';
            $val['id'] = $val['uid'];

        }
        unset($val);
        //显示页面
        $builder = new AdminListBuilder();
        $builder->title('用户')
            ->setStatusUrl(U('setVip'))
            ->keyId()
            ->keyText('name', '用户名')
            ->keyText('mobile2', '电话')
            ->keyText('company_name', '公司名称')
            ->keyText('com_address', '公司地址')
            ->keyText('mobile', '账号')
            ->keyTime('last_login_time','上次登陆时间')
            ->keyVip('is_vip','是否VIP')
            ->data($lists)
            ->pagination($totalCount, $r)
            ->display();
    }
	public function setVip($ids, $status)
    {
        $map['uid'] = array('in',$ids);
        $ids = is_array($ids) ? $ids : explode(',', $ids);
        $res = D('Member')->where(array('uid' => array('in', $ids)))->save(array('is_vip' => $status));
        $this->success('提交成功');
    }
}