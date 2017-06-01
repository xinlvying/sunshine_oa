/**
 * Created by xin on 2017/5/26.
 */
//初始化窗口
window.onload = initAll();
//判断周次函数
function initAll() {
    var start_date = new Date(2017,1,27);//设置校历开始时间
    var start_time = start_date.getTime();//获取校历开始时间距离1970 年 1 月 1 日的毫秒数
    var current_date = new Date();//获取当前时间
    var current_time = current_date.getTime();//1970 年 1 月 1 日当前日期的毫秒数
    var current_date_formated = formatTime(current_date);//格式化当前日期为"XX年XX月XX日"，便于显示
    var current_week_day = current_date.getDay();//获取当周天数
    var days = Math.floor((current_time-start_time)/(24*60*60*1000));//计算与校历开始时间的天数差

    switch (current_week_day)//判断星期
    {
        case 0:
            current_week_day = "星期日";
            break;
        case 1:
            current_week_day = "星期一";
            break;
        case 2:
            current_week_day = "星期二";
            break;
        case 3:
            current_week_day = "星期三";
            break;
        case 4:
            current_week_day = "星期四";
            break;
        case 5:
            current_week_day = "星期五";
            break;
        case 6:
            current_week_day = "星期六";
            break;
    }

    var week_element = document.getElementById("week");
    var week_num = parseInt(days/7)+1;//周次取整
    for (var i=1; i<=week_num; i++)
    {
        week_element.innerHTML = "你好,今天是"+current_date_formated+",第"+week_num+"周,"+current_week_day;
    }
    setSelectChecked(week_num);
    rotaChange(week_num);

}
//日期格式化函数
function formatTime(date) {
    var month = date.getMonth()+1;
    var current_date_formated = date.getFullYear()+"年"+month+"月"+date.getDate()+"日";
    return current_date_formated;
}

//单双周值班表改变函数
function rotaChange(week_check_num) {
    var element = document.getElementById("monday_night");
    if (week_check_num%2!=0)
    {
        element.textContent = "陈老师";
    }
    else
    {
        element.textContent = "夏老师";
    }
}

//根据当前周动态改变select默认选项函数
function setSelectChecked(checkValue){
    var select = document.getElementById("select");
    var option = document.getElementById("select").getElementsByTagName("option");
    for(var i=0; i<select.options.length; i++)
    {
        if(select.options[i].value == checkValue)
        {
            select.options[i].selected = true;
            option[i].className = 'page_week';
            break;
        }
        else
            option[i].className = "null";
    }
}


function select_onclick(obj) {
    // document.write(obj);
    var option = document.getElementById("select").getElementsByTagName("option");
    for (var i=0; i<obj.options.length; i++)
    {
        if (obj.options[i].selected == true)
        {
            var select_value = obj.options[i].value;
            rotaChange(select_value);
            option[i].className = 'page_week';
            // document.write(option.className);
            // var xmlhttp;
            // if (window.XMLHttpRequest)
            // {
            //     //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
            //     xmlhttp=new XMLHttpRequest();
            // }
            // else
            // {
            //     // IE6, IE5 浏览器执行代码
            //     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            // }
            // xmlhttp.onreadystatechange=function()
            // {
            //     if (xmlhttp.readyState==4 && xmlhttp.status==200)
            //     {
            //         document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
            //     }
            // }
            // xmlhttp.open("GET","/try/ajax/ajax_info.txt",true);
            // xmlhttp.send();
        }
        else
            option[i].className = "null";
    }
}
//
// function reserveAjax() {
//     var reserve_button = document.getElementsByClassName("reserve_button");
//     reserve_button.onclick = function () {
//         var xmlhttp;
//         if (window.XMLHttpRequest)
//         {
//             //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
//             xmlhttp=new XMLHttpRequest();
//         }
//         else
//         {
//             // IE6, IE5 浏览器执行代码
//             xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
//         }
//         xmlhttp.onreadystatechange=function()
//         {
//             if (xmlhttp.readyState==4 && xmlhttp.status==200)
//             {
//                 document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
//             }
//         }
//         xmlhttp.open("GET","/try/ajax/ajax_info.txt",true);
//         xmlhttp.send();
//     }
// }