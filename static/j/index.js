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
	bindClick('#navAbout', function(){location.href='AboutUs.shtml';});
	bindClick('#navContact', function(){location.href='Contact.shtml';});
	bindClick('#navPartners', function(){location.href='Partners.shtml';});
	bindClick('#navEvents', function(){location.href='Events.shtml';});
	bindClick('#navPractices', function(){location.href='Practices.shtml';});
	//$('#navAbout').click(function(){location.href='AboutUs.shtml';});
	//$('#navContact').click(function(){location.href='Contact.shtml';});
	//$('#navPartners').click(function(){location.href='Partners.shtml';});
	//$('#navEvents').click(function(){location.href='Events.shtml';});
	//$('#navPractices').click(function(){location.href='Practices.shtml';});
	bindClick('#navAbouten', function(){location.href='ENAboutUs.shtml';});
	bindClick('#navContacten', function(){location.href='ENContact.shtml';});
	bindClick('#navPartnersen', function(){location.href='ENPartners.shtml';});
	bindClick('#navEventsen', function(){location.href='ENEvents.shtml';});
	bindClick('#navPracticesen', function(){location.href='ENPractices.shtml';});
	//$('#navAbouten').click(function(){location.href='ENAboutUs.shtml';});
	//$('#navContacten').click(function(){location.href='ENContact.shtml';});
	//$('#navPartnersen').click(function(){location.href='ENPartners.shtml';});
	//$('#navEventsen').click(function(){location.href='ENEvents.shtml';});
	//$('#navPracticesen').click(function(){location.href='ENPractices.shtml';});
	bindClick('.a_back_pref', function(){location.href='Partners.shtml';});
	bindClick('.a_back_pref_en', function(){location.href='ENPartners.shtml';});
	//$('.a_back').click(function(){history.back();});
	bindClick('.li_partners', function(self){
		var addr = self.attr('page');
		// console.log(addr);
		// location.href=addr;//暂时注释 2018-03-22
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