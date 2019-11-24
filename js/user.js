$( document ).ready(function() {
    var open = false
    $("#button-user").click(button_user)
    $("#button-close-user").click(button_close_user)
    $(document).click(window_clicked)


    function window_clicked()
    {   
        // if(open == true)
        console.log(event.target.id)
    }
    function button_user()
    {
        // console.log('eassd')
        $('.user-panel').css("width", "250px")
        $('.cls-usr-btn').css("visibility","visible")
    }
    function button_close_user()
    {
        $('.user-panel').css("width", "0")
        $('.cls-usr-btn').css("visibility","hidden")
    }
    
    

});
