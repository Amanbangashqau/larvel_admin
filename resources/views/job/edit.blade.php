@extends('layouts.template2_mainlayout')
@section('content')
<section class="section" style="user-select: auto;">
          <div class="section-body" style="user-select: auto;">
            <div class="row" style="user-select: auto;">
              <div class="col-12 col-md-6 col-lg-12" style="user-select: auto;">
                <div class="card" style="user-select: auto;">
                  <div class="card-header" style="user-select: auto;">
                    <a href="javascript:history.back()" style="float: right; user-select: auto;" class="btn btn-primary pull-right">Back</a>
                    <h4 style="user-select: auto;">Edit job</h4>
                  </div>
                  <form action="{{ url('update_job') }}" method="POST" enctype="multipart/form-data" style="user-select: auto;">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" name="id" value="{{$job->id}}">
                    <div class="card-body" style="user-select: auto;">
                      <div class="row">
                        <div class="col-6 col-md-6 col-lg-6" style="user-select: auto;">
                          <label style="user-select: auto;">Status</label>
                          <select id="status" name="status" class="form-control">
                            @foreach ($status as $st)
                            <option value="{{$st->id}}" <?php if($st->id ==$job->status){echo "selected"; } ?> > <b> {{$st->parent_status}} </b> <br/> {{$st->sub_status}}</option>
                            @endforeach
                           </select>
                        </div>
                      </div>
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <h6>Client Details </h6>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Client Name</label>
                            <input name="client_name" value="{{$job->client_name}}" type="text" class="form-control" style="user-select: auto;">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Company Name</label>
                            <input name="company_name" type="text" value="{{$job->company_name}}" class="form-control" style="user-select: auto;">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Phone</label>
                            <input name="phone" type="text" value="{{$job->phone}}"  class="form-control" style="user-select: auto;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Email</label>
                            <input name="email" type="text" value="{{$job->email}}" class="form-control" style="user-select: auto;">
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <h6>Service Location </h6>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Address </label>
                            <input name="address" value="{{$job->address}}" type="text" class="form-control" style="user-select: auto;">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">City</label>
                            <input name="city" type="text" value="{{$job->city}}" class="form-control" style="user-select: auto;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">State</label>
                            <input name="state" type="text" value="{{$job->state}}" class="form-control" style="user-select: auto;">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Zip Code </label>
                            <input name="zip_code" type="text" value="{{$job->zip_code}}" class="form-control" style="user-select: auto;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Country</label>
                            <select id="country" name="country" class="form-control">

                              @foreach ($countries as $country)
                              <option value="{{$country->id}}" <?php if($country->id ==$job->country){echo "selected"; } ?> > {{$country->name}}</option>
                              @endforeach
                             </select>

                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Metro Area </label>
                            <input type="text" value="{{$job->metro_area}}" name="metro_area" class="form-control" />

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
                              <option value="{{$categories_type->id}}" <?php if($categories_type->id ==$job->job_type){echo "selected"; } ?>> {{$categories_type->cat_type}}</option>
                              @endforeach
                            </select>
                            <label style="user-select: auto;">Job Source</label>
                            <select class="form-control" name="job_source">

                              @foreach ($jobsources as $jobsource)
                              <option value="{{$jobsource->id}}" <?php if($jobsource->id ==$job->job_source){echo "selected"; } ?> > {{$jobsource->name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Description</label>
                            <textarea name="description"   class="form-control" style="height:110px"> {{$job->description}} </textarea>

                          </div>

                        </div>
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">External Company </label>
                              <select name="external_company_id" class="form-control">
                                  <option> Select Company <option>
                                  @foreach ($companies as $company)
                                  <option value="{{$company->id}}" <?php if($company->id == $job->external_company_id){echo "selected";} ?> > {{$company->name}}</option>
                                  @endforeach
                              </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12" style="user-select: auto;">
                            <label style="user-select: auto;">Note  </label>
                            <textarea class="form-control"  name="note"> {{$job->note}} </textarea>
                          </div>
                        </div>

                      </div>
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                        <h6>Scheduled  </h6>
                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Start Date </label>
                            <input name="start_date" value="{{$job->start_date}}" type="date" class="form-control" style="user-select: auto;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">Start Time</label>
                          <input name="start_time" value="{{$job->start_time}}" type="time" class="form-control" style="user-select: auto;">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">End Date </label>
                            <input name="end_date" value="{{$job->end_date}}" type="date" class="form-control" style="user-select: auto;">
                          </div>
                          <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                            <label style="user-select: auto;">End Time</label>
                          <input name="end_time" value="{{$job->end_time}}" type="time" class="form-control" style="user-select: auto;">

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
