<?php
namespace App\Http\Controllers\User;

use App\Shopping_cate_one;
use App\Shopping_cate_two;
use App\Shopping_good;
use App\Shopping_good_add;
use App\Shopping_good_sell;
use App\Shopping_image;
use myframe\DB;
use myframe\Page;

class IndexController extends CommonController
{
    protected $checkLoginExclude = ['index','getimage','sidebar','selectbycate','getgood','getMySQLVer','logionset'];
    public function index(Shopping_cate_one $onecate, Shopping_cate_two $twocate,Shopping_good $good,Shopping_image $image,Shopping_good_add $add,Shopping_good_sell $sell)
    {
        $id = (int)$this->request->get('id');
        //分页
        $page = (int)$this->request->get('page', 1);
        $size = 3;
        $offset = ($page-1) * $size;
        //获取商品信息
        $data = $good
                ->orderBy('psg_good_id', 'DESC')
                ->limit($offset, $size)
                ->get();
        //添加图片信息
        $this->getimage($data,$image);
        //侧边栏加载
        $this->sidebar($onecate,$twocate,$add,$sell);
        //分页
        $total = $good->count();
        $url = "?id=$id&&page=";
        //user 登录态设置
        $this->logionset();
        $this->assign('id', $id);
        $this->assign('page_html', Page::html($url, $total , $page, $size));
        return $this->fetch('user/index');
    }
    public function getimage($data,Shopping_image $image){
        for ( $i = 0;$i<sizeof($data);$i++)
        {
            $img=$image->where('psi_good_id',$data[$i]['psg_good_id'])
                ->orderBy('psi_img_id', 'ASC')
                ->first(['psi_img','psi_img_id']);
            $data[$i]['psi_img']=$this->data_uri($img['psi_img'],'image/png');
            $data[$i]['psi_img_id']=$img['psi_img_id'];
        }
        $this->assign('good', $data);
    }
    public function sidebar(Shopping_cate_one $onecate, Shopping_cate_two $twocate,Shopping_good_add $add,Shopping_good_sell $sell){
        //获取分类标签
        $cate1 = $onecate->get();
        $cate2 = $twocate->get();
        $cate=[];
        for ($i=0;$i<sizeof($cate1);$i++){
            $cate[$i]['id']=$cate1[$i]['psco_cate_id'];
            $cate[$i]['name']=$cate1[$i]['psco_cate_name'];
        }
        for ($i=0;$i<sizeof($cate2);$i++){
            $j= sizeof($cate);
            $cate[$j]['id']=$cate2[$i]['psct_cate_id'];
            $cate[$j]['name']=$cate2[$i]['psct_cate_name'];
            $j++;
            if ($j==10){
                break;
            }
        }
        //获取最新上架
        $new=$add->orderBy('psga_add_time', 'DESC')->limit(6)->get();
        //获取热门商品
        $hot=$sell->orderBy('psgs_sell_time', 'DESC')->limit(6)->get();

        $this->assign('new', $new);
        $this->assign('hot',$hot);
        $this->assign('cate', $cate);

    }
    public function selectbycate(Shopping_cate_one $onecate, Shopping_cate_two $twocate,Shopping_good $good,Shopping_image $image,Shopping_good_add $add,Shopping_good_sell $sell){
        $id = $this->request->get('id');
        $data=[];
        if (substr($id,0,2)=='CO'){
            $data=$good->where('psg_good_onecate_id',$id)->get();
        }else{
            $data=$good->where('psg_good_twocate_id',$id)->get();
        }
        $this->getimage($data,$image);
        $this->sidebar($onecate,$twocate,$add,$sell);
        $this->logionset();
        return $this->fetch('user/index');
    }
    public function getgood(Shopping_cate_one $onecate, Shopping_cate_two $twocate,Shopping_good $good,Shopping_image $image,Shopping_good_add $add,Shopping_good_sell $sell){
        //psg_good_id
        $id = $this->request->get('id');
        $data =$good->where('psg_good_id',$id)->get();
        $data[0]['count']=$sell->where('psgs_good_id',$id)->count();
        $this->getimage($data,$image);
        $this->sidebar($onecate,$twocate,$add,$sell);
        $this->logionset();
        return $this->fetch('user/show');
    }
    public function index1()
    {
        // 获取系统信息
        $serverInfo = [
            'server_version' => $this->request->server('SERVER_SOFTWARE'),
            'mysql_version' => $this->getMySQLVer(),
            'upload_max_filesize' => ini_get('file_uploads') ? ini_get('upload_max_filesize') : '已禁用',
            'max_execution_time' => ini_get('max_execution_time') . '秒',
            'server_time' => date('Y-m-d H:i:s', time())
        ];
        $this->assign('server_info', $serverInfo);
        return $this->fetch('user/index1');
    }
    protected function getMySQLVer()
    {
        $db = DB::getInstance();
        $res = $db->fetchRow('SELECT VERSION() AS ver');
        return $res ? $res['ver'] : '未知';
    }


}