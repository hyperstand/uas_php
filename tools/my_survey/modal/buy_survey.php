      
      <style>
          .payment-info
          {
              border:1px solid black;
              display:flex;
              flex-direction:column;
          }
          .payment-info>.my-money,
          .payment-info>.price
          {
              display:flex;
          }
          .payment-info .money
          {
              margin-left:auto;
          }

          .payment-info .error
          {
              font-size:12px;
              margin-top:5px;
              color:red;
          }
      </style>
      
      
      <!-- The Modal -->
        <div id="create-survey-modal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="title create-survey ">
                <p style="font-size:20px;" class="margin-0">Create Survey</p>
                <i class="fas fa-times-circle close"></i>
            </div>
            <div class="input-box">
                <p class="margin-0">Survey Name</p>
                <input type="text" style="width:100%;">
                <p class="error-text margin-0">Please Fill It</p>
            </div>

            <ul class="payment-info none-list-style">
                <li class="my-money">
                    <p class="margin-0">My Balance</p>
                    <p class="margin-0 money">Rp 300.000</p>
                </li>
                <li class="price">
                    <p class="margin-0">Price</p>
                    <p class="margin-0 money">- Rp 10.000</p>
                </li>
                <li>
                    <p class="error margin-0">
                        You Don't Have Enough Money
                    </p>
                </li>
            </ul>


            <a href="" class="upload-button">
               Create Survey
            </a>
        </div>

        </div> 