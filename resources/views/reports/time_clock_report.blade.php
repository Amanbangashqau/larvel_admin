@extends('layouts.template2_mainlayout')
@section('content')
<div class="main-content">


    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Time Clock  Report </h5>
                        </div>
                        <a href="{{ url('create_job') }}" class="btn bg-gradient-primary btn-sm mb-0 pull right" style="margin-right:-390px !important" type="button">&nbsp;  Export To PDF</a>
                        <a href="{{ url('create_job') }}" class="btn bg-gradient-primary btn-sm mb-0 pull right" style="margin-right:-390px !important;" type="button">&nbsp;  Export To CSV</a>
                        <a href="{{ url('create_job') }}" class="btn bg-gradient-primary btn-sm mb-0 pull right" type="button">&nbsp;  Print</a>

                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <div class="row" style="padding-left:15px;" >
                        <div class="col-sm-2">
                          <label> Start Date </label>
                          <input type="date"  class="form-control"/>
                        </div>
                        <div class="col-sm-2">
                          <label> End Date </label>
                          <input type="date"  class="form-control"/>
                        </div>
                        <div class="col-sm-1">
                          <label> &nbsp; </label>
                          <input type="button" value="Show"  class="  btn btn-success"/>
                        </div>
                      </div>
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Technician Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Clock In
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Clock out
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date And Time
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">1</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Aman</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Clock In</p>
                                  </td>
                                  <td>
                                  </td>

                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">12-04-2022</span>
                                  </td>


                              </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
