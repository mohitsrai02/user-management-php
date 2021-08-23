
function img_pathUrl(input){
    $('#img_url')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);
}
var letters = /(?:\s|^)#[A-Za-z\-\.\_]+(?:\s|$)/g
function tagvalidation(texts){
    if(texts.value.match(letters))
    {
     console.log("true");
     document.getElementById("p_submit").disabled=false;
     document.getElementById("er1").style.display='none';
    }
     else
    {
    document.getElementById("er1").style.display='block';
    document.getElementById("p_submit").disabled=true;
    return false;
    }
    }  