function abc(x) {
    document.getElementById("display").value += x;
}
function solve() {
    var x = document.getElementById("display").value;
    var y = eval(x);
    document.getElementById("display").value = y;
}
function clr() {
    document.getElementById("display").value = "";
}
function sbs() {
    var x = document.getElementById("display").value;
    var l = x.length;
    document.getElementById("display").value = x.substring(0, l - 1);
}