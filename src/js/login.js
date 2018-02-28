(function () {
    var form = $('form'),
        username = form.find("[name='username']"),
        password = form.find("[name='password']"),
        submit = form.find("[name=submit]");

    function setNull(who) {
        var val = who.val().trim();
        if (val == '' || val.length === 0) {
            val = null;
        }
        return val;
    }

    function setLength(who, limit) {
        var item = who.val().trim();
        if (setNull(who) == null) return false;
        if (item.length < limit.length.min) {
            console.info('密码长度须大于'+limit.length.min+'位');
            return false;
        }
        else if (item.length > limit.length.max) {
            console.info('密码长度须小于'+limit.length.max+'位');
            return false;
        }
        else {
            console.log(item);
            return item;
        }
    }

    function tip(checkWho, limit) {
        var item = checkWho;

        switch (item){
            case null:
            console.info(limit.zero);
            break;
        }
    }

    submit.click(function () {
        var checkUser = tip(setNull(username),{zero:'请输入用户名'}),
            checkPasd = tip(setNull(password),{zero:'请输入密码'});

        setLength(password,{
            length: {
                min: 6,
                max: 16
            }
        });

        setLength(password,{
            length: {
                min: 1,
                max: 20
            }
        });


    });
})();