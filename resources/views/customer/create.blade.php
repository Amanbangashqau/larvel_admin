@extends('layouts.template2_mainlayout')
@section('content')
<section class="section" style="user-select: auto;">
          <div class="section-body" style="user-select: auto;">
            <div class="row" style="user-select: auto;">
              <div class="col-12 col-md-6 col-lg-12" style="user-select: auto;">
                <div class="card" style="user-select: auto;">
                  <div class="card-header" style="user-select: auto;">
                    <a href="javascript:history.back()" style="float:right;" class="btn btn-primary pull-right">Back</a>
                    <h4 style="user-select: auto;">Add Customer</h4>
                  </div>
                  <form action="save_customer" method="POST" enctype="multipart/form-data" style="user-select: auto;">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
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
                          <input name="password" type="password" class="form-control" style="user-select: auto;">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                  <div class="form-group" style="user-select: auto;">
                    <label style="user-select: auto;">Address</label>
                    <input name="address" type="text" class="form-control" style="user-select: auto;">
                  </div>
                </div>


                </div>

                 <div class="row" style="user-select: auto;">

                    <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Zip Code</label>
                      <input type="text" name="zip_code" class="form-control" style="user-select: auto;">
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                <div class="form-group" style="user-select: auto;">
                  <label style="user-select: auto;">Mobile No</label>
                  <input type="text" name="mobile_number" class="form-control" style="user-select: auto;">
                </div>
              </div>

                </div>
                 <div class="row" style="user-select: auto;">

                  <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                   <div class="form-group" style="user-select: auto;">
                     <label style="user-select: auto;">Profile Picture</label>
                     <input name="pic_img" type="file" class="form-control" style="user-select: auto;">
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
