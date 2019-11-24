       <!-- The Modal -->
       <div id="edit-game-modal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content edit-game">
                    <div class="title edit-game">
                        <p style="font-size:20px;" class="margin-0">Edit Game</p>
                        <i class="fas fa-times-circle close"></i>
                    </div>

                    <div class="picture-box-main"  style="position:relative;" id="picture-main-edit">
                        <i class="fas fa-camera"></i>
                        <input type="file" id="upload_image_edit" style="opacity: 0.0;position: absolute; top:0; left: 0; bottom: 0; right:0; width: 100%; height:100%;" />
                    </div>    
                    <p class="margin-0" id="error-image-type-edit" style="font-size:12px;color:red;display:none;">File Must Be Image</p>
                    <p class="margin-0" style="font-size:12px;margin-top:5px;" >Picture Size Must Be 292x136 , Click On Picture To Change It</p>
                    <div class="input-box">
                        <p class="margin-0">Game Name</p>
                        <input type="text" style="width:100%;" id="game_name">
                        <p class="error-text margin-0">Please Fill It</p>
                    </div>
        
                    <div class="input-box">
                        <p class="margin-0">Game Url</p>
                        <input type="text" style="width:100%;" id="game_url">
                        <p class="error-text margin-0">Please Fill It</p>
                    </div>
                    <div class="input-box">
                        <p class="margin-0">Game Description</p>
                        <Textarea style="width:100%;" id="game_info"></Textarea>
                        <p class="error-text margin-0">Please Fill It</p>
                    </div>

                    <a href="" class="upload-button">
                        Save
                    </a>

                </div>

        </div> 