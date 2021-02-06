// send email

//about section
var getItem = document.getElementsByClassName('item');
var getHeading = document.getElementsByClassName('itemHeading');

for (i = 0; i < getHeading.length; i++) {
    getHeading[i].addEventListener('click', toggleItem, false);
}
function toggleItem() {
    var itemClass = this.parentNode.className;
    for (i = 0; i < getItem.length; i++) {
        getItem[i].className = 'item close';
    }
    if (itemClass == 'item close') {
        this.parentNode.className = 'item open';
    }
}