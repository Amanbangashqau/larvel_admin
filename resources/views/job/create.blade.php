@extends('layouts.template2_mainlayout')
@section('content')
<section class="section" style="user-select: auto;">
          <div class="section-body" style="user-select: auto;">
            <div class="row" style="user-select: auto;">
              <div class="col-12 col-md-6 col-lg-12" style="user-select: auto;">
                <div class="card" style="user-select: auto;">
                  <div class="card-header" style="user-select: auto;">
                    <a href="javascript:history.back()" style="float:right;" class="btn btn-primary pull-right">Back</a>
                    <h4 style="user-select: auto;">New job</h4>
                  </div>
                  <form action="{{ url('save_job') }}" method="POST" enctype="multipart/form-data" style="user-select: auto;">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="card-body" style="user-select: auto;">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <h6>Client Details </h6>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Client Name</label>
                            <input name="client_name" type="text" class="form-control" style="user-select: auto;">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Company Name</label>
                            <input name="company_name" type="text" class="form-control" style="user-select: auto;">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Phone</label>
                            <input name="phone" type="text" class="form-control" style="user-select: auto;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Email</label>
                            <input name="email" type="text" class="form-control" style="user-select: auto;">
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <h6>Service Location </h6>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Address </label>
                            <input name="address" type="text" class="form-control" style="user-select: auto;">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">City</label>
                            <input name="city" type="text" class="form-control" style="user-select: auto;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">State</label>
                            <input name="state" type="text" class="form-control" style="user-select: auto;">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Zip Code </label>
                            <input name="zip_code" type="text" class="form-control" style="user-select: auto;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Country</label>
                            <select id="country" name="country" class="form-control">

                              @foreach ($countries as $country)
                              <option value="{{$country->id}}"> {{$country->name}}</option>
                              @endforeach
                             </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Metro Area </label>
                            <input type="text" name="metro_area" class="form-control" />

                          </div>
                        </div>
                      </div>
                    </div>
                    </div>

                    <div class="card-body" style="user-select: auto;">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <h6>Job Details </h6>
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Job Type</label>
                            <select class="form-control" name="job_type">

                              @foreach ($categories_types as $categories_type)
                              <option value="{{$categories_type->id}}"> {{$categories_type->cat_type}}</option>
                              @endforeach
                            </select>
                            <label style="user-select: auto;">Job Source</label>
                            <select class="form-control" name="job_source">

                              @foreach ($jobsources as $jobsource)
                              <option value="{{$jobsource->id}}"> {{$jobsource->name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Description</label>
                            <textarea name="description"  class="form-control" style="height:110px"> </textarea>

                          </div>

                        </div>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">External Company </label>
                            <select name="external_company_id" class="form-control">
                                <option> Select Company <option>
                                @foreach ($companies as $company)
                                <option value="{{$company->id}}"> {{$company->name}}</option>
                                @endforeach
                            </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Note  </label>
                            <textarea class="form-control" name="note"> </textarea>
                          </div>
                        </div>

                      </div>
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <h6>Scheduled  </h6>
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Start Date </label>
                            <input name="start_date" type="date" class="form-control" style="user-select: auto;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Start Time</label>
                          <input name="service_name" type="time" class="form-control" style="user-select: auto;">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">End Date </label>
                            <input name="service_name" type="date" class="form-control" style="user-select: auto;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">End Time</label>
                          <input name="service_name" type="time" class="form-control" style="user-select: auto;">

                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Assign Team Members  </label>
                            <select class="form-control">
                              <option <option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-body" style="user-select: auto;">

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
