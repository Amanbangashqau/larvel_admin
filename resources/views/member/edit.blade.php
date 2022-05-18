@extends('layouts.template2_mainlayout')
@section('content')
<section class="section" style="user-select: auto;">
          <div class="section-body" style="user-select: auto;">
            <div class="row" style="user-select: auto;">
              <div class="col-12 col-md-6 col-lg-12" style="user-select: auto;">
                <div class="card" style="user-select: auto;">
                  <div class="card-header" style="user-select: auto;">
                    <h4 style="user-select: auto;">Edit Technician</h4>
                  </div>
                  <form action="{{ url('update_technician') }}" method="POST" enctype="multipart/form-data" style="user-select: auto;">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <input type="hidden" name="id" value="{{$technician->id}}">
                  <div class="card-body" style="user-select: auto;">
                    <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Name</label>
                      <input name="name" type="text" value="{{$technician->name}}" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <div class="form-group" style="user-select: auto;">
                          <label style="user-select: auto;">Email</label>
                          <input name="email" type="email"  value="{{$technician->email}}" class="form-control" style="user-select: auto;">
                        </div>
                    </div>

                </div>
                <div class="row" style="user-select: auto;">
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <div class="form-group" style="user-select: auto;">
                          <label style="user-select: auto;">Password</label>
                          <input name="password" type="password" value="{{$technician->password}}" class="form-control" style="user-select: auto;">
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
                      <input name="latitude" type="text" value="{{$technician->latitude}}" class="form-control" style="user-select: auto;">
                    </div>
                 </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Longitude</label>
                      <input name="longitude" type="text" value="{{$technician->longitude}}" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                </div>
                 <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Address</label>
                      <input name="address" type="text" value="{{$technician->address}}" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Zip Code</label>
                      <input type="text" name="zip_code" value="{{$technician->zip_code}}" class="form-control" style="user-select: auto;">
                    </div>
                  </div>

                </div>
                 <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Mobile No</label>
                      <input type="text" name="mobile_no" value="{{$technician->mobile_no}}" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Credit Card Name</label>
                      <input name="credit_card_name" type="text" value="{{$technician->credit_card_name}}" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                </div>

                <div class="row" style="user-select: auto;">
                     <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                   <div class="form-group" style="user-select: auto;">
                     <label style="user-select: auto;">Bank's Mailing Address</label>
                     <input name="bank_mailing_address" value="{{$technician->bank_mailing_address}}" type="text" class="form-control" style="user-select: auto;">
                   </div>
                 </div>
                   <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                   <div class="form-group" style="user-select: auto;">
                     <label style="user-select: auto;">Bank's Routing Number</label>
                     <input name="bank_routing_number" value="{{$technician->bank_routing_number}}" type="text" class="form-control" style="user-select: auto;">
                   </div>
                 </div>

               </div>

               <div class="row" style="user-select: auto;">
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                  <div class="form-group" style="user-select: auto;">
                    <label style="user-select: auto;">Your Account Number</label>
                    <input name="account_number" value="{{$technician->account_number}}" type="text" class="form-control" style="user-select: auto;">
                  </div>
                </div>
                  <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                  <div class="form-group" style="user-select: auto;">
                    <label style="user-select: auto;">Type of Account</label>
                    <input name="account_type" value="{{$technician->account_type}}" type="text" class="form-control" style="user-select: auto;">
                  </div>
                </div>

              </div>

                 <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Credit Card No</label>
                      <input name="credit_card_no" value="{{$technician->credit_card_no}}" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Credit Card Expire Date</label>
                      <input name="credit_card_expire_date" value="{{$technician->credit_card_expire_date}}" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>

                </div>
                  <div class="row" style="user-select: auto;">

              <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Charge Per Hour</label>
                      <input name="charge_per_hour" value="{{$technician->charge_per_hour}}" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                   <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Experience</label>
                      <input name="experience" value="{{$technician->experience}}" type="text" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                   <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Member Image</label>
                      <input name="member_img"  type="file" class="form-control" style="user-select: auto;">
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
