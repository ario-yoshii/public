<!--
var term = 6; // 表示月数
var today;
var today = new Date();
var cYear = today.getFullYear();
var cMonth = today.getMonth();
var cDate = today.getDate();
var i;
var std;
var optC;
var optN;
var ival;
for (i=0; i<term; i++) {
  cMonth++;
  if (cMonth > 12) {
    cMonth = 1;
    cYear++;
  }
  fcMonth = cMonth;
  if (cMonth < 10) { fcMonth = "0" + cMonth; }
  vcMonth = cMonth * 1;
  if (i == 0) { std = "selectedi=\"selected\""; }
  else { std = ""; }
  optC = optC + "<option value='"+cYear+"-"+fcMonth+"' "+std+">"+cYear+"年"+vcMonth+"月</option>\n";
}

for(i=1; i<=31; i++){
  if (i < 10 ) {
    ival = "0" + i;
  } else {
    ival = i;
  }
  if(i == cDate) { std = "selected=\"selected\""; }else{ std = ""; }
  optN = optN + "<option value='"+ival+"' "+std+">"+i+"日</option>\n";
}

function init() {
	form = document.search_frm;

	if(form.search_type[0].checked) {
		form.action = form.plan_act.value;
	} else {
		form.action = form.room_act.value;
	}

}
function change(act) {
	document.search_frm.action = act;
}

function checkDate() {
	var ym = Array();
	var yearmonth = document.search_frm.yearmonth.value;
	var day = document.search_frm.day.value;
	ym = yearmonth.split('-')
	var di = new Date(ym[0],ym[1]-1,day);
	if(di.getFullYear() == ym[0] && di.getMonth() == ym[1]-1 && di.getDate() == day){
		if(document.search_frm.search_type[0].checked) {
			document.search_frm.action = document.search_frm.plan_act.value;
		} else {
			document.search_frm.action = document.search_frm.room_act.value;
		}
		document.search_frm.submit();
		return true;
	}
	alert('存在する日付を入力してください。');
	return false;
}

// -->