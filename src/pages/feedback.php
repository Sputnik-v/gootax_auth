<?php

require_once __DIR__ . '/../vendor/helpers.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
}

$contentRegister = "<div>"
    . flash() .
    "<section class='vh-100 gradient-custom'>
  <div class='container py-5'>
    <div class='row justify-content-center align-items-center h-100'>
      <div class='col-12 col-lg-9 col-xl-7'>
        <div class='card shadow-2-strong card-registration' style='border-radius: 15px;'>
          <div class='card-body p-4 p-md-5'>
            <h3 class='mb-4 pb-2 pb-md-0 mb-md-5'>Feedback Form</h3>
            <form method='POST'>

              <div class='row'>
                <div class='col-md-6 mb-4 d-flex align-items-center'>

                  <div data-mdb-input-init class='form-outline datepicker w-100'>
                    <input name='name' type='text' class='form-control form-control-lg' id='birthdayDate' />
                    <label for='birthdayDate' class='form-label'>Name</label>
                  </div>

                </div>
                <div class='col-md-6 mb-4'>

                  <h6 class='mb-2 pb-1'>Gender: </h6>

                  <div class='form-check form-check-inline'>
                    <input class='form-check-input' type='radio' name='radio' id='femaleGender'
                      value='female' checked />
                    <label class='form-check-label' for='femaleGender'>Female</label>
                  </div>

                  <div class='form-check form-check-inline'>
                    <input class='form-check-input' type='radio' name='radio' id='maleGender'
                      value='male' />
                    <label class='form-check-label' for='maleGender'>Male</label>
                  </div>

                </div>
              </div>

              <div class='row'>
                <div class='col-md-12 mb-4 pb-2'>
                
                

                  <div data-mdb-input-init class='form-outline'>
                    <textarea id='texteria' name='comment' class='form-control form-control-lg'></textarea>
                    <label class='form-label' for='emailAddress'>Comments</label>
                  </div>

                </div>
              </div>

              <div class='row'>
                <div class='col-md-12 mb-4 pb-2'>

                  <select name='age' class='select form-control-lg'>
                    <option value='1' disabled>Age</option>
                    <option value='young'>< 30 age</option>
                    <option value='old'>> 30 age</option>
                  </select>
                  <label class='form-label select-label'>How years old?</label>

                </div>
              </div>
              
              <div class='row'>
              
                <div class='col-md-12 mb-4 pb-2'>
                    
                    <input name='agree' class='form-check-input me-2' type='checkbox' value='on' id='form2Example3c' />
                    <label class='form-check-label' for='form2Example3'>
                      I agree all statements
                      </label>
                  
                </div>
              
                </div>

              <div class='pt-2'>
                <input data-mdb-ripple-init class='btn btn-primary btn-lg' type='submit' value='Submit' />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
    " .
    "</div>";

