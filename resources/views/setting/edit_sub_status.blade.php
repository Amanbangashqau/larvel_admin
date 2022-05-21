@extends('layouts.template2_mainlayout')
@section('content')
<section class="section" style="user-select: auto;">
          <div class="section-body" style="user-select: auto;">
            <div class="row" style="user-select: auto;">
              <div class="col-12 col-md-6 col-lg-12" style="user-select: auto;">
                <div class="card" style="user-select: auto;">
                  <div class="card-header" style="user-select: auto;">
                    <a href="javascript:history.back()" style="float:right;" class="btn btn-primary pull-right">Back</a>
                    <h4 style="user-select: auto;">Edit Sub-Status</h4>
                  </div>
                  <form action="{{ url('update_sub_status') }}" method="POST" style="user-select: auto;">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <input type="hidden" name="id" value="{{$status->id}}">
                  <div class="card-body" style="user-select: auto;">

                    <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;"> Parent Status</label>
                      <select class="form-control" name="parent_status">
                        @foreach ($parentstatus as $st)
                        <option value="{{$st->parent_status}}" <?php if($st->parent_status == $status->parent_status) {echo "selected";} ?> > {{$st->parent_status}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>

                </div>

                    <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;"> Sub Status</label>
                      <input name="sub_status" value="{{$status->sub_status}}" type="text" class="form-control" style="user-select: auto;">
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
