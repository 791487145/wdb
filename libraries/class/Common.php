<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/12/012
 * Time: 14:50
 */
class Common
{
    /**
     * 生成随机码
     *
     * @param int $length
     * @param bool|false $intmode
     * @return string
     */
    static function random($length, $intmode = false)
    {
        $hash = '';
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
        $intmode and $chars = "0123456789";
        $max = strlen($chars) - 1;
        PHP_VERSION < '4.2.0' && mt_srand(( double )microtime() * 1000000);
        for ($i = 0; $i < $length; $i++) {
            $hash .= $chars [mt_rand(0, $max)];
        }
        return $hash;
    }

    /**
     * 字符串星号替换
     *
     * @param str $str
     * @param int $start
     * @param int $length
     * @return str
     */
    static function starReplace($str, $start, $length = 0)
    {
        $i = 0;
        $star = '';
        if ($start >= 0) {
            if ($length > 0) {
                $str_len = strlen($str);
                $count = $length;
                if ($start >= $str_len) {//当开始的下标大于字符串长度的时候，就不做替换了
                    $count = 0;
                }
            } elseif ($length < 0) {
                $str_len = strlen($str);
                $count = abs($length);
                if ($start >= $str_len) {//当开始的下标大于字符串长度的时候，由于是反向的，就从最后那个字符的下标开始
                    $start = $str_len - 1;
                }
                $offset = $start - $count + 1;//起点下标减去数量，计算偏移量
                $count = $offset >= 0 ? abs($length) : ($start + 1);//偏移量大于等于0说明没有超过最左边，小于0了说明超过了最左边，就用起点到最左边的长度
                $start = $offset >= 0 ? $offset : 0;//从最左边或左边的某个位置开始
            } else {
                $str_len = strlen($str);
                $count = $str_len - $start;//计算要替换的数量
            }
        } else {
            if ($length > 0) {
                $offset = abs($start);
                $count = $offset >= $length ? $length : $offset;//大于等于长度的时候 没有超出最右边
            } elseif ($length < 0) {
                $str_len = strlen($str);
                $end = $str_len + $start;//计算偏移的结尾值
                $offset = abs($start + $length) - 1;//计算偏移量，由于都是负数就加起来
                $start = $str_len - $offset;//计算起点值
                $start = $start >= 0 ? $start : 0;
                $count = $end - $start + 1;
            } else {
                $str_len = strlen($str);
                $count = $str_len + $start + 1;//计算需要偏移的长度
                $start = 0;
            }
        }
        while ($i < $count) {
            $star .= '*';
            $i++;
        }
        return substr_replace($str, $star, $start, $count);
    }
    /**
     * 获取域名
     * @return string
     */
    static function getDomain()
    {
        return url();
    }
    /**
     * 检测字符串为json数据
     *
     * @param $str
     * @return bool
     */
    static function isJson($str)
    {
        json_decode($str);
        return (json_last_error() == JSON_ERROR_NONE);
    }


    /**
     * 数组转换成xml
     *
     * @param $arr
     * @return string
     */
    static function arrayToXml($arr)
    {
        $xml = "<xml>";
        foreach ($arr as $key => $val) {
            if (is_numeric($val)) {
                $xml .= "<" . $key . ">" . $val . "</" . $key . ">";
            } else {
                $xml .= "<" . $key . "><![CDATA[" . $val . "]]></" . $key . ">";
            }
        }
        $xml .= "</xml>";
        return $xml;
    }

    /**
     * xml转换成array
     *
     * @param $xml
     * @return mixed
     */
    static function xmlToArray($xml)
    {
        $array_data = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $array_data;
    }

    /**
     * 获取参数
     *
     * @param $queryString
     * @return mixed
     */
    static function getParamByQueryString($queryString)
    {
        parse_str(preg_replace("/(\w+)=/", '$1[]=', $queryString), $arr);
        foreach ($arr as $k => $v) {
            if (count($v) > 1)
                $k = $v;
            else
                $k = $v[0];
        }
        return $arr;
    }
    /**
     * 数组以某个字段的值为键值
     * @param $data
     * @param $key
     * @return array
     */
    static function keyBy($data,$key)
    {
        $array = array();
        foreach($data as $v)
        {
            $array[$v[$key]] = $v;
        }
        return $array;
    }
    /**
     * 数组以某一个字段值为键，并分组
     * @param $proArr
     * @param $money
     * @return string
     */
    static function keyByGroup($data,$key)
    {
        $array = array();
        foreach($data as $v)
        {
            $array[$v[$key]][] = $v;
        }
        return $array;
    }
    static function get_rand($proArr,$money) {
        $result = '';
        //概率数组的总概率精度
        $proSum = array_sum($proArr);
        //概率数组循环
        foreach ($proArr as $key => $proCur) {
            $randNum = $money;
            if ($randNum <= $proCur) {
                $result = $proCur;
                break;
            } else {
                $proSum -= $proCur;
            }
        }
        return $result;
    }







    static function changeTimeType($seconds)
    {
        $one_day = 3600*24;
        if ($seconds>$one_day){
            $day = floor($seconds/$one_day);
            $hour = $seconds%$one_day;
            $hour = floor($hour/3600);
            return $day.'天'.$hour.'时';
        }elseif($seconds>3600){
            $hour = floor($seconds/3600);
            $mimute = $seconds%3600;
            $mimute = floor($mimute/60);
            return $hour.'时'.$mimute.'分';
        }elseif($seconds>60)
        {
            $mimute = floor($seconds/60);
            return $mimute.'分';
        }
        return $seconds.'秒';
    }

