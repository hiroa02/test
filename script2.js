document.write("問1<br>");
function menseki(han){
    return han * han * 3.14 + "㎠";
}
document.write(menseki(5));
document.write("<br>");
document.write(menseki(7));
document.write("<br>");
document.write(menseki(10));


document.write("<br>問2<br>");
function goke(o, k) {
    return o * 500 + k * 200+"円です";
}
document.write("A" + goke(2, 4));
document.write("<br>");
document.write("B" + goke(1, 5));
document.write("<br>");
document.write("C" + goke(3, 7));
