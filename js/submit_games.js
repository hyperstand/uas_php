
var submit_game_modal=document.getElementById("submit-game-modal");
var edit_game_modal=document.getElementById("edit-game-modal");
var earning_game_modal=document.getElementById("earning-game-modal");
var respondent_game_modal=document.getElementById("respondent-game-modal");

$(document).ready(function(){

  

    $('#addbutton').click(function(){
      submit_game_modal.style.display="block";
    });
    $('#editbutton').click(function(){
      edit_game_modal.style.display="block";
      var game_id=$(this).parent('.options').parent('.game').attr('data-game-id')
      get_info(game_id)
      // console.log(game_id)
    });
    $('#earningbutton').click(function(){
      earning_game_modal.style.display="block";
    });
    // $('#respondentbutton').click(function(){
    //   respondent_game_modal.style.display="block";
    // });



    $('.close').click(function(evt){
      var target = $(evt.target);
      if (target.parent('.submit-game').length) {
          submit_game_modal.style.display = "none";
          window.history.pushState({}, document.title, "/laptop/uas_php/submit_game.php");
      }else if(target.parent('.edit-game').length)
      {    
          edit_game_modal.style.display = "none";

          
          window.history.pushState({}, document.title, "/laptop/uas_php/submit_game.php");
      }else if(target.parent('.earning-game').length)
      {
        earning_game_modal.style.display="none";
        window.history.pushState({}, document.title, "/laptop/uas_php/submit_game.php");
      }
    })

    $('#form_add').submit(function() {
      
  
      var check_empty=(tga,input_type)=>{
        var value = $(`${tga} > ${input_type}`).val()
        console.log(value.length)

        if(value.length < 1)
        { 
          console.log('te3t')
          $(`${tga} > .error-text`).css("display","block")
          return false
        }
      
        return true
      }

      if(check_empty('#game_name_add','input') || 
         check_empty('#game_url_add','input') || 
         check_empty('#game_desc_add','Textarea'))
         {

         }
         return false;
    });




    //upload image
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
            console.log(e.target.result)


          
            var fileType = get_image_info(e.target.result);
            console.log(fileType)
            
            var validImageTypes = ["image/gif", "image/jpeg", "image/png"];
            if(type="add")
            { 
              add_image(fileType, validImageTypes,e.target.result)
            }else if(type="edit")
            {
              edit_image(fileType, validImageTypes,e.target.result)
            }
            
        }
        
        reader.readAsDataURL(input.files[0]);
      }
    }

    function add_image(fileType, validImageTypes,url_pic)
    {
      if ($.inArray(fileType, validImageTypes) > 0) {
        // invalid file type code goes here.
          console.log(url_pic)
        $('#error-image-type-add').css("display","none")
        $('#picture-main-add').css("background-image", `url('${url_pic}')`);
    }else{
        $('#error-image-type-add').css("display","block")
    }
    } 

    function edit_image(fileType, validImageTypes,url)
    {
      if ($.inArray(fileType, validImageTypes) > 0) {
        // invalid file type code goes here.
        $('#error-image-type-edit').css("display","none")
        $('#picture-main-edit').css("background-image", `url('${url}')`);
    }else{
        $('#error-image-type-edit').css("display","block")
    }
    } 
    
    $("#upload_image_add").change(function() {
      readURL(this);
    });

    $("#upload_image_edit").change(function() {
      readURL(this);
    });

  
    //request data
    function get_info(game_id)
    {
      console.log(game_id)
      $.post("test_data/test_output.php",
      {
        edit_info_game: "true",
        game_id: game_id
      },
      function(data, status){
        if(status=='success')
        {
          var game_data=JSON.parse(data)
          $('#game_name').val(game_data.game_name);
          $('#game_url').val(game_data.game_url);
          $('#game_info').val(game_data.game_info);
          $('#picture-main-edit').css("background-image", `url('${game_data.game_image_url}')`);
        }
      });
    }

    function get_image_info(encoded)
    {
      const body = {profilepic:encoded};
      let mimeType = body.profilepic.match(/[^:]\w+\/[\w-+\d.]+(?=;|,)/)[0];
      return mimeType;
    }



  });

  //set check url to open modal
var url = window.location.href;
if(url.indexOf('#create_game') != -1) {
    submit_game_modal.style.display="block";

}else if(url.indexOf('#edit_game=') != -1)
{
    edit_game_modal.style.display="block";
    var url = new URL(window.location.href);
    var c = url.searchParams.get("#edit_game=");
    console.log(c);

}else if(url.indexOf('#my_earn') != -1)
{
  earning_game_modal.style.display="block";
}