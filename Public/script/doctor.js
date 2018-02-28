(function () {
    var logout = $("#logout"),
        href = logout.attr('data-target');
    logout.click(function () {
        $.get(href, function (res) {
            console.log(res);
            console.log('已退出');
            $(".nav").css('display','none');
            location.reload();
        });
    });
})();