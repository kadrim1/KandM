/**
 * Created by mrtn on 8.09.2015.
 */

var playState=true;


function pageclick()
{
    var sound=document.getElementById("music");

    if (!playState) {
        sound.play();
        playState=true;
    }
    else {
        sound.pause();
        playState=false;
    }
}