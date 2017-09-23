/**
 * Created by LordRahl on 2/13/17.
 */


function getUrl(attach){
    // return 'http://localhost:8200/api/'+attach;
     return 'http://campaign.atp-sevas.com/MobiChurch/public/index.php/api/'+attach;
}

function keepValue(key,value){
    if(localStorage!==null && localStorage!==undefined){
        localStorage.setItem(key,value);
    }else{
        alert("Local Storage not supported");
    }

    return;
}


function getValue(key){
    if(localStorage!==null && localStorage!==undefined){
        return localStorage.getItem(key);
    }else{
        alert("Local Storage not supported");
    }

    return;
}

function success(msg){
    alert(msg);
}

function error(msg){
    alert(msg);
}