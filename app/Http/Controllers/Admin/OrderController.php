<?php

namespace App\Http\Controllers\Admin;

use App\Shopping_order;
use App\Shopping_good_sell;

class OrderController extends CommonController
{
    public function index(Shopping_order $order){
        $data = $order->orderBy('pso_action_time', 'DESC')->get();
        $this->assign('data', $data);
        return $this->fetch('admin/shopping_order_list');
    }
    public function info(Shopping_good_sell $sell){
        //pso_order_id  psgs_order_id
        $id = $this->request->get('id');
        $data = $sell->where('psgs_order_id',$id)
            ->orderBy('psgs_sell_time',"DESC")
            ->get();
        $this->assign('data', $data);
        return $this->fetch('admin/good_sell_list');
    }
}