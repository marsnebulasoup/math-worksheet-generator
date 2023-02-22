<?php
require "include/funcs.php";
function boom()
{
	if (isset($_POST['name'])){$name = $_POST['name'];}
	if (isset($_POST['date'])){$date = 'true';}
	$top = $_POST['top'];
	$bottom = $_POST['bottom'];
	$toparr = explode('-', $top);
	$bottomarr = explode('-', $bottom);
	$GLOBALS['name'] = $name;
	$GLOBALS['date'] = $date;
	$GLOBALS['t1'] = $toparr[0];
	$GLOBALS['t2'] = $toparr[1];
	$GLOBALS['b1'] = $bottomarr[0];
	$GLOBALS['b2'] = $bottomarr[1];
}


switch(true)
{
    case isset($_POST['submit1']):
		boom();
		create($GLOBALS['name'], $GLOBALS['date'], '+', $GLOBALS['t1'], $GLOBALS['t2'], $GLOBALS['b1'], $GLOBALS['b2'],null);
    break;
    case isset($_POST['submit2']):
		boom();
		if (isset($_POST['noknok'])){create($GLOBALS['name'], $GLOBALS['date'], '—', $GLOBALS['t1'], $GLOBALS['t2'], $GLOBALS['b1'], $GLOBALS['b2'],null);}
		else{create($GLOBALS['name'], $GLOBALS['date'], '—', $GLOBALS['t1'], $GLOBALS['t2'], $GLOBALS['b1'], $GLOBALS['b2'],null);}
    break;
    case isset($_POST['submit3']):
		boom();
		create($GLOBALS['name'], $GLOBALS['date'], 'multi', $GLOBALS['t1'], $GLOBALS['t2'], $GLOBALS['b1'], $GLOBALS['b2'],null);
    break;
	case isset($_POST['submit4']):
		boom();
		if($_POST['rand'] != '')
		{
			
			$rand = $_POST['rand'];
			$arr = explode('-', $rand);			
			$t1 = $arr[0];
			$t2 = $arr[1];						
		    create($GLOBALS['name'], $GLOBALS['date'], 'division', $t1, $t2,'rand',null,null);
		}
		elseif($_POST['rand'] == '')
		{
			
			create($GLOBALS['name'], $GLOBALS['date'], 'division',$_POST['bottom'],$_POST['top'], null, null, null);
		}
		else{passthru;}
		break;
	case isset($_POST['sqrt']):
		boom();
		create($GLOBALS['name'], $GLOBALS['date'], 'squareRoot',$_POST['top'],$_POST['bottom'], null, null, null);
		break;
	case isset($_POST['exponents']):
		boom();
		create($GLOBALS['name'], $GLOBALS['date'], 'exponents',$GLOBALS['t1'], $GLOBALS['t2'], $GLOBALS['b1'], $GLOBALS['b2'], ["20","-868","-868","-868","-868"]);
		break;		
	default:
		include "include/layout.php";
		echo '<h1 style="padding-top:200px;" align="center">Error. Please try again. If the problem persists, <a href="contactus">contact us</a></h1>';
		
}
?>