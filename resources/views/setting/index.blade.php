@extends('layouts.template2_mainlayout')
@section('content')
<div class="main-content">

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Company Name</h5>
                        </div>
                        <a href="{{ url('add_company') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Company</a>
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
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Address
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Phone Number
                                    </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Works Sync Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Note
                                    </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <?php $i=1;?>
                              @foreach ($companies as $company)
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{ $company->name }}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{ $company->email }}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{ $company->address }}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{ $company->phone_number }}</p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{ $company->work_sync_email }}</span>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{ $company->note }}</span>
                                  </td>
                                  <td class="text-center">
                                      <a href="edit_company/{{$company->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit ">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <a href="delete_company/{{$company->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Delete ">
                                      <span>
                                          <i   class="cursor-pointer fas fa-trash text-secondary"></i>
                                      </span>
                                      </a>
                                  </td>
                              </tr>
                              @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Sub Status</h5>
                        </div>
                        <a href="{{ url('add_sub_status') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Add Sub-Status</a>
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
                                        Parent Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sub-Status
                                    </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <?php $i=1;?>
                              @foreach ($status as $status_val)
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$status_val->parent_status}}</p>
                                  </td>
                                  <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$status_val->sub_status}}</p>
                                  </td>

                                  <td class="text-center">
                                      <a href="edit_sub_status/{{$status_val->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit ">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <a href="delete_sub_status/{{$status_val->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Delete ">
                                      <span>
                                          <i   class="cursor-pointer fas fa-trash text-secondary"></i>
                                      </span>
                                      </a>
                                  </td>
                              </tr>
                              @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Job Source </h5>
                        </div>
                        <a href="{{ url('add_ad_group') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Add Ad Group</a>
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
                                        Ad group Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description
                                    </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <?php $i=1;?>
                              @foreach ($JobSources as $jobsource)
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{ $i }}</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$jobsource->name}}</p>
                                  </td>
                                  <td class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">{{$jobsource->description}}</p>
                                  </td>

                                  <td class="text-center">
                                      <a href="edit_job_source/{{$jobsource->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit ">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <a href="delete_job_source/{{$jobsource->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Delete ">
                                      <span>
                                          <i   class="cursor-pointer fas fa-trash text-secondary"></i>
                                      </span>
                                      </a>
                                  </td>
                              </tr>
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
