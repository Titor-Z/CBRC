// 得到多选框的值，并保存到一个数组对象中：
function checkedArr(items){
    var items = document.querySelectorAll(items),
        itemsArr= [];
    for (var k in items) {
        if(items[k].checked)
            itemsArr.push(items[k].value);
    }
    return itemsArr;
}

/*function bgState(who) {
    var state = who.attr('data-bg');
    switch (state) {
        case 0:
            obj.addClass('layui-btn-warm');
            break;
    }
}*/

function valSet(who) {
    var obj = who,
        value = obj.val();
    if(value.trim().length==0 && value.trim()=='') {
        return value = null;
    } else {
        return value;
    }
}

function removeArrNull(obj) {
    var obj = obj;
    for(var i in obj) {
        if(obj[i]==null) {
            delete obj[i];
        }
    }
    return obj;
}