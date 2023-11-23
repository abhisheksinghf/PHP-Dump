var oldtop = 'para1';
function totop(newtop)
{
    var olddom = document.getElementById(oldtop).style;
    var newdom = document.getElementById(newtop).style;
    olddom.zIndex = 0;
    newdom.zIndex = 10;

    oldtop = newtop;
}