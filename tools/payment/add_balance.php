        <style>
            .bank-list>.account
            {
                display:flex;
            }
        </style>
            
            <!-- The Modal -->
				<div id="add-balance-modal" class="modal">
					<!-- Modal content -->
					<div class="modal-content add-balance">

						<div class="title">
							<p style="font-size:20px;" class="margin-0">Add Balance</p>
							<i class="fas fa-times-circle close"></i>
						</div>

						<div class="input-box">
							<p class="margin-0">Bank Account Number</p>
							<input type="text" style="width:100%;">
							<p class="error-text margin-0">Please Fill It</p>
						</div>

						<div class="input-box">
							<p class="margin-0">Bank Name</p>
							<select style="width:100%;">
							<option value="mdri">Mandiri</option>
							<option value="bca">BCA</option>
							<option value="bni">BNI</option>
							</select>
							<p class="error-text margin-0">Please Fill It</p>
						</div>

						<div class="input-box">
							<p class="margin-0">Number</p>
							<input type="text" style="width:100%;">
							<p class="error-text margin-0">Please Fill It</p>
						</div>


						<div class="info">
							<p class="margin-0">Please Transfer First To These Account</p>
							<ul class="bank-list none-list-style">
								<li class="account">
									<p class="margin-0">Bank BCA</p>
									<p class="margin-0" style="margin-left:auto;">089131231</p>
                                </li>
                                <li class="account">
									<p class="margin-0">Bank Mandiri</p>
									<p class="margin-0" style="margin-left:auto;">089131231</p>
								</li>
							</ul>
						</div>

						<a href="" class="upload-button">
							Add Balance
						</a>
					</div>
				</div> 
				