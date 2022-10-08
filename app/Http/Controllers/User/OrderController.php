<?php

namespace App\Http\Controllers\User;

use App\Shopping_order;
use App\Shopping_cart;
use App\Shopping_good;
use App\Shopping_good_sell;

class OrderController extends CommonController
{
    protected $checkLoginExclude = [];
    public function index(Shopping_order $order){
        $data = $order->orderBy('pso_action_time', 'DESC')->get();
        $this->assign('data', $data);
        return $this->fetch('user/shopping_order_list');
    }
    public function creatorder(Shopping_order $order){
        session_start();
        $user = $_SESSION['pss']['user'];
        $data = [
            'pso_order_id'=>'OR'.substr(md5($order
                    ->orderBy('pso_id','DESC')
                    ->first()['pso_id']),0,16),
            'pso_user_id'=>$user['user_id'],
            'pso_user_name'=>$user['user_name'],
            'pso_action_time'=>date('Y-m-d h:i:s', time()),
            'pso_address_id'=>'123',
            'pso_address_info'=>'asdas',
            'pso_count_price'=>''
        ];
        return $data;
    }
    public function getgoodinfo(Shopping_good $good,$id){
        $data = $good->where('psg_good_id',$id)
            ->first(['psg_good_name','psg_sell_price','psg_good_count']);
        return $data;
    }
    public function checkrepertory($a,$b){
        if ($a-$b<0){
            echo json_encode(2);
            return;
        }
    }
    public function updaterepertory(Shopping_good $good,$id,$count){
        $good->where('psg_good_id',$id)
            ->update(['psg_good_count'=>$count]);
    }
    public function buycart(Shopping_order $order,Shopping_cart $cart,Shopping_good_sell $sell,Shopping_good $good){
        //psc_id 数组
        $id = $this->request->get('id');
        $data = $this->creatorder($order);
        $total=0;
        foreach ($id as $value){
            //获取购物车信息
            $data1 = $cart->where('psc_id',$value)->first();
            //获取商品信息
            $data2 = $this->getgoodinfo($good,$data1['psc_good_id']);
            //检查库存
            $this->checkrepertory($data2['psg_good_count'],$data1['psc_good_num']);
            //计算价格
            $total += $data1['psc_good_num']*$data2['psg_sell_price'];
            //计算库存
            $count = $data2['psg_good_count']-$data1['psc_good_num'];
            //更新库存
            $this->updaterepertory($good,$data1['psc_good_id'],$count);
            $data3 = [
                'psgs_good_id'=>$data1['psc_good_id'],
                'psgs_good_name'=>$data2['psg_good_name'],
                'psgs_good_price'=>$data2['psg_sell_price'],
                'psgs_sell_time'=>$data['pso_action_time'],
                'psgs_sell_count'=>$data1['psc_good_num'],
                'psgs_order_id'=>$data['pso_order_id'],
            ];
            //添加出货记录
            $sell->insert($data3);
            //删除购物车信息
            $cart->where('psc_id',$value)->delete();
        }
        $data['pso_count_price']=$total;
        //添加订单
        $order->insert($data);
        $this->success('购买成功');
    }

    public function buyone(Shopping_order $order,Shopping_good_sell $sell,Shopping_good $good){
        //psg_good_id
        $id = $this->request->get('id');
        $num = $this->request->get('num');
        //创建订单
        $data = $this->creatorder($order);
        //获取商品信息
        $data2 = $this->getgoodinfo($good,$id);
        //检查库存
        $this->checkrepertory($data2['psg_good_count'],$num);
        $count = $data2['psg_good_count']-$num;
        //更新库存
        $this->updaterepertory($good,$id,$count);
        $data3 = [
            'psgs_good_id'=>$id,
            'psgs_good_name'=>$data2['psg_good_name'],
            'psgs_good_price'=>$data2['psg_sell_price'],
            'psgs_sell_time'=>$data['pso_action_time'],
            'psgs_sell_count'=>$num,
            'psgs_order_id'=>$data['pso_order_id'],
        ];
        //添加出货记录
        $tatol =$data2['psg_sell_price']*$num;
        $data['pso_count_price']=$tatol;
        $sell->insert($data3);

        //添加订单
        $order->insert($data);
        $this->success('购买成功');
    }
    public function info(Shopping_good_sell $sell){
        //pso_order_id  psgs_order_id
        $id = $this->request->get('id');
        $data = $sell->where('psgs_order_id',$id)
            ->orderBy('psgs_sell_time',"DESC")
            ->get();
        $this->assign('data', $data);
        return $this->fetch('user/good_sell_list');
    }
}