(function () {
    /*
     * 反选操作
     * 获取所有的选框。如果没有被选中，则选中
     */
    function check(statue) {
        // 获得选框元素
        var checkbox = document.querySelectorAll("input[data-check]");
        for (var i=0; i<checkbox.length; i++) {
            var item = checkbox[i];
            if (item.checked == true) {
                item.checked = false;
            }
            else {
                item.checked = true;
            }
        }
    }
    var btn = document.querySelector("[data-checkBtn]");
    btn.addEventListener('click',check);
})();