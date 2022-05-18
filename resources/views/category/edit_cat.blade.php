@extends('layouts.template2_mainlayout')
@section('content')
<section class="section" style="user-select: auto;">
          <div class="section-body" style="user-select: auto;">
            <div class="row" style="user-select: auto;">
              <div class="col-12 col-md-6 col-lg-12" style="user-select: auto;">
                <div class="card" style="user-select: auto;">
                  <div class="card-header" style="user-select: auto;">
                    <h4 style="user-select: auto;">Edit Category</h4>
                  </div>
                  <form action="{{ url('update_category') }}" method="POST" style="user-select: auto;">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <input type="hidden" name="id" value="{{$category->id}}">
                  <div class="card-body" style="user-select: auto;">
                    <div class="row" style="user-select: auto;">
                      <div class="col-12 col-md-6 col-lg-6" style="user-select: auto;">
                    <div class="form-group" style="user-select: auto;">
                      <label style="user-select: auto;">Category Name</label>
                      <input name="cat_name" type="text"  value="{{$category->cat_name}}"class="form-control" style="user-select: auto;">
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
