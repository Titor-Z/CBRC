(function () {
    var required = $('[required]'),
        button = $('a.btn'),
        recController = button.attr('data-recController');

    required.blur(function () {
        $(this).each(function () {
            var tip = $(this).next();
            if ($(this).val()==''){
                $(this).addClass('is-invalid');
                tip.removeClass('text-muted').addClass('text-danger');
                tip.html('不能为空');
            }else{
                $(this).removeClass('is-invalid');
                tip.removeClass('text-muted').removeClass('text-danger').addClass('text-success');
                tip.html('完成');
            }
        })
    }); // required Blur End.

    $("#donor").click(function () {
        var donorName = $('[name=donorName]').val(),
            donorAge = $('[name=donorAge]').val(),
            donorSex = $('[name=donorSex]').val(),
            donorPs = $('[name=donorPS]').val(),
            donorMH = $('[name=donorMH]').val();
        var data = {
            'donorName' : donorName,
            'donorAge'  : donorAge,
            'donorSex'  : donorSex,
            'donorPS'   : donorPs,
            'donorMH'   : donorMH
        };

        $.post(recController,{'data': data}, function (result) {
            console.info(result);
            window.location.href = result;
        });
    }); // Ajax End.

    // 电话和手机的切换
    var tel = $('[name=contactTel]'),
        mobile = $('[name=contactMobile]');
    tel.blur(function () {
        if (tel.val()=='' && mobile.val()=='') {
            $(this).addClass('is-invalid')
                .next().removeClass('text-muted').addClass('text-danger')
                .html('手机号码和电话号码任选其一填写');

        }else{
            $(this).removeClass('is-invalid')
                .next().removeClass('text-muted').removeClass('text-danger').addClass('text-success')
                .html('完成');
            mobile.removeClass('is-invalid')
                .next().removeClass('text-muted').removeClass('text-danger').addClass('text-success')
                .html('完成');
        }
    });
    mobile.blur(function () {
        if (tel.val()=='' && mobile.val()=='') {
            $(this).addClass('is-invalid')
                .next().removeClass('text-muted').addClass('text-danger')
                .html('手机号码和电话号码任选其一填写');

        }else{
            $(this).removeClass('is-invalid')
                .next().removeClass('text-muted').removeClass('text-danger').addClass('text-success')
                .html('完成');
            tel.removeClass('is-invalid')
                .next().removeClass('text-muted').removeClass('text-danger').addClass('text-success')
                .html('完成');
        }
    });

    // 保存联系人信息
    $("#contact").click(function () {
        var contactName = $('[name=contactName]').val(),
            contactTel = $('[name=contactTel]').val(),
            contactMobile = $('[name=contactMobile]').val(),
            contactAddress = $('[name=contactAddress]').val(),
            contactCADR = $('[name=contactCADR]').val(),
            contactOtherMessage = $('[name=contactOtherMessage]').val();
        var data = {
            'contactName'   : contactName,
            'contactTel'    : contactTel,
            'contactMobile' : contactMobile,
            'contactAddress': contactAddress,
            'contactCADR'   : contactCADR,
            'contactOtherMessage' : contactOtherMessage
        };

        $.post(recController,{'data': data}, function (result) {
            console.info(result);
            window.location.href = result;
        });
    });
})();