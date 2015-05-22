/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2014-04-24 16:46:49
 * @version $Id$
 */

var buy = new Object();
/*删除用户已保存过的地址，使用http delete请求(与get、post同等级的东西)
*请求url基地址变量
*/
buy.delAddrURL = 'urlDeleteAddress';

/*新增用户地址，使用http POST请求
* 请求url地址变量，
* return json格式的地址
*/
buy.addAddrURL = 'localhost/Account/saveAddr';

/* 提交订单url，使用http POST请求
*/
buy.submitOrder = 'localhost/Trade/submitOrder';

function ajaxError(){
	alert('提交失败');
}
var addrLi = $('ul.step-contain li');

//添加新地址
$('#add-newAddr').click(function (evt){
	evt.preventDefault();
	$(".new-addr").show();
	$(this).hide(); 
});

// 显示&隐藏地址后的删除按钮
addrLi.hover(function (){
	$(this).find('.addr-delete').show();
}, function (){
	$(this).find('.addr-delete').hide();
})

// 删除地址表单提交
$('.addr-delete').click( function (e){
	var _t = $(this);
	e.preventDefault();
	$.ajax({
		type: 'DELETE',
		url: buy.delAddrURL+'/'+_t.siblings("input").attr('id').slice(5),
		success: function (){
			_t.parent().remove();
		},
		error: ajaxError
	});
});

// 添加新地址表单提交
$(".new-addr").click(function (e){
	var _t = $(this),
		name = _t.find('input[name="name"]').val(),
		tel = _t.find('input[name="tel"]').val(),
		addr = _t.find('input[name="address"]').val();
	if(name.length>=1 && tel.length>=4 && addr.length>3){
		if(e.target.tagName.toLowerCase()=='button'){
			var _b = $(e.target);
			_b.attr('disabled','true');
			$.ajax({
				type: "post",
				dataType: "json",
				url: buy.addAddrURL,
				data: '&name=' + name + '&tel=' + tel + '&addr=' + addr,
				success: function(addrID){

					console.log(addrID);
					_b.removeAttr("disabled");
					
					var newDoc = $('<li><input type="radio" name="addrID" id="addr '+ addrID['id'] + '"/><label for="addr-'+addrID+'"> '+name+' '+tel+' '+ addr+'</label><a href="#" class="addr-delete">删除</a></li>');
					_t.hide();_t.parent().before(newDoc);
					newDoc.click(function (){
						noticeSelectAddr(true);
					});
					$('#add-newAddr').show();
					document.getElementById('add-newAddr-form').reset();
					alert(addrID['msg']);
				}
			});
		}
	}
});
function inputInvalid(jq, text, valid){
	if(!valid){
		jq.addClass("error");
		jq.next().text(text);
	} else {
		jq.removeClass("error");
		jq.next().html("<img class='valid-tip' src='http://t.xiaoplus.com/style/img/common/icon/ok.png' />");
	}
}
// 提示选择收货地址
function noticeSelectAddr(selected, el){
	if (selected){
		var ul = $(el).parent();
		ul.removeClass("error");
		ul.prev().text("选择收货地址");
	} else {
		$('ul.step-contain').first().addClass("error");
		$('.step-title').first().html("选择收货地址<span class='step-must'>&nbsp;&nbsp;&nbsp;&nbsp;请选择收货地址</span>");
		window.scroll(0,0);
	}
}
// 添加地址表单实时验证，失去焦点时判断
$('input[type="text"]').blur(function (){
	if (this.name === 'name'){
		inputInvalid($(this), "请输入正确的姓名", this.value.length>=2);
	} else if (this.name === 'tel'){
		inputInvalid($(this), "请输入正确的联系电话", this.value.length>=4);
	} else if (this.name === 'address'){
		inputInvalid($(this), "请输入正确的地址", this.value.length>=3);
	}
});

$('ul.step-contain li').click(function (){
	noticeSelectAddr(true, this);
});

$('#sumbitOrder').click(function (){
	var pub_id = $('#getpub_id').val();
	
	var addrID = $('input[name="addrID"]:checked').val();

	var trade_data = $('#buy-attachment').val();

	if (!addrID){
		noticeSelectAddr(false);
	} else{
		var i;
		for(i = 1; ;i++)
		{
			if(!document.getElementById("addr" + i))
				break;
			if(document.getElementById("addr" + i).checked)
			{
				break;
			}
		}
		i = i - 1;
		$.ajax({
			type: "post",
			url: buy.submitOrder,
			dataType:"json",
			data: '&id=' + i + '&pub_id=' + pub_id + '&trade_data=' + trade_data,
			
			success: function (msg){
				alert(msg['msg']);
				location.href = 'http://t.xiaoplus.com';
			},
			error: ajaxError,
		});
	}
	

});













