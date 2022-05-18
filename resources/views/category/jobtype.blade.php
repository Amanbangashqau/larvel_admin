@extends('layouts.template2_mainlayout')
@section('content')
<div class="main-content">


    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Job Type</h5>
                        </div>
                        <a href="{{ url('add_job_type/'.$cat_id) }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Job type</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Type
                                    </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <?php $i=1;?>
                              @foreach ($categories_types as $category_type)
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$category_type->cat_type}}   </p>
                                  </td>


                                  <td class="text-center">
                                      <a href="{{ url('edit_job_type/'.$category_type->id)}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit ">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <a href="{{ url('delete_job_type/'.$category_type->id) }}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Delete ">
                                      <span>
                                          <i   class="cursor-pointer fas fa-trash text-secondary"></i>
                                      </span>
                                      </a>
                                  </td>
                              </tr>
                              <?php $i++; ?>
                              @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
