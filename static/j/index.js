function isLoaded(callback) {
	var callback = typeof callback == 'undefined' ? function(){} : callback;
	if(window.document.readyState == 'complete') {
		if(typeof callback == 'function') {
			try{callback()}catch(e){}
		}
		return true;
	}
	setTimeout('isLoaded('+callback+')', 700);
}


touchmove = false;
function touchSupport() {
	return 'ontouchend' in document;
}
function bindClick(selector, func, bubble) {
	if (!touchSupport()) {
		$(selector).live('click', function(){
			var self = $(this);
			func(self);
			if (!bubble) { return false; }
		});//响应事件
	} else {
		$(selector).live('touchmove', function(){
			touchmove = true;
		}).live('touchend', function(){
			if (touchmove == true) { touchmove = false; return; }
			var self = $(this);
			func(self);//响应事件
			if (!bubble) { return false; }
		});
	}
}

$(function(){
	var prefix = host + "Main/";
	bindClick('#navAbout', function(){location.href=prefix+'aboutus';});
	bindClick('#navContact', function(){location.href=prefix+'contact';});
	bindClick('#navPartners', function(){location.href=prefix+'partners';});
	bindClick('#navEvents', function(){location.href=prefix+'events';});
	bindClick('#navPractices', function(){location.href=prefix+'practices';});
	//$('#navAbout').click(function(){location.href='AboutUs.shtml';});
	//$('#navContact').click(function(){location.href='Contact.shtml';});
	//$('#navPartners').click(function(){location.href='Partners.shtml';});
	//$('#navEvents').click(function(){location.href='Events.shtml';});
	//$('#navPractices').click(function(){location.href='Practices.shtml';});
	bindClick('#navAbouten', function(){location.href=prefix+'aboutus_en';});
	bindClick('#navContacten', function(){location.href=prefix+'contact_en';});
	bindClick('#navPartnersen', function(){location.href=prefix+'partners_en';});
	bindClick('#navEventsen', function(){location.href=prefix+'events_en';});
	bindClick('#navPracticesen', function(){location.href=prefix+'practices_en';});
	//$('#navAbouten').click(function(){location.href='ENAboutUs.shtml';});
	//$('#navContacten').click(function(){location.href='ENContact.shtml';});
	//$('#navPartnersen').click(function(){location.href='ENPartners.shtml';});
	//$('#navEventsen').click(function(){location.href='ENEvents.shtml';});
	//$('#navPracticesen').click(function(){location.href='ENPractices.shtml';});
	bindClick('.a_back_pref', function(){location.href=prefix+'partners';});
	bindClick('.a_back_pref_en', function(){location.href=prefix+'partners_en';});
	//$('.a_back').click(function(){history.back();});
	bindClick('.li_partners', function(self){
		var addr = self.attr('page');
		// console.log(addr);
		if (addr == '') { return; }
		location.href=addr;  //暂时注释 2018-03-22,  放开 2019-09-21
	});
	//$('#p_jyx').click(function(){location.href = 'p_jiangyuxing.shtml';});
	//$('#p_jyx_en').click(function(){location.href = 'p_jiangyuxing_en.shtml';});
	bindClick('.footerlogo', function(){ location.href='/'; })
});

//复制到剪切板
function oCopy(ele) {
	try {
		range = document.createRange();
		range.selectNode(ele);

		const selection = window.getSelection();
		selection.rangeCount > 0 && selection.removeAllRanges();
		selection.addRange(range);

		document.execCommand('copy');
	} catch (e) {}

}
