<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

            header("content-type:text/html;charset=utf-8");
	//$ip=$this->getIP();
    	//$data=$this->getCity($ip);
            // $time=microtime(true);
          //$vo='cs';
             //$time = explode ( " ", microtime () );
          //$time=$this->getmicrotime();
           
            //$a="<a href='/Public/".$vo."'"." data-size='800x1142'".">";
         //  dump($vo);
           //$time=time();
           //$shu=date('Y-m-d H:i:s',$time);
          //  dump($time);dump($shu);exit();
            // $this->assign('time',$time);
    	//$this->assign('data',$data);
            $url=$_SERVER['QUERY_STRING'];
            $url=$_SERVER;
          /*  $salt='pigcmso2oCashier';
             $pass=md5(md5('123456'.'_'.$salt).$salt);*/

           echo "hello cs";exit();
            $file_get_contents($url);
   	$this->display();
    }

/**
 * 获取用户真实 IP
 */
public function getIP(){
    static $realip;
    if (isset($_SERVER)){
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $realip = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $realip = $_SERVER["REMOTE_ADDR"];
        }
    }else {
        if (getenv("HTTP_X_FORWARDED_FOR")){
            $realip = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("HTTP_CLIENT_IP")) {
            $realip = getenv("HTTP_CLIENT_IP");
        } else {
            $realip = getenv("REMOTE_ADDR");
        }
    }  
    return $realip;
} 

 
/**
* 获取 IP 地理位置
* 淘宝IP接口
* @Return: array
*/
public function getCity($ip)
{
 $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
 $ip=json_decode(file_get_contents($url));
 if((string)$ip->code=='1'){
 return false;
 }
 $data = (array)$ip->data;

 return $data;
}

/**
 * 获取毫秒
 */
public function getmicrotime()
{
 list($usec, $sec) = explode(" ",microtime());
 return ((float)$usec + (float)$sec);

}



}