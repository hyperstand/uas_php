    var create_survey_modal=document.getElementById("create-survey-modal");
    $(document).ready(function(){

        $('#createsurveybutton').click(function(){
            create_survey_modal.style.display="block";
          });

        $('.close').click(function(evt){
            var target = $(evt.target);
            if (target.parent('.create-survey').length) {
                create_survey_modal.style.display="none";
                window.history.pushState({}, document.title, "/laptop/uas_php/logged_in_vsurvey.php");
            }
        });
    });
    //set check url to open modal
    var url = window.location.href;
    if(url.indexOf('#create_survey') != -1) {
        create_survey_modal.style.display="block";
    }