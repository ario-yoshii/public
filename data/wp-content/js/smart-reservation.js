function send() {

    var year="";
    var month="";
    var day="";
    var stay_num="";
    var capacity="";
    var room_num="";
    var planid="";


    var name="";
    var sex="";
    var favorite="";
    /* 年 */
    if (document.form1.year.value!=""){
        year=escape(document.form1.year.value);
    }
        /* 月 */
    if (document.form1.month.value!=""){
        month=escape(document.form1.month.value);
    }
        /* 日 */
    if (document.form1.day.value!=""){
        day=escape(document.form1.day.value);
    }
        /* 宿泊日数 */
    if (document.form1.stay_num.value!=""){
        stay_num=escape(document.form1.stay_num.value);
    }
        /* 人数 */
    if (document.form1.capacity.value!=""){
        capacity=escape(document.form1.capacity.value);
    }
        /* 部屋数 */
    if (document.form1.room_num.value!=""){
        room_num=escape(document.form1.room_num.value);
    }
            /* プランID */
    if (document.form1.planid.value!=""){
        planid=escape(document.form1.planid.value);
    }


    favorite=escape(favorite);

    /* 取得した値をパラメータにセット(アンパサンド'&'で連結) */
    var pram="year/"+year+"/month/"+month+"/day/"+day+"/stay_num/"+stay_num+"/capacity/"+capacity+"/room_num/"+room_num;
    /* アドレスにパラメータを付加 */
    location.href="https://www.rj-win.jp/USER_SP/search/planroom/group_id/24/hotel_id/77/"+pram+"/member_id//viainn_card_flg/0/plan_id/"+planid;
    return false;
}

function initDateSelects() {
    var d = document;

    var now = new Date();
    var nYear = now.getFullYear();
    var nMonth = now.getMonth();
    var nDate = now.getDate();

    d.getElementById("year").selectedIndex = nYear - nYear;
    d.getElementById("month").selectedIndex = nMonth - nMonth;
    d.getElementById("day").selectedIndex = nDate - 1;
}

