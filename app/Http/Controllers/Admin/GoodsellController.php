<?php

namespace App\Http\Controllers\Admin;

use App\Shopping_good_sell;

class GoodsellController extends CommonController
{
    public function index(Shopping_good_sell $sell)
    {
        $data = $sell->orderBy('psgs_sell_time', 'DESC')->get();
        $this->assign('data', $data);
        return $this->fetch('admin/good_sell_list');
    }

    public function edit(Shopping_good_sell $sell,Shopping_cate_one $cate_one, Shopping_cate_two $cate_two, Shopping_good $good)
    {
        //psgs_id
        $id = $this->request->get('id');
        //出货表 数据由用户创建订单而来 不可新增
        $data=$sell->where('psgs_id',$id)->first();

        $this->assign('id', $id); //psgs_id
        $this->assign('v', $data);
        return $this->fetch('admin/good_sell_edit');
    }

    public function save(Shopping_good_sell $sell)
    {
        //psgs_id
        $psgs_id = $this->request->post('psgs_id', '');
        $data = [
            'psgs_good_price' => $this->request->post('psgs_good_price'),
            'psgs_sell_count' => $this->request->post('psgs_sell_count')
        ];
        $sell->where('psgs_id', $psgs_id)->update($data);
        $this->success('修改完成。');
    }


}