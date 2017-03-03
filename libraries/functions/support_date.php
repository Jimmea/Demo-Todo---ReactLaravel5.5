<?php

function getArrangeDate($startTime, $endTime)
{
    $startTime      = date_create($startTime);
    $endTime        = date_create($endTime);
    $diff           = date_diff($startTime,$endTime);

    return [
        'month' => $diff->m,
        'week'  => (int)(($diff->d)/7),
        'day'   => (($diff->d)%7),
        'hour'  => $diff->h,
    ];
}

function dateCurrency($date)
{
    return date('Y-m-d', strtotime($date));
}

function convert_datetime($strDate = "", $strTime = "")
{
    //Break string and create array date time
    $array_replace	= array("/", ":");
    $strDate		= str_replace($array_replace, "-", $strDate);
    $strTime		= str_replace($array_replace, "-", $strTime);
    $strDateArray	= explode("-", $strDate);
    $strTimeArray	= explode("-", $strTime);
    $countDateArr	= count($strDateArray);
    $countTimeArr	= count($strTimeArray);

    //Get Current date time
    $today			= getdate();
    $day			= $today["mday"];
    $mon			= $today["mon"];
    $year			= $today["year"];
    $hour			= $today["hours"];
    $min			= $today["minutes"];
    $sec			= $today["seconds"];

    //Get date array
    switch($countDateArr)
    {
        case 2:
            $day		= intval($strDateArray[0]);
            $mon		= intval($strDateArray[1]);
            break;
        case $countDateArr >= 3:
            $day		= intval($strDateArray[0]);
            $mon		= intval($strDateArray[1]);
            $year 	    = intval($strDateArray[2]);
            break;
    }
    //Get time array
    switch($countTimeArr)
    {
        case 2:
            $hour		= intval($strTimeArray[0]);
            $min		= intval($strTimeArray[1]);
            break;

        case $countTimeArr >= 3:
            $hour		= intval($strTimeArray[0]);
            $min		= intval($strTimeArray[1]);
            $sec		= intval($strTimeArray[2]);
            break;
    }
    //Return date time integer
    if(@mktime($hour, $min, $sec, $mon, $day, $year) == -1) return $today[0];
    else return mktime($hour, $min, $sec, $mon, $day, $year);
}

function convert_date_fromdb($date, $sep="-")
{
    $arrDate		= explode("-", $date);
    $strReturn	= "";
    if(count($arrDate) == 3)
    {
        $strReturn	= $arrDate[2] . $sep . $arrDate[1] . $sep . $arrDate[0];
    }
    return $strReturn;
}

function get_datetime($language=1, $getDay=1, $getDate=1, $getTime=1, $timeZone="GMT+7", $intTimestamp=0)
{
    if($intTimestamp > 0)
    {
        $today	    = getdate($intTimestamp);
        $day		= $today["wday"];
        $date		= date("d/m/Y", $intTimestamp);
        $time		= date("H:i", $intTimestamp);
    }
    else
    {
        $today	= getdate();
        $day		= $today["wday"];
        $date		= date("d/m/Y");
        $time		= date("h:i");
    }
    switch($language)
    {
        case 1: $dayArray = array("Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"); break;
        case 2: $dayArray = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"); break;
        default:$dayArray = array("Chủ nhật", "Thứ hai", "Thứ ba", "Thứ tư", "Thứ năm", "Thứ sáu", "Thứ bảy"); break;
    }

    $strDateTime = "";
    for($i=0; $i<=6; $i++)
    {
        if($i == $day){
            if($getDay	!= 0)	$strDateTime .= $dayArray[$i] . ", ";
            if($getDate	!= 0)	$strDateTime .= $date . ", ";
            if($getTime	!= 0)	$strDateTime .= $time . " ";
            $strDateTime .= $timeZone;
            if(substr($strDateTime, -2, 2) == ", ") $strDateTime = substr($strDateTime, 0, -2);
            return $strDateTime;
        }
    }
}

