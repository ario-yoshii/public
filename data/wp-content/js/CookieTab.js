/*------------------------------------------------------------------------------------
 * CookieTab JavaScript
 *
 * Creative Commons License - Attribution
 * http://www.komadoya.com
 *
 * ver0.1 2010.03.06
 * ver0.0 2009.08.29
 *------------------------------------------------------------------------------------
 
 [使用方法]
 
	(1)HTMLコードの例 (各ID変更の際は下記変数も変更すること)
	
		<ul id="tabhead">
			<li id="head-tab0" class="on"><a id="anchor-tab0" href="#">foo_a</a></li>
			<li id="head-tab1"><a id="anchor-tab1" href="#">foo_b</a></li>
			<li id="head-tab2"><a id="anchor-tab2" href="#">foo_c</a></li>
		</ul>
		<div id="tabbody">
			<div id="body-tab0" class="current">
				<h2>foo_a</h2>
				<ul>
					<li></li>
				</ul>
			</div>
			<div id="body-tab1">
				<h2>foo_b</h2>
				<ul>
					<li></li>
				</ul>
			</div>
			<div id="body-tab2">
				<h2>foo_c</h2>
				<ul>
					<li></li>
				</ul>
			</div>
		</div>

	(2)cookieは、select=tab0の形で書き込み
	(3)アクティブなタブにはclass="on",class="current"が適用される
	
------------------------------------------------------------------------------------*/

/*------------------------------------------------------------------------------------

変数設定(CookieTabモジュールを使用)

------------------------------------------------------------------------------------*/
var CookieTab = {
	cookieName: 'select', //cookieに書き込むプロパティ名
	cookieExpires: 10, //cookieの有効期限（単位：日）
	tabHeadId: 'tabhead', //タブheadのID名
	tabBodyId: 'tabbody', //タブbodyのID名
	tabHdPrefix: 'head-', //タブheadリストのID接頭語
	tabBdPrefix: 'body-', //タブbodyリストのID接頭語
	tabAnPrefix: 'anchor-' //タブheadアンカーのID接頭語
};


/*------------------------------------------------------------------------------------

DOMイベントでonloadを実行する処理
（複数のJavaScriptのonloadを可能にするため、window.onload=function()は使わない）

------------------------------------------------------------------------------------*/
var dom = new Object;
dom.event = new Object;

//add event for all browser
dom.event.addEventListener = function(elm,type,func){
	if(!elm){return false;}
	if(elm.addEventListener){
		elm.addEventListener(type,func,false);
	}else if(elm.attachEvent){
		elm.attachEvent("on"+type,func);
	}else{
		return false;
	}
	return true;
}

//remove event for all browser
dom.event.removeEventListener = function(elm,type,func){
	if(!elm){return false;}
	if(elm.removeEventListener){
		elm.removeEventListener(type,func,false);
	}else if(elm.detachEvent){
		elm.detachEvent("on"+type,func);
	}else{
		return false;
	}
	return true;
}


/*------------------------------------------------------------------------------------

タブ＋クッキーのメイン処理

------------------------------------------------------------------------------------*/

//DOM読込完了後、tab制御開始
dom.event.addEventListener(window,'load',function(){
	CookieTab.setting();
});

//tabの初期制御
CookieTab.setting = function() {
	this.tabValue = this.getCookie(this.cookieName);
	this.domAnalysis();
	if(!this.tabValue || this.tabValue==undefined){
		this.tabValue = 'tab0';
	}
	this.tabControl();
}

//cookie書込用関数
CookieTab.setCookie = function(ckName, ckValue, ckExpires, ckDomain, ckPath, ckSecure) {
	var date = new Date();
	date.setTime(date.getTime() + ckExpires*24*60*60*1000);
	var ckStr = escape(ckName) + '=' + escape(ckValue);//日本語使用時の文字化け対策
	ckStr += '; expires=' + date.toGMTString();//有効期限をGMT値に変換
	if(ckDomain) {
		ckStr += '; domain=' + ckDomain;
	}
	if(ckPath) {
		ckStr += '; path=' + ckPath;
	}
	if(ckSecure) {
		ckStr += '; secure';
	}
	document.cookie = ckStr;
}

//cookie取得用関数
CookieTab.getCookie = function(ckName) {
	var ckMatch = ('; ' + document.cookie + ';').match('; ' + ckName + '=(.*?);');
	var ckValue;
	if(ckMatch){
		ckValue = ckMatch[1];
	} else {
		ckValue = '';
	}
	ckValue = unescape(ckValue);//escapeしたものを元に戻す
	return ckValue;
}

//DOM解析用関数
CookieTab.domAnalysis = function() {
	this.linum = this.ID(this.tabHeadId).getElementsByTagName('li').length;
	this.tabBdDiv = this.ID(this.tabBodyId).getElementsByTagName('div').length;
	if(this.linum != this.tabBdDiv){
		throw new Error('tabHead is not equal to tabBody.');	
	}
}

//tabの初期設定
CookieTab.tabControl = function() {
	this.tabDisplay();
	for(var i=0; i<this.linum; i++){
		this.tabAnchor(i);//tabクリック時の動作設定
	}
}

//tabの表示制御
CookieTab.tabDisplay = function() {
	for(var i=0; i<this.linum; i++){
		//互換性維持のためclassの取得・設定にはhoge.className = fooを使用
		this.ID(this.tabHdPrefix + 'tab' + i).className = '';
		this.ID(this.tabBdPrefix + 'tab' + i).className = '';
	}
	this.ID(this.tabHdPrefix + CookieTab.tabValue).className = 'on';
	this.ID(this.tabBdPrefix + CookieTab.tabValue).className = 'current';
}

//tabクリック時の動作制御
CookieTab.tabAnchor = function(tabnum) {
	this.ID(this.tabAnPrefix + 'tab' + tabnum).onclick = function(){
		var crTab = CookieTab.tabValue;
		//Cookieを発行するドメイン名を明示的に指定。（CookieをIEからFirefoxへインポートする際、ドメイン名の解釈の違いでcookieが複数生成されるバグ対策）
		CookieTab.setCookie(CookieTab.cookieName,'tab' + tabnum,CookieTab.cookieExpires,location.hostname);
		CookieTab.tabValue = CookieTab.getCookie(CookieTab.cookieName);
		CookieTab.tabDisplay();
		if('tab' + tabnum != crTab){
			return false;
		}
	}
}

//getElementByIdの短縮形を使用
CookieTab.ID = function(id) {
	var myId = document.getElementById(id);
	return myId;
}

