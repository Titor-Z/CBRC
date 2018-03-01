(function () {
    var required = $('[required]'),
        button = $('a.btn'),
        recController = button.attr('data-recController');

    $("#apply").click(function () {
        var form = $("form"),
            ps      = form.find("#ps"),
            mh      = form.find("#mh"),
            age     = form.find("#age"),
            sex     = form.find("[name=sex]:checked").val(),
            job     = form.find("#job"),
            eye     = form.find("#eyeSurgery"),
            name    = form.find("#name"),
            drug    = form.find("#drugAllergy"),
            marry   = form.find("[name=marriage]:checked").val(),
            diagnosis       = form.find("#diagnosis"),
            complication    = form.find("#complication");

        var data = {
            ps  : valSet(ps),
            mh  : valSet(mh),
            age : valSet(age),
            sex : sex,
            job : valSet(job),
            name: valSet(name),
            marriage    : marry,
            diagnosis   : valSet(diagnosis),
            eyeSurgery  : valSet(eye),
            drugAllergy : valSet(drug),
            complication: valSet(complication)
        };

        if (nullSet([name,age,ps])===false){
            return false;
        }

        removeArrNull(data);
        // console.log(data);
        $.post(recController,{'data': data}, function (result) {
            console.info(result);
            window.location.href = result;
        });// Ajax End.
    });
})();