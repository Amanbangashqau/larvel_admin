@extends('layouts.template2_mainlayout')
@section('content')
<div class="main-content">


    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Technician</h5>
                        </div>
                        <a href="{{ url('add_member') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Technician</a>
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
                                        Service Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Experience
                                    </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Latitude
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Longitude
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <?php $i=1;?>
                              @foreach ($technicians as $technician)
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{$i}}</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$technician->name}}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$technician->email}}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$technician->service_id}}</p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$technician->experience}}</span>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$technician->latitude}}</span>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$technician->longitude}}</span>
                                  </td>
                                  <td class="text-center">
                                      <a href="edit_technician/{{$technician->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit ">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <a href="delete_technician/{{$technician->id}}" class="mx-3" data-bs-toggle="tooltip"
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
