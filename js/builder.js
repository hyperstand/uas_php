


var Disabled=true;


var add_main_modal=document.getElementById("add-main-modal")
var add_text_modal=document.getElementById("add-text-modal")
var edit_text_modal=document.getElementById("edit-text-modal")
var stat_modal=document.getElementById('stat-modal')

$(document).ready(function(){


    $('#addmainbutton').click(function(){
        add_main_modal.style.display="block"
    })

    
    $('#statbutton').click(function(){
        stat_modal.style.display="block"
    })

    $('.close').click(function(evt){
        var target = $(evt.target);
        if (target.parent('.add-main').length) {
            add_main_modal.style.display="none"
            window.history.pushState({}, document.title, "/laptop/uas_php/logged_in_csurvey.php")
        }else if(target.parent('.stat').length)
        {    

            stat_modal.style.display="none"
            window.history.pushState({}, document.title, "/laptop/uas_php/logged_in_csurvey.php")
        }
    })


});
//set check url to open modal
var url = window.location.href;
if(url.indexOf('#addbalance') != -1) {
    add_balance_modal.style.display="block";
}else if(url.indexOf('#withdraw') != -1)
{
    withdraw_balance_modal.style.display="block";
}else if(url.indexOf('#statistic') != -1)
{
    stat_modal.style.display="block"
}


$(document).ready(function(){

var test="<p>Test</p>"

// $('.content-survey').append(test)



});