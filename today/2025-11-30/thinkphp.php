<?php
namespace app\controller;

use app\BaseController;

//使用数据库
use think\facade\Db;

class Test1 extends BaseController
{
    public function user($id)
    {
        //原生查询
        //此时:叫占位符
        $sql="select `name`,`skill` from `student` where `id`<:id limit :num";
        $map=['id'=>$id,'num'=>2];
        $res=Db::query($sql,$map);
        dump($res);
    }
}
