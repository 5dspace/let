$(function(){
    var tipBox = $("#tip");
    //提交的函数
    var myChange =  function(){
        var consignee = $("#name"),
            consigneeVal = $.trim(consignee.val()),
            addr = $("#address"),
            addrVal = $.trim(addr.val()),
            phone = $("#phone"),
            phoneVal = $.trim(phone.val());

        //信息为空
        if (consigneeVal == "" || addrVal == "" || phoneVal == ""){
            tipBox.text("信息不完整");
            consignee.focus();
            return ;
        } else {
            tipBox.text("");
        }
      
        //后台验证用户合法性，若存在则跳转到登录页面
        $.post(
            URL + "/saveAddr",
            {"consignee": consigneeVal, "addr": addrVal, "phone": phoneVal},
            function(msg){
           
                if (!msg.isAdd){
                    alert(msg.msg);
                } else {
                   alert(msg.msg);
                   window.location.reload();
                }
            },
            "json"
        );
    };

    //提交
    $("#save-addr").click(function(){
        myChange();
    });


    //取消
    $("#cancel").click(function(){
        window.location.reload();
    })


});