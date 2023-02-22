<?php
function randomProblem($sign, $t1, $t2, $b1, $b2)
{
	switch($sign)
	{
		case 'division':
			if($b1 == 'rand')
			{
				$top = rand($t1,$t2);
				$bottom = rand($t1,$t2) * $top;			
				$problem = $bottom.' &#247; '.$top;
				if(isset($_POST['alignEqual']))
				{
					if(strlen($problem) == 10){$problem .= '&nbsp;&nbsp;&nbsp;';}
					elseif(strlen($problem) == 11){$problem .= '&nbsp;&nbsp;';}					
					elseif(strlen($problem) == 12){$problem .= '&nbsp;';}				
					else{passthru;}
				}	
				$problem .= ' = ';
				return $problem;
				break;
			}
			elseif (session_status() == PHP_SESSION_ACTIVE) 
			{	
				$key = array_rand($_SESSION['$nums']);
				$num = $_SESSION['$nums'][$key];
				$problem = $num.' &#247; '.$t2;
				if(isset($_POST['alignEqual']))
				{
					if(strlen($problem) == 10){$problem .= '&nbsp;';}
					elseif(strlen($problem) == 12){$problem .= '&nbsp;';}
					else{passthru;}
				}	
				$problem .= ' = ';
				return $problem;	
			}
			else
			{
				session_start();
				$nums = range($t2,$t1,$t2);
				$key = array_rand($nums);
				$num = $nums[$key];
				$_SESSION['$nums'] = $nums;
				$problem = $num.' &#247; '.$t2;
				if(isset($_POST['alignEqual']))
				{
					if(strlen($problem) == 5){$problem .= '&nbsp;&nbsp;';}
					elseif(strlen($problem) == 6){$problem .= '&nbsp;';}
					else{passthru;}
				}	
				$problem .= ' = ';
				return $problem;
				
			}			
		

				
			break;
			
		case 'squareRoot':
			
			if (session_status() == PHP_SESSION_ACTIVE) 
			{
				
				$k = array_rand($_SESSION['arr']);
				$top = $_SESSION['arr'][$k];
				if(strlen($top) == 1){$top = $top.'&nbsp;&nbsp;';}
				elseif(strlen($top) == 2){$top = $top.'&nbsp;';}
				else{passthru;}		
				$problem = '&radic;<span style="border-top:1px solid black;">'.$top.'</span> =';
				return $problem;
				break;
				
			}
			else
			{
				session_start();
				if(!isset($_POST['perfect'])){$arr = range($t1, $t2);$_SESSION['arr']=$arr;}
				else{$arr =  array();$temp = 0;	$count = $t1;while($temp <= $t2){$temp = $count*$count;array_push($arr,$temp);$count++;}array_pop($arr);}
				
				$_SESSION['arr']=$arr;
				$k = array_rand($_SESSION['arr']);
				$top = $_SESSION['arr'][$k];
				if(strlen($top) == 1){$top = $top.'&nbsp;&nbsp;';}
				elseif(strlen($top) == 2){$top = $top.'&nbsp;';}
				else{passthru;}		
				$problem = '&radic;<span style="border-top:1px solid black;">'.$top.'</span> =';
				return $problem;
			}
			break;
		case 'exponents':
			$num = rand($t1,$t2);
			$exp = rand($b1,$b2);
			$problem = $num.'<sup>'.$exp.'</sup>';
			if(isset($_POST['alignEqual']))
			{
				if(strlen($problem) == 13){$problem .= '&nbsp;&nbsp;';}
				elseif(strlen($problem) == 14){$problem .= '&nbsp;';}
				else{passthru;}
			}
			$problem .= ' = ';
			return $problem;
			
			break;
		case 'multi':
			$sign = '&#215;';
			$top = rand($t1, $t2);
			$bottom = rand($b1, $b2);
			if(isset($_POST['noknok']) && $top < $bottom){$tmp=$top;$top=$bottom;$bottom=$tmp;}
			$problem = $top.' '.$sign.' '.$bottom;
			if(isset($_POST['alignEqual']))
			{
				if(strlen($problem) == 10){$problem .= '&nbsp;&nbsp;';}
				elseif(strlen($problem) == 11){$problem .= '&nbsp;';}
				else{passthru;}
			}
			$problem .= ' = ';
			return $problem;
			break;
			
		default:
			$top = rand($t1, $t2);
			$bottom = rand($b1, $b2);
			if(isset($_POST['noknok']) && $top < $bottom){$tmp=$top;$top=$bottom;$bottom=$tmp;}
			$problem = $top.' '.$sign.' '.$bottom;
			if(isset($_POST['alignEqual']))
			{
				if(strlen($problem) == 5){$problem .= '&nbsp;&nbsp;';}
				elseif(strlen($problem) == 6){$problem .= '&nbsp;';}
				else{passthru;}
			}
			$problem .= ' = ';
			return $problem;
			break;
	}
}

//echo randomProblem('division', '1', '1', '1', '1');
//create('Neil', 'true', 'division', '1','12','rand',null,null);
function create($name, $date, $sign, $t1, $t2, $b1, $b2,$toparr)
{
	require_once __DIR__ . '/vendor/autoload.php';
	nameANDdate($name, $date);
	$name = $GLOBALS['name'];
	$date = $GLOBALS['date'];
	if(strpos($GLOBALS['name'], '___') or strpos($GLOBALS['date'], '___'))
	{
		$image_margin = '230';
	}
	else
	{
		$image_margin = '210';
	}
	$data = ('<html><body><div><p >Name'.$name.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Score&nbsp;&nbsp;____________</p><p>Date'.$date.' </p></div><div style="margin-left:'.$image_margin.'px;margin-top:-70px"><img height="60px" src="../imgs/new.png" /></div><hr />');
	$fmt = "20";
	$fmarr = array("10","155","300","440","590");
	$count = 0;
	foreach($fmarr as $value)
	{
		if(isset($toparr)){$fmt = $toparr[$count];}
		
		$data .= '<div style="margin-top:'.$fmt.'px;margin-left:'.$value.'px">';
		for($i=1; $i<=20; $i++)
		{
			$data .= '<p style="padding-bottom:6px;font-family:courier;font-size:11pt;">'.randomProblem($sign, $t1, $t2, $b1, $b2).'</p>';
		}
		$data .= "</div>";
		$fmt = "-855";
		$count++;
	}
	$data .= '<hr style="margin-top:-5px; z-index: -1;"><p style="margin-top:-1px; z-index: -1; font-family:courier;font-size:9pt" align="center">Created by Kevin B. :)</p></body></html>';
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($data);
	$mpdf->Output();
}

function long()
{
	//echo strlen('12345678910123456789101234567891');
	require_once __DIR__ . '/vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML(file_get_contents('test.html'));
	$mpdf->Output();
	
}
//long();

function nameANDdate($name,$date)
{
	if($name == ''){$name = '&nbsp;&nbsp;____________________';}
	else{$name = ': '.$name;$nl = strlen($name);$toadd = 22-$nl;for($i=1; $i<=$toadd; $i++){$name .= '&nbsp;';}}	
	if(!isset($date)){$date = '&nbsp;&nbsp;_____________________';}	
	else{$date = ':&nbsp;&nbsp;';$date .= date("M, d, Y");}
	$GLOBALS['name'] = $name;
	$GLOBALS['date'] = $date;
}
	
	

?>