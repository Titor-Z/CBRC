(function () {
    var required = $('[required]'),
        button = $('a.btn'),
        recController = button.attr('data-recController');

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
        var name = $('[name=contactName]'),
            tel = $('[name=contactTel]'),
            mobile = $('[name=contactMobile]'),
            address = $('[name=contactAddress]'),
            cadr = $('[name=contactCADR]:checked').val(),
            otherMeg = $('[name=contactOtherMessage]'),
            doctor  = $("#contactDoctor").val(),
            table   = $("#table").val();

        var data = {
            contactName   : valSet(name),
            contactTel    : valSet(tel),
            cadr   : cadr,
            contactPhone  : valSet(mobile),
            contactAddress        : valSet(address),
            contactOtherMessage   : valSet(otherMeg),
            doctor: doctor,
            table : table
        };

        if (nullSet([name,tel,mobile,address])===false){
            return false;
        }

        removeArrNull(data);
        // console.info(data);
        $.post(recController,{'data': data}, function (result) {
            console.info(result);
            window.location.href = result;
        });
    });
})();