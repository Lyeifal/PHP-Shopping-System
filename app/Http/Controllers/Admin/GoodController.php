<?php
namespace App\Http\Controllers\Admin;

use App\Shopping_cate_one;
use App\Shopping_cate_two;
use App\Shopping_good;
use App\Shopping_image;

class GoodController extends CommonController
{
    //商品信息表
    public function index(Shopping_good $good,Shopping_cate_one $cate_one,Shopping_cate_two $cate_two)
    {
        $data = $good->orderBy('psg_id', 'ASC')->get();
        for ( $i = 0;$i<sizeof($data);$i++)
        {
            $data[$i]['psg_good_onecate']=$cate_one
                ->where('psco_cate_id',$data[$i]['psg_good_onecate_id'])
                ->first(['psco_cate_name'])['psco_cate_name'];
            $data[$i]['psg_good_twocate']=$cate_two
                ->where('psct_cate_id',$data[$i]['psg_good_twocate_id'])
                ->first(['psct_cate_name'])['psct_cate_name'];
        }
        $this->assign('good', $data);
        return $this->fetch('admin/good_list');
    }
    public function edit(Shopping_good $good,Shopping_cate_one $onecate,Shopping_image $image,Shopping_cate_two $twocate){
        //psg_good_id
        $id = $this->request->get('id');
        if ($id) {
            $data = $good->where('psg_good_id', $id)->first();
            //图片数据
            $data['psi_img']=$this->data_uri(
                $image->where('psi_good_id',$data['psg_good_id'])
                ->orderBy('psi_img_id','ASC')
                ->first(['psi_img'])['psi_img']);
            //二级菜单
            $res2 = $twocate->where('psct_onecate_id', $data['psg_good_onecate_id'])->get();
            if (!$data) {
                return '商品不存在！';
            }
        }
        //一级菜单
        $res1 = $onecate->orderBy('psco_sort', 'ASC')->get();
        $this->assign('res1', $res1);
        $this->assign('res2', $res2);
        $this->assign('id', $id); //psg_good_id
        $this->assign('data', $data);
        return $this->fetch('admin/good_edit');
    }
    public function save(Shopping_good $good,Shopping_image $image){
        //psg_good_id
        $id = $this->request->post('id');
        $data = [
            'psg_good_name'=>$this->request->post('psg_good_name',''),
            'psg_cost_price' => $this->request->post('psg_cost_price', 0),
            'psg_sell_price' =>$this->request->post('psg_sell_price'),
            'psg_good_desc'=>$this->request->post('psg_good_desc'),
            'psg_good_unit'=>$this->request->post('psg_good_unit'),
            'psg_good_onecate_id'=>$this->request->post('psg_good_onecate_id'),
            'psg_good_twocate_id'=>$this->request->post('psg_good_twocate_id'),
        ];
        if ($this->request->hasFile('psg_good_image'))
        {
            $content='';
            $img = $this->request->file('psg_good_image');
            //图片名
            $data['psg_good_image'] = $img->file['name'];
            //图片数据
            $fp=fopen($img->file['tmp_name'],'r+');
            $content=fread($fp,filesize($img->file['tmp_name']));
            $image1 = [
                'psi_img'=> $content ,
                'psi_img_name'=>$img->file['name'],
                'psi_img_size'=>($img->file['size']/1024/1024)
            ];
        }
        if ($id) {
            $image1['psi_good_id']=$id;
            if ($this->request->hasFile('psg_good_image'))
            {
                $psi_img_id=str_replace('GO','IM',$id).'001';
                $image2 =$image->where('psi_img_id',$psi_img_id)->get();
                if ($image2){
                    $image->where('psi_img_id',$psi_img_id)->update($image1);
                }else{
                    $image1['psi_img_id'] = $psi_img_id;
                    $image->insert($image1);
                }
            }
            $good->where('psg_good_id', $id)->update($data);
            $this->success('修改完成。');
        } else {
            $data['psg_good_id']='GO'.(1000000001+$good
                        ->orderBy('psg_id','DESC')
                        ->first(['psg_id'])['psg_id']);
            $imgid=$data['psg_good_id'];
            if ($this->request->hasFile('psg_good_image')) {
                $image1['psi_img_id'] = str_replace('GO','IM',$imgid).'001';
                $image1['psi_good_id'] = $imgid;
                $image->insert($image1);
            }
            $data['psg_add_time']=date('Y-m-d h:i:s', time());
            $good->insert($data);
            var_dump($image1);
            $this->success('添加完成。');
        }
    }
    public function delete(Shopping_good $good){
        //psg_good_id
        $id = $this->request->get('id');
        $good->where('psg_good_id',$id)->delete();
            $this->success('删除成功。');
    }

    /***
     * 根据id获取进货价格
     * @param Shopping_good $good
     */
    public function get_costprice(Shopping_good $good)
    {
        //psg_good_id
        $id = $this->request->get('id');
        //二级菜单
        $res2 = $good
            ->where('psg_good_id',$id)
            ->get(['psg_cost_price']);
        echo json_encode($res2);
    }

    /***
     * 根据二级菜单获取二级菜单下货物信息
     * @param Shopping_good $good
     */
    public function get_goodname(Shopping_good $good)
    {
        //psg_good_twocate_id
        $id = $this->request->get('id');
        //商品信息
        $res2 = $good
            ->where('psg_good_twocate_id',$id)
            ->get(['psg_good_id','psg_good_name']);
        echo json_encode($res2);
    }
}