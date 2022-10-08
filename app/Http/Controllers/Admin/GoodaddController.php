<?php

namespace App\Http\Controllers\Admin;

use App\Shopping_cate_one;
use App\Shopping_cate_two;
use App\Shopping_good;
use App\Shopping_good_add;

class GoodaddController extends CommonController
{
    public function index(Shopping_good_add $add){
        $data = $add->orderBy('psga_add_time', 'DESC')->get();
        $this->assign('data', $data);
        return $this->fetch('admin/good_add_list');
    }
    public function edit(Shopping_cate_one $cate_one,Shopping_cate_two $cate_two,Shopping_good $good)
    {
        //psga_id
        $id = $this->request->get('id');
        //原本打算是 在数据库写一个触发器 更新good_add 表后触发 判断进货数量 增加数值或减少数值
        //同时修改good表中库存，太累了 阉割了 所以不可编辑。
        //edit 页面会有一个添加新商品的选项
        //一级分类菜单
        $res1 = $cate_one->orderBy('psco_sort', 'ASC')->get();
        //二级分类菜单
        $res2 = $cate_two->orderBy('psct_sort', 'ASC')->get();
        //商品选项
        $data = $good->get(['psg_good_id','psg_good_name']);
        $this->assign('res1', $res1);
        $this->assign('res2', $res2);
        $this->assign('id', $id); //psga_id
        $this->assign('data', $data);
        return $this->fetch('admin/good_add_edit');
    }
    public function save(Shopping_good_add $add,Shopping_good $good)
    {
        //psg_good_id
        $psg_good_id=$this->request->post('psg_good_id','');
        $count=$this->request->post('psga_add_count');
        $goods=$good->where('psg_good_id',$psg_good_id)
            ->first(['psg_good_count','psg_good_name']);
        $data = [
            'psga_good_id'=>$psg_good_id,
            'psga_good_name' => $goods['psg_good_name'],
            'psga_good_price' =>$this->request->post('psg_cost_price'),
            'psga_add_time'=>$this->request->post('psga_add_time'),
            'psga_add_count'=>$count,
            'psga_order_id'=>$this->request->post('psga_order_id'),
        ];
        $add->insert($data);
        $count+=$goods['psg_good_count'];
        $good->where('psg_good_id',$psg_good_id)
            ->update(['psg_good_count'=>$count]);
        $this->success('添加完成。');
    }
    public function delete(Shopping_good_add $add)
    {
        //psga_id
        $id = $this->request->get('id');
        $add->where('psga_id',$id)->delete();
        $this->success('删除成功。');
    }
}