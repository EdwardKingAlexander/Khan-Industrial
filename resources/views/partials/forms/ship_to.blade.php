
<form action="" method="POST">
@csrf
@method('PUT')
<!-- Start of First Name Input -->
  <div class="form-group">
    <label for="ship_to_name">Ship To Name</label>
    <input type="text" class="form-control" id="ship_to_name" name="ship_to_name" required placeholder="Required">
  </div>
  <!-- ENd of First Name input -->


    <!-- Start of Business Name input -->
    <div class="form-group">
    <label for="business_name">Business</label>
    <input type="text" name="business_name" class="form-control" id="business_name" placeholder="Optional">
  </div>
  <!-- End of Business name input -->

  <!-- Start of Street Address input -->
  <div class="form-group">
    <label for="ship_to_street">Street Address</label>
    <input type="text" class="form-control" id="ship_to_street" name="ship_to_street" required  placeholder="Required">
  </div>
  <!-- End of Street Address input -->

  <!-- Start of Street Address 2 input -->
  <div class="form-group">
    <label for="ship_to_street_2">Street Address 2</label>
    <input type="text" class="form-control" id="ship_to_street_2" name="ship_to_street_2"  placeholder="Optional">
  </div>
  <!-- End of Street Address 2 input -->


  <!-- Start of Apt/Seute/Building # input -->
  <div class="form-group">
    <label for="building_apt">Building/Apt #</label>
    <input type="text" class="form-control" id="building_apt" name="building_apt" placeholder="Optional">
  </div>
  <!-- End of Apt/Seute/Building # input -->

   <!-- Start of City input -->
   <div class="form-group">
    <label for="ship_to_city">City</label>
    <input type="text" class="form-control" id="ship_to_city" name="ship_to_city" required placeholder="Required">
  </div>
  <!-- End of City input -->

   <!-- Start of State input -->
   <div class="form-group">
    <label for="ship_to_state">State</label>
    <input type="text" class="form-control" id="ship_to_state" name="ship_to_state" required placeholder="Required">
  </div>
  <!-- End of State input -->

   <!-- Start of Zip input -->
   <div class="form-group">
    <label for="ship_to_zip">Zip Code</label>
    <input type="text" class="form-control" id="ship_to_zip" name="ship_to_zip" required placeholder="Required">
  </div>
  <!-- End of Zip input -->

  <!-- Start of phone input -->
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone" required placeholder="Required">
  </div>
  <!-- End of phone input -->

  <!-- Start of fax input -->
  <div class="form-group">
    <label for="fax">Fax</label>
    <input type="text" class="form-control" id="fax" name="fax" placeholder="Optional">
  </div>
  <!-- End of fax input -->

  <!-- Start of Cell Phone input -->
  <div class="form-group">
    <label for="cell_phone">Cell Phone</label>
    <input type="text" class="form-control" id="cell_phone" name="cell_phone" placeholder="Optional">
  </div>
  <!-- End of Cell Phone input -->

  <input class="btn btn-primary" type="submit" value="Update Shipping Address">

</form>