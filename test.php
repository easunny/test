<?php
//if(file_exists("E:/xampp/xampp/htdocs/fed/upload/avatar/tmp/1.jpg")) echo "fuck";
//echo strlen("http://movie.douban.com/subject/3068206/");
//$str='碟中谍4,布拉德·伯德,汤姆·克鲁斯 / 杰瑞米·雷纳 / 西蒙·佩吉 / 宝拉·巴顿 / 乔什·哈洛威 / 迈克尔·恩奎斯特 / 亚尼·卡普 / 蕾雅·赛杜 / 弗拉基米尔·马什科夫 / 文·瑞姆斯,动作 / 犯罪 / 惊悚 / 冒险,美国,英语,133,职业特工队：鬼影约章(港) / 不可能的任务：鬼影行动(台) / 不可能的任务4 / 职业特工队4 / 碟中谍：幽灵协议 / M: I 4,2011-12-21,8.2,tt1229238';
/*class Person
{
    //下面是人的成员属性， 都是封装的私有成员
    private $name;       //人的名子
    private $sex;        //人的性别
    private $age;        //人的年龄
    
    //__get()方法用来获取私有属性
    public function __get($property_name)
    {
        echo "在直接获取私有属性值的时候，自动调用了这个__get()方法<br>";
        if (isset($this->$property_name))
        {
            return ($this->$property_name);
        }
        else
        {
            return (NULL);
        }
    }
    
    //__set()方法用来设置私有属性
    public function __set($property_name,$value)
    {
        echo"在直接设置私有属性值的时候，自动调用了这个__set()方法为私有属性赋值<br>";
     
        $this->$property_name=$value;
    }
}


$p1=new Person();
//直接为私有属性赋值的操作， 会自动调用__set()方法进行赋值
$p1->name="张三";
$p1->sex="男";
$p1->age=20;
//直接获取私有属性的值， 会自动调用__get()方法，返回成员属性的值
echo"姓名：".$p1->name."<br>";
echo"性别：".$p1->sex."<br>";
echo"年龄：".$p1->age."<br>";*/
echo md5('admin1337394031');
?> 

/** 
 * @package     BugFree 
 * @version     $Id: FunctionsMain.inc.php,v 1.32 2005/09/24 11:38:37 wwccss Exp $ 
 * 
 * 
 * Return part of a string(Enhance the function substr()) 
 * 
 * @author                  Chunsheng Wang <wwccss@263.net> 
 * @param string  $String  the string to cut. 
 * @param int     $Length  the length of returned string. 
 * @param booble  $Append  whether append "...": false|true 
 * @return string           the cutted string. 
 */ 
function sysSubStr($String,$Length,$Append = false) 
{ 
    if (strlen($String) <= $Length ) 
    { 
        return $String; 
    } 
    else 
    { 
        $I = 0; 
        while ($I < $Length) 
        { 
            $StringTMP = substr($String,$I,1); 
            if ( ord($StringTMP) >=224 ) 
            { 
                $StringTMP = substr($String,$I,3); 
                $I = $I + 3; 
            } 
            elseif( ord($StringTMP) >=192 ) 
            { 
                $StringTMP = substr($String,$I,2); 
                $I = $I + 2; 
            } 
            else 
            { 
                $I = $I + 1; 
            } 
            $StringLast[] = $StringTMP; 
        } 
        $StringLast = implode("",$StringLast); 
        if($Append) 
        { 
            $StringLast .= "..."; 
        } 
        return $StringLast; 
    } 
} 
if(isset($_POST['a'])){
	print_r($_POST['a']);
}
?>
<form action="" method="post">
	<input type="checkbox" name="a[]" value="1" />
    <input type="checkbox" name="a[]" value="2" />
    <input type="checkbox" name="a[]" value="3" />
    <input type="text" name="a[]"  />
    <input type="submit" />
</form>