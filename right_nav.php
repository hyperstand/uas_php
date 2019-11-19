<div class="cls-usr-btn" id="button-close-user">
            <i class="fas fa-chevron-right"></i>
    </div> 
    <div class="icon-button" id="button-user">
        <img src="Images/base_image_user.jpg" alt="" class="round-image">
    </div>
    <div class="user-panel" id="panel-loggedin">
        <div class="profile-head align-items-center">
            <img src="Images/base_image_user.jpg" alt="" class="round-image">
            <div  class="text align-items-center">
                <span style="font-size:16px;padding-left:10px;"><?php echo $user_logged_username ?></span>
            </div>
        </div>

        <a class="panel-butn" href="logged_in_vsurvey.php"> 
             <i class="fas fa-poll-h" style=""></i>
             <span style="padding-left:10px;">My Survey</span> 
        </a>
        <a class="panel-butn" href="profile.php"> 
            <i class="fas fa-user-circle"></i>
            <span style="padding-left:10px;">Profile</span> 
       </a>
       <a class="panel-butn" href="submit_game.php">
            <i class="fas fa-cloud-upload-alt"></i>
            <span style="padding-left:10px;">Submit Games</span> 
        </a>
       <a class="panel-butn" href="not_available.html"> 
        <i class="fas fa-cog"></i>
        <span style="padding-left:10px;">Setting</span> 
       </a>

        <a class="panel-butn" href="Marketz.php">
                <i class="fas fa-sign-out-alt"></i>
                <span style="padding-left:10px;">Logout</span> 
            </a>
        <div class="my-balance">
            <div class="content">
                    <p class="margin-0 title">My Balance</p>
                    <p class="margin-0 balance"><?php echo "Rp. ".$user_logged_balance ?></p>
            </div>
            <button class="add-balance" onclick="document.location.href='topupsaldo.php'">
                Add
            </button>
        </div>
    </div>  