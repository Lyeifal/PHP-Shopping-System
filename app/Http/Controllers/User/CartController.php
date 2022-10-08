<?php

namespace App\Http\Controllers\User;

use App\Shopping_cart;
use App\Shopping_good;

class CartController extends CommonController
{
    protected $checkLoginExclude = [];

    public function index(Shopping_good $good,Shopping_cart $cart){
        session_start();
        $user = $_SESSION['pss']['user'];
        $id=$user['user_id'];
        $data = $cart->where('psc_user_id',$id)->get();
        for ($i=0;$i<sizeof($data);$i++)
        {
            $goods = $good
                ->where('psg_good_id',$data[$i]['psc_good_id'])
                ->first(['psg_good_name','psg_sell_price']);
            $data[$i]['name']=$goods['psg_good_name'];
            $data[$i]['price']=$goods['psg_sell_price'];
            $data[$i]['total']=($data[$i]['psc_good_num']*$goods['psg_sell_price']);
        }
        $this->assign('cart',$data);
        return $this->fetch('user/cart_list');
    }

    public function add(Shopping_cart $cart){
        //psg_good_id
        $id = $this->request->get('id');
        $num = $this->request->get('num');
        session_start();
        $user = $_SESSION['pss']['user'];
        $data = [
            'psc_user_id'=>$user['user_id'],
            'psc_good_id'=>$id,
            'psc_good_num'=>$num
        ];

        $cart->insert($data);
        echo json_encode('添加成功');
    }
    public function delete(Shopping_cart $cart){
        //psc.id
        $id = $this->request->get('id');
        $cart->where('psc_id',$id)->delete();
        $this->success('删除成功');
    }
}