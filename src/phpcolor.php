<?php
/**
PHPCL_ESC ����ESC,
���뷽��:Ctl V ,ESC
�˽�����033
ʮ������27
*/
define("PHPCL_ESC",chr(27));
define("PHPCL_OFF",0);
define("PHPCL_HIGHLIGHT",1);
define("PHPCL_UNDERLINE",4);
define("PHPCL_FLICKER",5);
define("PHPCL_INVERSE",7);
define("PHPCL_HIDDEN",8);

define("PHPCL_BLACK",0);
define("PHPCL_RED",1);
define("PHPCL_GREEN",2);
define("PHPCL_YELLOW",3);
define("PHPCL_BLUE",4);
define("PHPCL_MAUVE",5);
define("PHPCL_CYAN",6);
define("PHPCL_WHITE",7);

/**
0 OFF
1 ������ʾ
4 underline
5 ��˸
7 ������ʾ
8 ���ɼ�
*/
$attrs=array(0,1,4,5,7);
/**
����ɫ:
30:��ɫ
31:red
32:green
33:ɵ������������ɫ..
34:��ɫ
35:��ɫ
36:Cyan
37:�Ұ�
*/
$fores=array(30,31,32,33,34,35,36,37);
/**
����:
40:��ɫ
41:red
42:green
43:ɵ������������ɫ..
44:��ɫ
45:��ɫ
46:Cyan
47:�Ұ�
*/
$backs=array(40,41,42,43,44,45,46,47);

function phpcl_str($str,$attr,$fore,$back){
	$fore=$fore+30;
	$back=$back+40;
	$tmp=PHPCL_ESC."[".$attr.";".$fore.";".$back."m";
	$tmp.=$str;
	$tmp.=PHPCL_ESC."[0;0;0m";
	return $tmp;
}
/**
@example:
$argc=$_SERVER["argc"];
$argv=$_SERVER["argv"];
print phpcl_str("hello",PHPCL_UNDERLINE,PHPCL_YELLOW,PHPCL_BLACK);
*/
?>

