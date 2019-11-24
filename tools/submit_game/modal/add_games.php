        <!-- The Modal -->
        <div id="submit-game-modal" class="modal">

        <!-- Modal content -->
        <form class="modal-content " id="form_add">
            <div class="title submit-game">
                <p style="font-size:20px;" class="margin-0">Submit A Game</p>
                <i class="fas fa-times-circle close"></i>
            </div>

            <div class="picture-box-main"  style="position:relative;" id="picture-main-add">
                 <i class="fas fa-camera"></i>
                 <input type="file" id="upload_image_add" style="opacity: 0.0;position: absolute; top:0; left: 0; bottom: 0; right:0; width: 100%; height:100%;" />
            </div>       

            <p class="margin-0" id="error-image-type-add" style="font-size:12px;color:red;display:none;">File Must Be Image</p>
            <p class="margin-0" style="font-size:12px;margin-top:5px;">Picture Size Must Be 292x136 , Click On Picture To Change It</p>
            
            <div class="input-box" id="game_name_add">
                <p class="margin-0">Game Name</p>
                <input type="text" style="width:100%;">
                <p class="error-text margin-0"  style="display:none;">Please Fill It</p>
            </div>
  
            <div class="input-box" id="game_url_add">
                <p class="margin-0">Game Url</p>
                <input type="text" style="width:100%;" >
                <p class="error-text margin-0" style="display:none;">Please Fill It</p>
            </div>
            <div class="input-box" id="game_desc_add">
                <p class="margin-0">Game Description</p>
                <Textarea style="width:100%;" ></Textarea>
                <p class="error-text margin-0" style="display:none;">Please Fill It</p>
            </div>
                    <button type="submit"class="upload-button button-global">
                        Upload Game
                    </button>
            </form>

        </div> 