function today_yesterday($td_day, $td_month, $td_year, $ye_day, $ye_month, $ye_year, $compare_time)
{
    $ct = getdate($compare_time);
    //Kiểm tra so với hôm nay
    if($td_day==$ct["mday"] && $td_month==$ct["month"] && $td_year==$ct["year"]) return tdt("Hom_nay,_luc") . " " . date("H:i", $compare_time) . " GMT-6";
    if($ye_day==$ct["mday"] && $ye_month==$ct["month"] && $ye_year==$ct["year"]) return tdt("Hom_qua,_luc") . " " . date("H:i", $compare_time) . " GMT-6";

    //Nếu không trùng thì return lại
    return date("d/m/Y - H:i",$compare_time) . " GMT-6";
}

// Đổi ngày ra Hôm nay, Hôm qua....
function today_yesterday_v2($compare_time, $type=0)
{
    $today		= getdate();
    $yesterday	= getdate(strtotime("yesterday"));
    $ct			= getdate($compare_time);

    if($type == 0)
    {
        // Nếu thời gian nhỏ hơn 10h thì show kiểu "10 giờ 30 phút" trước
        $intTime	= time() - $compare_time;
        if($intTime / 3600 <= 10) return generate_duration($intTime, 3, "1 phút") . " trước";
    }

    // Kiểm tra so với hôm nay
    if($today["mday"]==$ct["mday"] && $today["month"]==$ct["month"] && $today["year"]==$ct["year"]) return "Hôm nay, lúc " . date("H:i", $compare_time);
    if($yesterday["mday"]==$ct["mday"] && $yesterday["month"]==$ct["month"] && $yesterday["year"]==$ct["year"]) return "Hôm qua, lúc " . date("H:i",$compare_time);
    // Nếu không trùng thì return lại
    return date("d/m/Y - H:i", $compare_time);
}

function generate_duration($int_time, $type=4, $default="")
{
    $strReturn	= "";
    $arrTime		= array (86400	=> "ngày",
        3600	=> "giờ",
        60		=> "phút",
        1		=> "giây",
    );
    $i = 0;
    foreach($arrTime as $key => $value)
    {
        $i++;
        if($int_time >= $key)
        {
            $strReturn .= " " . format_number(intval($int_time/$key)) . " " . $value;
            $int_time = $int_time % $key;
        }
        if($i >= $type) break;
    }
    if($strReturn == "") $strReturn = $default;
    return trim($strReturn);
}

function validate_date($strDate)
{
    $strDate		= str_replace("/","-",$strDate);
    $strDateArray	= explode("-",$strDate);
    $countDateArr	= count($strDateArray);
    if($countDateArr == 3)
    {
        if(checkdate(intval($strDateArray[1]), intval($strDateArray[0]), intval($strDateArray[2]))) return 1;
        else return 0;
    }
    else return 0;
}

function array_date($min, $max)
{
    $arrReturn	= array();
    if($min == $max)
    {
        $arrReturn[] = array(date("m", $min), date("Y", $min));
    }
    else
    {
        $minM	= date("m", $min);
        $minY	= date("Y", $min);
        $maxM	= date("m", $max);
        $maxY	= date("Y", $max);
        $minDateStr	= "01/" . $minM . "/" . $minY;
        $maxDateStr	= "01/" . $maxM . "/" . $maxY;
        $minDateInt	= convert_datetime($minDateStr, "00:00:00") + 1296000;
        $maxDateInt	= convert_datetime($maxDateStr, "00:00:00") + 1296000;

        for($i=$minDateInt; $i<=$maxDateInt; $i+=2419200){
            $arrReturn[] = array(date("m", $i), date("Y", $i));
        }
    }
    //print_r($arrReturn);
    return $arrReturn;
}

function get_start_end_month($month, $year)
{
    $array_return = array();
    for($i=31; $i>=28; $i--)
    {
        if(checkdate($month, $i, $year))
        {
            $array_return["start"]	= convert_datetime("01/" . $month . "/" . $year, "00:00:00");
            $array_return["end"]		= convert_datetime($i . "/" . $month . "/" . $year, "23:59:59");
            break;
        }
    }
    return($array_return);
}