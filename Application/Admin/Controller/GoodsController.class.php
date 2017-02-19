<?php
namespace Admin\Controller;
use Component\AdminController;
class GoodsController extends AdminController {
    public function index()
    {

    }
    //
    public function showlist()
    {
        $goods=D("goods");

        // 1.获取当前记录总条数
        $total=$goods->count();
        $per=6;
        // 2.实例化分页对象
        $page=new \Component\Page($total,$per); //autoload
        // 3.拼装sql语句获得每页信息
        $sql="select * from goods ".$page->limit; //sql原生语句在结束字符串时需要空格
        $info=$goods ->query($sql);

        // 4.获得页码列表
        $pagelist=$page->fpage();

        $this->assign('info',$info);
        $this->assign('pagelist',$pagelist);
       $this->display();
    }

    public function add()
    {
        $goods=D('goods');
        if(!empty($_POST))
        {
            //判断是否有附件上传
            //如果有则实例化upload,把附件上传到服务器指定位置
            //然后把附件的路径名获得到，存入$_POST
            if(!empty($_FILES))
            {
                $config=array(
                    'rootPath'=>'./Public/',  //根目录
                    'savePath'=>'upload/',    //保存路径
                );
                $upload=new \Think\Upload($config);
                $z=$upload->uploadOne($_FILES['goods_img']);
                if(!$z){
                     echo $upload->getError();
                }else{
                     //拼装图片的路径名
                    $bigimg=$z['savepath'].$z['savename'];
                    $_POST['goods_big_img']=$bigimg;

                    //把已经上传好的图片制作缩略图Image.class.php
                    $image=new \Think\Image();
                    //open(); 打开图像资源，通过路径名找到图像
                    $srcimg=$upload->rootPath.$bigimg;
                    $image->open($srcimg);
                    $image->thumb(150,150);   //按照比例自动缩小
                    $smallimg=$z['savepath']."small_".$z['savename'];
                    $image->save($upload->rootPath.$smallimg);

                    $_POST['goods_small_img']=$smallimg;
                }

            }

            //tp框架实现数据搜集的方法，数据模型对象->create();
          $goods->create();
           $z=$goods->add();
           if($z){
               echo "success";
               $this->success('添加商品成功',U('Goods/showlist'));
           }else{
               echo "failure";
               $this->success('添加商品失败',U('Goods/showlist'));
           }
        }else{
            $this->display();
        }

    }

    public  function upd()
    {


        $this->display();
    }
    public function delete()
    {

    }
}