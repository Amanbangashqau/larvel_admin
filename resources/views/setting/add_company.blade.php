@extends('layouts.template2_mainlayout')
@section('content')
<section class="section" style="user-select: auto;">
          <div class="section-body" style="user-select: auto;">
            <div class="row" style="user-select: auto;">
              <div class="col-12 col-md-6 col-lg-12" style="user-select: auto;">
                <div class="card" style="user-select: auto;">
                  <div class="card-header" style="user-select: auto;">
                    <h4 style="user-select: auto;">Add Company</h4>
                    <a href="javascript:history.back()" style="float:right;" class="btn btn-primary pull-right">Back</a>
                  </div>
                  <form action="save_company" method="POST" style="user-select: auto;">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="row" style="user-select: auto;">
                      <div class="col-6 col-md-6 col-lg-6" style="user-select: auto;">
                        <div class="card-body" style="user-select: auto;">
                          <div class="row" style="user-select: auto;">
                            <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                              <div class="form-group" style="user-select: auto;">
                              <label style="user-select: auto;"><h5> Company details </h5></label>
                              </div>
                            </div>
                          </div>

                          <div class="row" style="user-select: auto;">
                            <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                              <div class="form-group" style="user-select: auto;">
                              <label style="user-select: auto;"> Name</label>
                              <input name="name" type="text" class="form-control" style="user-select: auto;">

                              </div>
                            </div>
                          </div>

                      <div class="row" style="user-select: auto;">
                        <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                          <div class="form-group" style="user-select: auto;">
                            <label style="user-select: auto;"> Email Address  </label>
                            <input name="email" type="email" class="form-control" style="user-select: auto;">

                          </div>
                        </div>
                      </div>
                      <div class="row" style="user-select: auto;">
                        <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                          <div class="form-group" style="user-select: auto;">
                            <label style="user-select: auto;">  Address  </label>
                            <input name="address" type="text" class="form-control" style="user-select: auto;">

                          </div>
                        </div>
                      </div>
                      <div class="row" style="user-select: auto;">
                        <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                          <div class="form-group" style="user-select: auto;">
                            <label style="user-select: auto;">  Phone Number  </label>
                            <input name="phone_number" type="text" class="form-control" style="user-select: auto;">

                          </div>
                        </div>
                      </div>
                      <div class="row" style="user-select: auto;">
                        <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                          <div class="form-group" style="user-select: auto;">
                            <label style="user-select: auto;">  Works Sync Email  </label>
                            <input name="work_sync_email" type="text" class="form-control" style="user-select: auto;">

                          </div>
                        </div>
                      </div>

                      </div>
                    </div>
                    <div class="col-12 col-md-5 col-lg-5" style="user-select: auto;">
                      <div class="row" style="user-select: auto;">
                        <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                          <div class="form-group" style="user-select: auto;">
                          <label style="user-select: auto;"> <h5> Company details </h5></label>

                          </div>
                        </div>
                      </div>
                      <div class="row" style="user-select: auto;">
                        <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                          <div class="form-group" style="user-select: auto;">
                          <label style="user-select: auto;"> Notes </label>
                          <textarea  class="form-control" name="note" style=" height:350px;"> </textarea>

                          </div>
                        </div>
                      </div>

                      <div class="row" style="user-select: auto;">
                        <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                          <div class="form-group" style="user-select: auto;">
                          <label style="user-select: auto;"> Commission </label>
                          <input type="range" id="commission" name="commission"  class="form-control" min="0" max="100">

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="user-select: auto;">
                   <div class="card-footer text-right" style="user-select: auto;">
                    <button class="btn btn-primary mr-1" name="submit" type="submit" style="user-select: auto;">Submit</button>
                    <button class="btn btn-secondary" type="reset" style="user-select: auto;">Reset</button>
                  </div>
                </div>

                   </form>

                </div>
                </div>



              </div>





          </div>
        </section>
@endsection
