@extends('layouts.template2_mainlayout')
@section('content')
<section class="section" style="user-select: auto;">
          <div class="section-body" style="user-select: auto;">
            <div class="row" style="user-select: auto;">
              <div class="col-12 col-md-6 col-lg-12" style="user-select: auto;">
                <div class="card" style="user-select: auto;">
                  <div class="card-header" style="user-select: auto;">
                    <h4 style="user-select: auto;">Edit Sub-Status</h4>
                    <a href="javascript:history.back()" style="float:right;" class="btn btn-primary pull-right">Back</a>
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
                        <option <?php if( $status->parent_status == 'Submitted'){ echo "selected";} ?> value="Submitted">Submitted </option>
                        <option <?php if( $status->parent_status == 'In Progress'){ echo "selected";} ?> value="In Progress">In Progress</option>
                        <option <?php if( $status->parent_status == 'Pending'){ echo "selected";} ?>value="Pending">Pending</option>
                        <option <?php if( $status->parent_status == 'Done Pending Approval'){ echo "selected";} ?> value="Done Pending Approval">Done Pending Approval</option>
                        <option <?php if( $status->parent_status == 'Appointments'){ echo "selected";} ?> value="Appointments">Appointments</option>

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
