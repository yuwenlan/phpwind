<?php
$forum=array(
	'1' => array(
		'fid' => '1',
		'fup' => '0',
		'ifsub' => '0',
		'childid' => '1',
		'type' => 'category',
		'name' => '默认分类',
		'style' => '0',
		'f_type' => 'forum',
		'ifcms' => '0',
		'ifhide' => '1',
		'title' => '',
		'metadescrip' => '',
		'descrip' => '',
		'keywords' => '',
		'forumadmin' => '',
	),
	'2' => array(
		'fid' => '2',
		'fup' => '1',
		'ifsub' => '0',
		'childid' => '0',
		'type' => 'forum',
		'name' => '默认版块',
		'style' => '0',
		'f_type' => 'forum',
		'ifcms' => '0',
		'ifhide' => '1',
		'title' => '',
		'metadescrip' => '',
		'descrip' => '',
		'keywords' => '',
		'forumadmin' => '',
	),
);
$pwForumList=array(
	'1' => array(
		'name' => '默认分类',
		'child' => array(
			'2' => '默认版块',
		),
	),
);
$pwForumAllList = array(
);

$ltitle=$lpic=$lneed=array();
/**
* default
*/
$ltitle[1]='default';		$lpic[1]='0';
$ltitle[2]='游客';		$lpic[2]='0';
$ltitle[6]='禁止发言';		$lpic[6]='0';
$ltitle[7]='未验证会员';		$lpic[7]='0';

/**
* system
*/
$ltitle[3]='管理员';		$lpic[3]='21';
$ltitle[4]='总版主';		$lpic[4]='20';
$ltitle[5]='论坛版主';		$lpic[5]='19';
$ltitle[17]='门户编辑';		$lpic[17]='18';

/**
* special
*/
$ltitle[16]='荣誉会员';		$lpic[16]='16';

/**
* member
*/
$ltitle[8]='新手上路';		$lpic[8]='1';		$lneed[8]='0';
$ltitle[9]='侠客';		$lpic[9]='2';		$lneed[9]='100';
$ltitle[10]='骑士';		$lpic[10]='3';		$lneed[10]='300';
$ltitle[11]='圣骑士';		$lpic[11]='4';		$lneed[11]='600';
$ltitle[12]='精灵王';		$lpic[12]='5';		$lneed[12]='1000';
$ltitle[13]='风云使者';		$lpic[13]='6';		$lneed[13]='5000';
$ltitle[14]='光明使者';		$lpic[14]='7';		$lneed[14]='10000';
$ltitle[15]='天使';		$lpic[15]='8';		$lneed[15]='50000';


$faces=array(
	'default'=>array(
		'name'=>'默认表情',
		'child'=>array('2','3','4','5','6','7','8','9','10','11','12','13','14','15',),
	),
	'wangwang'=>array(
		'name'=>'旺旺',
		'child'=>array('152','151','150','149','148','147','146','145','144','143','142','141','140','139','138','137','136','135','134','133','132','131','130','129','128','127','126','125','124','123','122','121','120','119','118','117','116',),
	),
);
$face=array(
	'2'=>array('default/1.gif','',''),
	'3'=>array('default/2.gif','',''),
	'4'=>array('default/3.gif','',''),
	'5'=>array('default/4.gif','',''),
	'6'=>array('default/5.gif','',''),
	'7'=>array('default/6.gif','',''),
	'8'=>array('default/7.gif','',''),
	'9'=>array('default/8.gif','',''),
	'10'=>array('default/9.gif','',''),
	'11'=>array('default/10.gif','',''),
	'12'=>array('default/11.gif','',''),
	'13'=>array('default/12.gif','',''),
	'14'=>array('default/13.gif','',''),
	'15'=>array('default/14.gif','',''),
	'152'=>array('wangwang/9.gif','',''),
	'151'=>array('wangwang/8.gif','',''),
	'150'=>array('wangwang/7.gif','',''),
	'149'=>array('wangwang/6.gif','',''),
	'148'=>array('wangwang/5.gif','',''),
	'147'=>array('wangwang/4.gif','',''),
	'146'=>array('wangwang/37.gif','',''),
	'145'=>array('wangwang/36.gif','',''),
	'144'=>array('wangwang/35.gif','',''),
	'143'=>array('wangwang/34.gif','',''),
	'142'=>array('wangwang/33.gif','',''),
	'141'=>array('wangwang/32.gif','',''),
	'140'=>array('wangwang/31.gif','',''),
	'139'=>array('wangwang/30.gif','',''),
	'138'=>array('wangwang/3.gif','',''),
	'137'=>array('wangwang/29.gif','',''),
	'136'=>array('wangwang/28.gif','',''),
	'135'=>array('wangwang/27.gif','',''),
	'134'=>array('wangwang/26.gif','',''),
	'133'=>array('wangwang/25.gif','',''),
	'132'=>array('wangwang/24.gif','',''),
	'131'=>array('wangwang/23.gif','',''),
	'130'=>array('wangwang/22.gif','',''),
	'129'=>array('wangwang/21.gif','',''),
	'128'=>array('wangwang/20.gif','',''),
	'127'=>array('wangwang/2.gif','',''),
	'126'=>array('wangwang/19.gif','',''),
	'125'=>array('wangwang/18.gif','',''),
	'124'=>array('wangwang/17.gif','',''),
	'123'=>array('wangwang/16.gif','',''),
	'122'=>array('wangwang/15.gif','',''),
	'121'=>array('wangwang/14.gif','',''),
	'120'=>array('wangwang/13.gif','',''),
	'119'=>array('wangwang/12.gif','',''),
	'118'=>array('wangwang/11.gif','',''),
	'117'=>array('wangwang/10.gif','',''),
	'116'=>array('wangwang/1.gif','',''),
);

?>