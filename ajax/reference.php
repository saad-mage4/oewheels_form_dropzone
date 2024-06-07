<?php
if(isset($_POST['ref_id'])):
$ref_id = $_POST['ref_id'];
?>

<div id="reference-<?=$ref_id?>" class="row">
      <div class="col-12 mb-3">
        <h5 class="sub-heading px-2 py-1">Reference <?=$ref_id?></h5>
      </div>
      <div class="col-12 col-md-3 mb-3">
        <div class="form-group">
          <label for="company-name-<?=$ref_id?>">Company Name</label>
          <input
            type="text"
            name="company_name_<?=$ref_id?>"
            id="company-name-<?=$ref_id?>"
            class="form-control"
          />
        </div>
      </div>
      <div class="col-12 col-md-3 mb-3">
        <div class="form-group">
          <label for="account-number-<?=$ref_id?>">Account #</label>
          <input
            type="text"
            name="account_number_<?=$ref_id?>"
            id="account-number-<?=$ref_id?>"
            class="form-control"
          />
        </div>
      </div>
      <div class="col-12 col-md-3 mb-3">
        <div class="form-group">
          <label for="company-contact-<?=$ref_id?>">Contact</label>
          <input
            type="text"
            name="company_contact_<?=$ref_id?>"
            id="company-contact-<?=$ref_id?>"
            class="form-control"
          />
        </div>
      </div>
      <div class="col-12 col-md-3 mb-3">
        <div class="form-group">
          <label for="company-phone-<?=$ref_id?>">Phone</label>
          <input
            type="text"
            name="company_phone_<?=$ref_id?>"
            id="company-phone-<?=$ref_id?>"
            class="form-control"
          />
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3">
        <div class="form-group">
          <label for="reference-addr-<?=$ref_id?>">Address</label>
          <input
            type="text"
            name="reference_addr_<?=$ref_id?>"
            id="reference-addr-<?=$ref_id?>"
            class="form-control"
          />
        </div>
      </div>
      <div class="col-12 col-md-2 mb-3">
        <div class="form-group">
          <label for="reference-city-<?=$ref_id?>">City</label>
          <input
            type="text"
            name="reference_city_<?=$ref_id?>"
            id="reference-city-<?=$ref_id?>"
            class="form-control"
          />
        </div>
      </div>
      <div class="col-12 col-md-2 mb-3">
        <div class="form-group">
          <label for="reference-state-<?=$ref_id?>">State</label>
          <select
            name="reference_state_<?=$ref_id?>"
            id="reference-state-<?=$ref_id?>"
            class="form-select"
          >
            <option value="" selected="selected">Please select</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
            <option value="PR">Puerto Rico</option>
          </select>
        </div>
      </div>
      <div class="col-12 col-md-2 mb-3">
        <div class="form-group">
          <label for="reference-zip-<?=$ref_id?>">Zip</label>
          <input
            type="text"
            name="reference_zip_<?=$ref_id?>"
            id="reference-zip-<?=$ref_id?>"
            class="form-control"
          />
        </div>
      </div>
      <div class="col-12 col-md-2 mb-3">
        <div class="form-group">
          <label for="reference-fax-<?=$ref_id?>">Fax</label>
          <input
            type="text"
            name="reference_fax_<?=$ref_id?>"
            id="reference-fax-<?=$ref_id?>"
            class="form-control"
          />
        </div>
      </div>
      <div class="col-12 mb-3">
        <a href="#!" class="w-25 ms-auto d-block btn btn-secondary remove-ref">Remove</a>
      </div>
    </div>
  <?php endif; ?>