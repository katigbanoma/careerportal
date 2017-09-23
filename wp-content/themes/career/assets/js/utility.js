/**
 * Created by LordRahl on 2/14/17.
 */
function success(msg){
    alert(msg);
}


function error(msg){
    alert(msg);
}

function getUrl(ext){
     // return "http://localhost:8200/api/"+ext;
    return "http://campaign.atp-sevas.com/MobiChurch/public/index.php/api/"+ext;
}