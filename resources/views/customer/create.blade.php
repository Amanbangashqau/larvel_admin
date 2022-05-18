@extends('layouts.template2_mainlayout')
@section('content')
<section class="section" style="user-select: auto;">
          <div class="section-body" style="user-select: auto;">
            <div class="row" style="user-select: auto;">
              <div class="col-12 col-md-6 col-lg-12" style="user-select: auto;">
                <div class="card" style="user-select: auto;">
                  <div class="card-header" style="user-select: auto;">
                    <h4 style="user-select: auto;">Add Customer</h4>
                  </div>
                  <form action="" method="POST" enctype="multipart/form-data" style="user-select: auto;">
                  <div class="card-body" style="user-select: auto;">
                    <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Name</label>
                      <input name="name" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <div class="form-group" style="user-select: auto;">
                          <label style="user-select: auto;">Email</label>
                          <input name="email" type="email" class="form-control" style="user-select: auto;">
                        </div>
                    </div>

                </div>
                <div class="row" style="user-select: auto;">
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <div class="form-group" style="user-select: auto;">
                          <label style="user-select: auto;">Password</label>
                          <input name="mempass" type="password" class="form-control" style="user-select: auto;">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Service Name</label>
                      <select name="service_id" class="form-control" style="user-select: auto;">
                         <option value="23" style="user-select: auto;">HVAC Tech</option>
                         <option value="18" style="user-select: auto;">Plumber</option>
                         <option value="22" style="user-select: auto;">Pest Control</option>
                         <option value="20" style="user-select: auto;">Electrician</option>
                         <option value="17" style="user-select: auto;">Handyman</option>
                         <option value="24" style="user-select: auto;">Appliance Repair</option>
                      </select>

                    </div>
                  </div>

                </div>
                 <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Latitude</label>
                      <input name="latitude" type="text" class="form-control" style="user-select: auto;">
                    </div>
                 </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Longitude</label>
                      <input name="longitude" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                </div>
                 <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Address</label>
                      <input name="address" type="zip" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Zip Code</label>
                      <input type="text" name="zip_code" class="form-control" style="user-select: auto;">
                    </div>
                  </div>

                </div>
                 <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Mobile No</label>
                      <input type="number" name="phone_no" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Credit Card Name</label>
                      <input name="credit_card_name" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                </div>
                 <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Credit Card No</label>
                      <input name="credit_card_no" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Credit Card Expire Date</label>
                      <input name="credit_card_expire_date" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>

                </div>
                  <div class="row" style="user-select: auto;">

              <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Charge Per Hour</label>
                      <input name="charge_per_hour" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                   <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Experience</label>
                      <input name="experience" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                   <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Member Image</label>
                      <input name="member_img" type="file" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                </div>
                <div class="row" style="user-select: auto;">
                   <div class="card-footer text-right" style="user-select: auto;">
                    <button class="btn btn-primary mr-1" name="submit" type="submit" style="user-select: auto;">Submit</button>
                    <button class="btn btn-secondary" type="reset" style="user-select: auto;">Reset</button>
                  </div>
                </div>
                    </div>
                   </form>
                </div>
                </div>
              </div>
          </div>
        </section>
@endsection