    /**
     * 把返回的数据集转换成Tree
     * @param array $list 要转换的数据集
     * @param string $pid parent标记字段
     * @param string $level level标记字段
     * @return array
     */
    static function listToTree($list,$pk='id', $pid = 'pid', $child = '_child', $root = 0)
    {
        // 创建Tree
        $tree = array();
        if(is_array($list)) {
            // 创建基于主键的数组引用
            $refer = array();
            foreach ($list as $key => $data) {
                $refer[$data[$pk]] =& $list[$key];
            }
            foreach ($list as $key => $data) {
                // 判断是否存在parent
                $parentId =  $data[$pid];
                if ($root == $parentId) {
                    $tree[] =& $list[$key];
                }else{
                    if (isset($refer[$parentId])) {
                        $parent =& $refer[$parentId];
                        $parent[$child][] =& $list[$key];
                    }
                }
            }
        }
        return $tree;
    }

    static function group($data,$number)
    {
        $array = [];
        $group_number = floor(count($data)/$number)+1;
        if($group_number==1)
        {
            $array[] = $data;
        }else{
            for($i=0;$i<$group_number;$i++)
            {
                $array[] = array_slice($data,$i*$number,$number);
            }
        }
        return $array;
    }

    //防止跨站攻击
    static public function removeXss($val)
    {
        $val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val);
        $search = 'abcdefghijklmnopqrstuvwxyz';
        $search.= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $search.= '1234567890!@#$%^&*()';
        $search.= '~`";:?+/={}[]-_|\'\\';
        for ($i = 0; $i < strlen($search); $i++) {
            $val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val);
            $val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val);
        }
        $ra1 = array('javascript', 'vbscript', 'expression', 'applet', 'meta','blink', 'link',  'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound');
        $ra2 = array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint',
            'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged',
            'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange',
            'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave',
            'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize',
            'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');
        $ra = array_merge($ra1, $ra2);
        $found = true;
        while ($found == true) {
            $val_before = $val;
            for ($i = 0; $i < sizeof($ra); $i++) {
                $pattern = '/';
                for ($j = 0; $j < strlen($ra[$i]); $j++) {
                    if ($j > 0) {
                        $pattern .= '(';
                        $pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?';
                        $pattern .= '|(&#0{0,8}([9][10][13]);?)?';
                        $pattern .= ')?';
                    }
                    $pattern .= $ra[$i][$j];
                }
                $pattern .= '/i';
                $replacement = substr($ra[$i], 0, 2).'<x>'.substr($ra[$i], 2);
                $val = preg_replace($pattern, $replacement, $val);
                if ($val_before == $val) {
                    $found = false;
                }
            }
        }
        return $val;
    }




    /**
     * 将二维数组中的某个字段取出来
     * @param array $array
     * @param string $fild
     * @return array
     */
    static function getList($array=array(),$fild='id')
    {
        $data = array();
        foreach($array as $v)
        {
            $data[] = isset($v[$fild])?$v[$fild]:$v;
        }
        return $data;
    }

    /**
     * 判断env函数值是否为空
     * @param $key
     * @return bool
     */
    static function checkEnvIsNull($key)
    {
        $value = env($key);
        if($value == '')
        {
            return false;
        }else{
            return true;
        }
    }

    /**
     * 查询env文件中某一变量的值
     * @param $key
     * @return mixed|string
     */
    static function findEnvInfo($key)
    {
        if(array_key_exists($key,$_ENV))
        {
            $envInfo = env($key)?env($key):($_ENV[$key]?$_ENV[$key]:'');
        }else{
            $envInfo = env($key);
        }
        return $envInfo;
    }
    /**
     * @param Request $request
     * @return mixed截取字符串
     */
    static  function cc_msubstr($str, $length, $start = 0, $charset = "utf-8", $suffix = true)
    {
        if (function_exists("mb_substr")) {
            return mb_substr($str, $start, $length, $charset);
        } elseif (function_exists('iconv_substr')) {
            return iconv_substr($str, $start, $length, $charset);
        }
        $re['utf-8'] = "/[/x01-/x7f]|[/xc2-/xdf][/x80-/xbf]|[/xe0-/xef][/x80-/xbf]{2}|[/xf0-/xff][/x80-/xbf]{3}/";
        $re['gb2312'] = "/[/x01-/x7f]|[/xb0-/xf7][/xa0-/xfe]/";
        $re['gbk'] = "/[/x01-/x7f]|[/x81-/xfe][/x40-/xfe]/";
        $re['big5'] = "/[/x01-/x7f]|[/x81-/xfe]([/x40-/x7e]|/xa1-/xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("", array_slice($match[0], $start, $length));
        if ($suffix) {
            return $slice . "..";
        } else {
            return $slice;
        }
    }


    /**
     * @param $dir
     * @return array
     */
    static function listDir($dir)
    {
        $dirs = [];
        if(is_dir($dir))
        {
            if ($dh = opendir($dir))
            {
                while (($file = readdir($dh)) !== false)
                {
                    if((is_dir($dir."/".$file)) && $file!="." && $file!="..")
                    {
                        if(is_file($dir.'/'.$file.'/'.$file.'.jpg'))
                        {
                            $dirs[] = ['themename'=>$file,'themepic'=>'/themes/'.$file.'/'.$file.'.jpg'];
                        }
                    }
                }
                closedir($dh);
            }
        }
        return $dirs;
    }
}
