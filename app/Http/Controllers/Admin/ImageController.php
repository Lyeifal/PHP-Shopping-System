<?php

namespace App\Http\Controllers\Admin;

use App\Shopping_image;
use App\Shopping_good;

class ImageController extends CommonController
{
    protected $checkLoginExclude = ['getimage','getdata'];

    //展示列表
    public function index(Shopping_image $image,Shopping_good $good)
    {
        $data = $this->getdata('data',$image,$good);
        $this->assign('data', $data);
        return $this->fetch('admin/image_list');
    }

    //展示单独图片
    public function getimage(Shopping_image $image,Shopping_good $good){
        $img = $this->getdata('img',$image,$good);
        echo json_encode($img);
    }

    //获取图片的信息
    public function getdata($data1,$image,$good){
        $data = $image->orderBy('psi_id', 'ASC')->get();
        $img = array();
        for ( $i = 0;$i<sizeof($data);$i++)
        {
            $img[$i]['psi_img_id']=$data[$i]['psi_img_id'];
            $img[$i]['psi_img']=$this->data_uri($data[$i]['psi_img']);
            $data[$i]['psi_img']='';
            $data[$i]['psi_good_name']=$good
                ->where('psg_good_id',$data[$i]['psi_good_id'])
                ->first(['psg_good_name'])['psg_good_name'];
        }
        return $$data1;
    }

    public function delete(Shopping_image $image){
        //psi_img_id
        $id = $this->request->get('id');
        var_dump($id);
        $image->where('psi_img_id',$id)->delete();
        $this->success('删除成功。');
    }

}