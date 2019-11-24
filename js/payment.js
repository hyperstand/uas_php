var Disabled=true;


var add_balance_modal=document.getElementById("add-balance-modal"); 
var withdraw_balance_modal=document.getElementById("withdraw-balance-modal"); 

$(document).ready(function(){

    $('#addbalancebutton').click(function(){
        add_balance_modal.style.display="block";
    });
    $('#withdrawbalancebutton').click(function(){
        withdraw_balance_modal.style.display="block";
    });

    $('.close').click(function(){
        if(Disabled){
            add_balance_modal.style.display="none";
            withdraw_balance_modal.style.display="none";
            window.history.pushState({}, document.title, "/laptop/uas_php/payment.php");
        }
    });

    // $(window).click(function(e) {
    //     if(event.target == add_balance_modal)
    //     {
    //         add_balance_modal.style.display="none";
    //     }
    //         window.history.pushState({}, document.title, "/laptop/uas_php/payment.php");
    // });
});
//set check url to open modal
var url = window.location.href;
if(url.indexOf('#addbalance') != -1) {
    add_balance_modal.style.display="block";
}else if(url.indexOf('#withdraw') != -1)
{
    withdraw_balance_modal.style.display="block";
}