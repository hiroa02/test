document.write("ココカラ------" + "<br>");
for (var i= 0 ; i < 5 ; i++){
    document.write("★");
}
document.write("<br>" + "------ココマデ<br>");
//2
document.write("ココカラ------" + "<br>");
for (var i = 0 ; i < 9 ; i++){
    document.write("★");
    if (i == 2){
        document.write("<br>");
    }
}
document.write("<br>"+"------ココマデ<br>");
//3
document.write("ココカラ------" + "<br>");
for (var i = 0 ; i < 10 ; i++){
    document.write("☆");
    if(i == 4){
        document.write("<br>");
    }
}
document.write("<br>"+"------ココマデ<br>");
//4
document.write("ココカラ------");
for (var i = 0 ; i < 20 ; i++){
    if(i % 5 == 0){
        document.write("<br>");
    }
    document.write("★");
}
document.write("<br>"+"------ココマデ<br>");
//5
document.write("ココカラ------");
//for (var i = 0 ; i < 12 ; i++){
//    if(i % 3 == 0){
//        document.write("<br>");
//    }
//    document.write("★");
//}
document.write("<br>");
for(var i = 0 ; i < 4 ; i++){
    for(var a = 0 ; a < 3 ; a++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>"+"------ココマデ<br>");
//6
document.write("ココカラ------"+"<br>");
for (var i= 0 ; i < 3 ; i++){
    for(var a = 0 ; a < 3 ; a++){
        if(a % 2 = 1){
            document.write("★");
        }else{
            document.write("☆");
        }
        document.write("<br>");
    }
}
document.write("------ココマデ<br>");
//7
document.write("ココカラ------" + "<br>");
for (var i = 0 ; i <= 20 ; i++){
    if(i == 0){
    }else if(i % 5 == 2||i % 5 == 4){
        document.write("☆");
    }
    else{
        document.write("★");
        if(i % 5 == 0){
            document.write("<br>");
        }
    }
}
document.write("------ココマデ<br>");
////8
document.write("ココカラ-------" + "<br>");
for (var i = 0 ; i < 5 ; i++){
    for(var a = 0 ; a <= i ; a++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("------ココマデ");
