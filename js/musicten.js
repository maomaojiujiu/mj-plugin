var m1="https://csxandlsy.xyz/wp-content/uploads/resource/music/1.mp3";
    var m2="https://csxandlsy.xyz/wp-content/uploads/resource/music/2.mp3";
    var m3="https://csxandlsy.xyz/wp-content/uploads/resource/music/3.mp3";
    var m4="https://csxandlsy.xyz/wp-content/uploads/resource/music/4.mp3";
    var m5="https://csxandlsy.xyz/wp-content/uploads/resource/music/5.mp3";
    var m6="https://csxandlsy.xyz/wp-content/uploads/resource/music/6.mp3";
    var m7="https://csxandlsy.xyz/wp-content/uploads/resource/music/7.mp3";
    var m8="https://csxandlsy.xyz/wp-content/uploads/resource/music/8.mp3";
    var m9="https://csxandlsy.xyz/wp-content/uploads/resource/music/9.mp3";
    var m10="https://csxandlsy.xyz/wp-content/uploads/resource/music/10.mp3";
    var x=Math.round(Math.random()*9);
    console.log(x);
    if (x==0) x=m1
    else if (x==1) x=m2
    else if (x==2) x=m3
    else if (x==3) x=m4
    else if (x==4) x=m5
    else if (x==5) x=m6
    else if (x==6) x=m7
    else if (x==7) x=m8
    else if (x==8) x=m9
    else  x=m10
    var obj = document.getElementById("backgroundmusic");
    obj.innerHTML='<audio src='+'"'+x+'"'+''+'height="0"'+'autoplay="true"'+'loop="true"'+'>'+'</audio>';