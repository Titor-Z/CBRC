(function () {
    var required = $('[required]'),
        button = $('a.btn'),
        recController = button.attr('data-recController');

    $("#donor").click(function () {
        var form = $("form"),
            donorName = form.find("[name=donorName]"),
            donorAge = form.find("[name=donorAge]"),
            donorSex = form.find("[name=donorSex]:checked").val(),
            donorPs = form.find("[name=donorPS]"),
            donorMH = form.find("[name=donorMH]").val();

        var data = {
            'donorName' : valSet(donorName),
            'donorAge'  : valSet(donorAge),
            'donorSex'  : donorSex,
            'donorPS'   : valSet(donorPs),
            'donorMH'   : donorMH
        };

        if (nullSet([donorName,donorAge,donorPs])===false){
            return false;
        }

        removeArrNull(data);

        $.post(recController,{'data': data}, function (result) {
            console.info(result);
            window.location.href = result;
        });// Ajax End.
    });
})();