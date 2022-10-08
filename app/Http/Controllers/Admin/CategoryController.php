<?php
namespace App\Http\Controllers\Admin;

use App\Shopping_cate_one;
use App\Shopping_cate_two;
use App\Http\Controllers\Admin\CommonController;

class CategoryController extends CommonController
{
    //一级分类
    public function index_one(Shopping_cate_one $onecate)
    {
        $data1 = $onecate->orderBy('psco_sort', 'ASC')->get();
        $this->assign('onecate', $data1);
        return $this->fetch('admin/category_list_one');
    }
    public function edit_one(Shopping_cate_one $onecate)
    {
        // psco_cate_id
        $id = $this->request->get('id');
        if ($id) {
            $data = $onecate->where('psco_cate_id', $id)->first();
            if (!$data) {
                return '栏目不存在！';
            }
        } else {
            $data = ['psco_cate_name' => '', 'psco_sort' => '0'];
        }
        $this->assign('id', $id);
        $this->assign('data', $data);
        return $this->fetch('admin/category_edit_one');
    }
    public function save_one(Shopping_cate_one $onecate)
    {
        // psco_cate_id
        $id = $this->request->post('id');
        $data = [
            'psco_cate_name' => $this->request->post('name', ''),
            'psco_sort' => $this->request->post('sort', 0)
        ];
        if ($id) {
            $onecate->where('psco_cate_id', $id)->update($data);
            $this->success('修改完成。');
        } else {
            $data['psco_cate_id']='CO'.(1000000001+$onecate->orderBy('psco_id','DESC')->first(['psco_id'])['psco_id']);
            $onecate->insert($data);
            $this->success('添加完成。');
        }
    }
    public function delete_one(Shopping_cate_one $onecate,Shopping_cate_two $twocate)
    {
        // psco_cate_id
        $id = $this->request->get('id');
        if ($onecate->where('psco_cate_id', $id)->delete()) {
            $twocate->where('psct_onecate_id', $id)->update(['psct_onecate_id' => 'CO1000000008']);
            $this->success('删除完成');
        }
        $this->error('删除失败');
    }
    //二级分类
    public function index_two(Shopping_cate_one $onecate, Shopping_cate_two $twocate)
    {
        $data1 = $onecate->orderBy('psco_sort', 'ASC')->get();
        //psco_cate_id 一级分类id
        $oid=$this->request->get('oid', '');
        if ($oid)
        {
            $data2 = $twocate->where('psct_onecate_id',$oid)->orderBy('Psct_cate_id', 'ASC')->get();
        }else
        {
            $data2 = $twocate->groupBy('psct_onecate_id')->orderBy('psct_onecate_id', 'ASC')->get();
        }
        for ( $i = 0;$i<sizeof($data2);$i++)
        {
            foreach ($data1 as $value)
            {
                if ($value['psco_cate_id'] == $data2[$i]['psct_onecate_id'])
                {
                    $data2[$i] = $data2[$i]+ ['psct_onecate'=>$value['psco_cate_name']];
                }
            }
        }
        $this->assign('onecate', $data1);
        $this->assign('twocate', $data2);
        return $this->fetch('admin/category_list_two');
    }
    public function edit_two(Shopping_cate_one $onecate,Shopping_cate_two $twocate)
    {
        //psct_cate_id
        $id = $this->request->get('id');
        $res=$onecate->get(['psco_cate_name','psco_cate_id']);
        if ($id) {
            $data = $twocate->where('psct_cate_id', $id)->first();

            if (!$data) {
                return '栏目不存在！';
            }
        } else {
            $data = [
                'psct_cate_name' => '',
                'psct_sort' => '0',
            ];
        }
        $this->assign('id', $id);
        $this->assign('data', $data);
        $this->assign('res', $res);
        return $this->fetch('admin/category_edit_two');
    }
    public function save_two(Shopping_cate_one $onecate,Shopping_cate_two $twocate)
    {
        //psct_cate_id
        $id = $this->request->post('id');
        //psco_cate_id  psct_onecate_id
        $cid=$this->request->post('cid', 0);
        $data = [
            'psct_cate_name' => $this->request->post('name', ''),
            'psct_onecate_id' => $cid,
            'psct_sort' => $this->request->post('sort', 0)
        ];
        if ($id) {
            $twocate->where('psct_cate_id', $id)->update($data);
            $this->success('修改完成。');
        } else {
            $data['psct_cate_id']='CT'.(1000000001+$twocate->orderBy('psct_id','DESC')->first(['psct_id'])['psct_id']);
            $twocate->insert($data);
            $this->success('添加完成。');
        }
    }
    public function delete_two(Shopping_cate_two $twocate,Shopping_cate_one $onecate)
    {
        //psct_cate_id
        $id = $this->request->get('id');
        $oid=$twocate->where('psct_cate_id', $id)->get(['psct_onecate_id'])['psct_onecate_id'];
        if ($twocate->where('psct_cate_id', $id)->delete()) {

            $this->success('删除完成。');
        }
        $this->error('删除失败');
    }

    /***
     * 当一级菜单变化时发送ajax请求到这个方法
     * 返回该一级菜单下的二级菜单数据
     * @param Shopping_cate_two $twocate
     */
    public function get_twocate(Shopping_cate_two $twocate)
    {
        $psct_onecate_id = $this->request->get('id');
        //二级菜单
        $res2 = $twocate
            ->where('psct_onecate_id',$psct_onecate_id)
            ->orderBy('psct_sort', 'ASC')
            ->get();
        echo json_encode($res2);
    }
}
