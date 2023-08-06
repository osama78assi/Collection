<?php
//This Function To Know The String Is Empty Or Not
    function emp($str)
    {
        $cond;
        if($str == "")
        {
            $cond = true; 
        }
        else{
            $cond = false;
        }
        return $cond;
    }
//This Function To Know The Length Of The String
    function length($str)
    {
        $len = 0;
        while(!empty($str[$len]))
        {
            $len++;
        }
        return $len;
    }
//This Function To Know The Length Of The Array
    function array_length($arr)
    {
        $len = 0;
        foreach($arr as $key => $index)
        {
            $len++;
        }
        return $len;
    }
//This Function To Repeat String Depend On The Times That The User Will Use
    function rep_str($str, $times = 1)
    {
        $nStr = "";
        for($i = 0; $i < $times; $i++):
            $nStr .= " $str";
        endfor;
        return $nStr;
    }
//This Function To Split The Characters Of The String And Store It Into Array
    function str_to_arr($str, $separ = "")
    {
        $arr = array();
        $counter = 0;
        $nstr = "";
        for($i = 0; $i < length($str); $i++)
        {
            $nstr .= $str[$i];
            if($separ == "")
            {
                $arr[$i] = $nstr;
                $nstr = "";
            }
            else if($str[$i] == $separ)
            {
                $counter++;
                $nstr = "";
                
            }
            else
            {
                $arr[$counter] = $nstr;
            }
        }
        return $arr;
    }
//This Function To Store The Array Indexs Into String With Separator
    function arr_to_str($arr, $separ = " ")
    {
        $str = "";
        for($i = 0; $i < array_length($arr); $i++)
        {
            if($i == 0)
            {
                $str .= $arr[$i];
            }
            else
            {
                $str .= $separ . $arr[$i];
            }
        }
        return $str;
    }
//This Function Will Add An Elements To The Array
    function add_element($arr, ...$str)         
    {
        $total = array_length($arr) + array_length($str);
        $counter = 0;
        for($i = 0; $i < $total; $i++)
        {
            if($i == array_length($arr))
            {
                $arr[$i] = $str[$counter];
                $counter++;
            }
        }
        return $arr;
    }
//This Function Will Values Of First Array Is Keys For Second Array
    function replace_key($arr, $keys)
    {
        $arrayy = array();
        for($i = 0; $i < array_length($arr); $i++)
        {
            $arrayy[$arr[$i]] = $keys[$i]; 
        }        
        return $arrayy;
    }

//This Function Count Every Index How Many Time Repeated
    function Rindex($arr)
    {
        $rtimes = array();
        $itimes = array();
        $finallength = 0;
        for($i = 0; $i < array_length($arr); $i++)
        {
            $counter = 0;
            for($j = 0; $j < array_length($arr); $j++)
            {
                if($arr[$i] == $arr[$j])
                {
                    $counter++;
                }
            }
            if($finallength == 0)
            {
                $rtimes = add_element($rtimes, $counter);
                $itimes = add_element($itimes, $arr[$i]);
                $finallength++;
            }
            else 
            {
                $count = 0;
                for($j = 0; $j < array_length($itimes); $j++)
                {
                    if($arr[$i] == $itimes[$j])
                    {
                        $count++;
                    }
                }
                if($count == 0)
                {
                    $rtimes = add_element($rtimes, $counter);
                    $itimes = add_element($itimes, $arr[$i]);
                    $finallength++;
                }
            }
        }
        $finalarr = replace_key($itimes, $rtimes);
        return $finalarr;
    }
//This Function Will Make The Value Key And Key Is Value
    function setrev($arr)
    {
        $narr = array();
        foreach($arr as $key => $val)
        {
            $narr[$val] = $key;
        }
        return $narr;
    }
//This Function Will Sort An Array Ascending
    function pubsort($arr)
    {
        for($i = 0; $i < array_length($arr); $i++)
        {
            for($j = 0; $j < array_length($arr); $j++)
            {
                $way = "";
                if(ord($arr[$i][0]) <= ord($arr[$j][0]))
                {
                    $way = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $way;
                }    
            }
        }
        return $arr;
    }
//This Function Will Sort An Array unAscending
    function pubusort($arr)
    {

        for($i = 0; $i < array_length($arr); $i++)
        {
            for($j = 0; $j < array_length($arr); $j++)
            {
                $way = "";
                if(ord($arr[$i][0]) >= ord($arr[$j][0]))
                {
                    $way = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $way;
                }    
            }
        }
        return $arr;
    }
//This Function To Check The Value If It's In The Array Or Not
    function search($arr, $value)
    {
        $found = false;
        for($i = 0; $i < array_length($arr); $i++)
        {
            if($value == $arr[$i])
            {
                $found = true;
            }
        }
        return $found;
    }
//This Function To Shuffle The Array
    function shufle($arr)
    {
        $final_array = array();
        $indexs = array();
        $counter = 0;
        while(true)
        {
            $x = rand(0, array_length($arr) - 1);
            if($counter == 0)
            {
                $indexs[$counter] = $x;
                $counter++;
            }
            else
            {
                if(!search($indexs, $x))
                {
                    $indexs[$counter] = $x;
                    $counter++;
                }
            }
            if($counter == array_length($arr))
            {
                break;
            }
        }
        foreach($indexs as $key => $val)
        {
            $final_array[$key] = $arr[$val];
        }
        return $final_array;
    }
//This Function To Change The Permissions Of Text File Or We Can Change The Extension
function change_permissions($dirName)
{
    if(is_file($dirName))
    {
        if(pathinfo($dirName, PATHINFO_EXTENSION) == "txt")
        {

            chmod($dirName, 0700);
            clearstatcache();
            return "Changed Successfully";
        }
        else
        {
            return "This File Isn't A Text File";
        }
    }
    else
    {
        return "This In't A File";
    }
}
//This Function To Shuffle The String
function strshffl($str)
{
    $arr = str_to_arr($str);
    $arr = shufle($arr);
    return arr_to_str($arr, "");
}
echo strshffl("osama");
?>
