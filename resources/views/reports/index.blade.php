@extends('layouts.template2_mainlayout')
@section('content')
<div class="main-content">


    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Reports</h5><br/>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-left:15px;" >
                  <div class="col-sm-12">

                    <a href="{{ url('technician_report') }}" class="btn bg-gradient-primary btn-sm "  type="button">&nbsp; Technician report</a>
                    <a href="{{ url('statistics_report') }}" class="btn bg-gradient-primary btn-sm "  type="button">&nbsp;  Statistics Report</a>
                    <a href="{{ url('activity_report') }}" class="btn bg-gradient-primary btn-sm " type="button">&nbsp;  Activity report</a>
                    <a href="{{ url('time_clock_report') }}" class="btn bg-gradient-primary btn-sm " type="button">&nbsp;  Time clock report </a>
                    <a href="{{ url('activity_report') }}" class="btn bg-gradient-primary btn-sm " type="button">&nbsp;  Activity report</a> <br/>
                    <a href="{{ url('jobs_report') }}" class="btn bg-gradient-primary btn-sm  "  type="button">&nbsp; Jobs </a>
                    <a href="{{ url('mileage_report') }}" class="btn bg-gradient-primary btn-sm " type="button">&nbsp;  Mileage report</a>

                  </div>
                </div>
                <br/>
                <div class="row" style="padding-left:15px;" >
                  <div class="col-sm-12">
                  </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                  <div class="row my-4" style="user-select: auto;">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4" style="user-select: auto;">
          <div class="card" style="user-select: auto;">
            <div class="card-header pb-0" style="user-select: auto;">
              <div class="row" style="user-select: auto;">
                <div class="col-lg-6 col-7" style="user-select: auto;">
                  <h6 style="user-select: auto;">Tickets</h6>
                  <p class="text-sm mb-0" style="user-select: auto;">
                    <i class="fa fa-check text-info" aria-hidden="true" style="user-select: auto;"></i>
                    <span class="font-weight-bold ms-1" style="user-select: auto;">30 done</span> this month
                  </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end" style="user-select: auto;">
                  <div class="dropdown float-lg-end pe-4" style="user-select: auto;">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false" style="user-select: auto;">
                      <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true" style="user-select: auto;"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable" style="user-select: auto;">
                      <li style="user-select: auto;"><a class="dropdown-item border-radius-md" href="javascript:;" style="user-select: auto;">Action</a></li>
                      <li style="user-select: auto;"><a class="dropdown-item border-radius-md" href="javascript:;" style="user-select: auto;">Another action</a></li>
                      <li style="user-select: auto;"><a class="dropdown-item border-radius-md" href="javascript:;" style="user-select: auto;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2" style="user-select: auto;">
              <div class="table-responsive" style="user-select: auto;">
                <table class="table align-items-center mb-0" style="user-select: auto;">
                  <thead style="user-select: auto;">
                    <tr style="user-select: auto;">
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="user-select: auto;">Companies</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="user-select: auto;">Members</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="user-select: auto;">Budget</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="user-select: auto;">Completion</th>
                    </tr>
                  </thead>
                  <tbody style="user-select: auto;">
                    <tr style="user-select: auto;">
                      <td style="user-select: auto;">
                        <div class="d-flex px-2 py-1" style="user-select: auto;">
                          <div style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd" style="user-select: auto;">
                          </div>
                          <div class="d-flex flex-column justify-content-center" style="user-select: auto;">
                            <h6 class="mb-0 text-sm" style="user-select: auto;">Soft UI XD Version</h6>
                          </div>
                        </div>
                      </td>
                      <td style="user-select: auto;">
                        <div class="avatar-group mt-2" style="user-select: auto;">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Tompson" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-1.jpg" alt="team1" style="user-select: auto;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Romina Hadid" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-2.jpg" alt="team2" style="user-select: auto;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Alexander Smith" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-3.jpg" alt="team3" style="user-select: auto;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Jessica Doe" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-4.jpg" alt="team4" style="user-select: auto;">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm" style="user-select: auto;">
                        <span class="text-xs font-weight-bold" style="user-select: auto;"> $14,000 </span>
                      </td>
                      <td class="align-middle" style="user-select: auto;">
                        <div class="progress-wrapper w-75 mx-auto" style="user-select: auto;">
                          <div class="progress-info" style="user-select: auto;">
                            <div class="progress-percentage" style="user-select: auto;">
                              <span class="text-xs font-weight-bold" style="user-select: auto;">60%</span>
                            </div>
                          </div>
                          <div class="progress" style="user-select: auto;">
                            <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="user-select: auto;"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr style="user-select: auto;">
                      <td style="user-select: auto;">
                        <div class="d-flex px-2 py-1" style="user-select: auto;">
                          <div style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm me-3" alt="atlassian" style="user-select: auto;">
                          </div>
                          <div class="d-flex flex-column justify-content-center" style="user-select: auto;">
                            <h6 class="mb-0 text-sm" style="user-select: auto;">Add Progress Track</h6>
                          </div>
                        </div>
                      </td>
                      <td style="user-select: auto;">
                        <div class="avatar-group mt-2" style="user-select: auto;">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Romina Hadid" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-2.jpg" alt="team5" style="user-select: auto;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Jessica Doe" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-4.jpg" alt="team6" style="user-select: auto;">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm" style="user-select: auto;">
                        <span class="text-xs font-weight-bold" style="user-select: auto;"> $3,000 </span>
                      </td>
                      <td class="align-middle" style="user-select: auto;">
                        <div class="progress-wrapper w-75 mx-auto" style="user-select: auto;">
                          <div class="progress-info" style="user-select: auto;">
                            <div class="progress-percentage" style="user-select: auto;">
                              <span class="text-xs font-weight-bold" style="user-select: auto;">10%</span>
                            </div>
                          </div>
                          <div class="progress" style="user-select: auto;">
                            <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="user-select: auto;"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr style="user-select: auto;">
                      <td style="user-select: auto;">
                        <div class="d-flex px-2 py-1" style="user-select: auto;">
                          <div style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm me-3" alt="team7" style="user-select: auto;">
                          </div>
                          <div class="d-flex flex-column justify-content-center" style="user-select: auto;">
                            <h6 class="mb-0 text-sm" style="user-select: auto;">Fix Platform Errors</h6>
                          </div>
                        </div>
                      </td>
                      <td style="user-select: auto;">
                        <div class="avatar-group mt-2" style="user-select: auto;">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Romina Hadid" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-3.jpg" alt="team8" style="user-select: auto;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Jessica Doe" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-1.jpg" alt="team9" style="user-select: auto;">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm" style="user-select: auto;">
                        <span class="text-xs font-weight-bold" style="user-select: auto;"> Not set </span>
                      </td>
                      <td class="align-middle" style="user-select: auto;">
                        <div class="progress-wrapper w-75 mx-auto" style="user-select: auto;">
                          <div class="progress-info" style="user-select: auto;">
                            <div class="progress-percentage" style="user-select: auto;">
                              <span class="text-xs font-weight-bold" style="user-select: auto;">100%</span>
                            </div>
                          </div>
                          <div class="progress" style="user-select: auto;">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="user-select: auto;"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr style="user-select: auto;">
                      <td style="user-select: auto;">
                        <div class="d-flex px-2 py-1" style="user-select: auto;">
                          <div style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm me-3" alt="spotify" style="user-select: auto;">
                          </div>
                          <div class="d-flex flex-column justify-content-center" style="user-select: auto;">
                            <h6 class="mb-0 text-sm" style="user-select: auto;">Launch our Mobile App</h6>
                          </div>
                        </div>
                      </td>
                      <td style="user-select: auto;">
                        <div class="avatar-group mt-2" style="user-select: auto;">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Tompson" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-4.jpg" alt="user1" style="user-select: auto;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Romina Hadid" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-3.jpg" alt="user2" style="user-select: auto;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Alexander Smith" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-4.jpg" alt="user3" style="user-select: auto;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Jessica Doe" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-1.jpg" alt="user4" style="user-select: auto;">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm" style="user-select: auto;">
                        <span class="text-xs font-weight-bold" style="user-select: auto;"> $20,500 </span>
                      </td>
                      <td class="align-middle" style="user-select: auto;">
                        <div class="progress-wrapper w-75 mx-auto" style="user-select: auto;">
                          <div class="progress-info" style="user-select: auto;">
                            <div class="progress-percentage" style="user-select: auto;">
                              <span class="text-xs font-weight-bold" style="user-select: auto;">100%</span>
                            </div>
                          </div>
                          <div class="progress" style="user-select: auto;">
                            <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="user-select: auto;"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr style="user-select: auto;">
                      <td style="user-select: auto;">
                        <div class="d-flex px-2 py-1" style="user-select: auto;">
                          <div style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm me-3" alt="jira" style="user-select: auto;">
                          </div>
                          <div class="d-flex flex-column justify-content-center" style="user-select: auto;">
                            <h6 class="mb-0 text-sm" style="user-select: auto;">Add the New Pricing Page</h6>
                          </div>
                        </div>
                      </td>
                      <td style="user-select: auto;">
                        <div class="avatar-group mt-2" style="user-select: auto;">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Tompson" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-4.jpg" alt="user5" style="user-select: auto;">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm" style="user-select: auto;">
                        <span class="text-xs font-weight-bold" style="user-select: auto;"> $500 </span>
                      </td>
                      <td class="align-middle" style="user-select: auto;">
                        <div class="progress-wrapper w-75 mx-auto" style="user-select: auto;">
                          <div class="progress-info" style="user-select: auto;">
                            <div class="progress-percentage" style="user-select: auto;">
                              <span class="text-xs font-weight-bold" style="user-select: auto;">25%</span>
                            </div>
                          </div>
                          <div class="progress" style="user-select: auto;">
                            <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25" style="user-select: auto;"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr style="user-select: auto;">
                      <td style="user-select: auto;">
                        <div class="d-flex px-2 py-1" style="user-select: auto;">
                          <div style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm me-3" alt="invision" style="user-select: auto;">
                          </div>
                          <div class="d-flex flex-column justify-content-center" style="user-select: auto;">
                            <h6 class="mb-0 text-sm" style="user-select: auto;">Redesign New Online Shop</h6>
                          </div>
                        </div>
                      </td>
                      <td style="user-select: auto;">
                        <div class="avatar-group mt-2" style="user-select: auto;">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Tompson" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-1.jpg" alt="user6" style="user-select: auto;">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Jessica Doe" style="user-select: auto;">
                            <img src="http://127.0.0.1:8000/template2/assets/img/team-4.jpg" alt="user7" style="user-select: auto;">
                          </a>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm" style="user-select: auto;">
                        <span class="text-xs font-weight-bold" style="user-select: auto;"> $2,000 </span>
                      </td>
                      <td class="align-middle" style="user-select: auto;">
                        <div class="progress-wrapper w-75 mx-auto" style="user-select: auto;">
                          <div class="progress-info" style="user-select: auto;">
                            <div class="progress-percentage" style="user-select: auto;">
                              <span class="text-xs font-weight-bold" style="user-select: auto;">40%</span>
                            </div>
                          </div>
                          <div class="progress" style="user-select: auto;">
                            <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40" style="user-select: auto;"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" style="user-select: auto;">
          <div class="card h-100" style="user-select: auto;">
            <div class="card-header pb-0" style="user-select: auto;">
              <h6 style="user-select: auto;">Orders overview</h6>
              <p class="text-sm" style="user-select: auto;">
                <i class="fa fa-arrow-up text-success" aria-hidden="true" style="user-select: auto;"></i>
                <span class="font-weight-bold" style="user-select: auto;">24%</span> this month
              </p>
            </div>
            <div class="card-body p-3" style="user-select: auto;">
              <div class="timeline timeline-one-side" style="user-select: auto;">
                <div class="timeline-block mb-3" style="user-select: auto;">
                  <span class="timeline-step" style="user-select: auto;">
                    <i class="ni ni-bell-55 text-success text-gradient" style="user-select: auto;"></i>
                  </span>
                  <div class="timeline-content" style="user-select: auto;">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" style="user-select: auto;">$2400, Design changes</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" style="user-select: auto;">22 DEC 7:20 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3" style="user-select: auto;">
                  <span class="timeline-step" style="user-select: auto;">
                    <i class="ni ni-html5 text-danger text-gradient" style="user-select: auto;"></i>
                  </span>
                  <div class="timeline-content" style="user-select: auto;">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" style="user-select: auto;">New order #1832412</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" style="user-select: auto;">21 DEC 11 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3" style="user-select: auto;">
                  <span class="timeline-step" style="user-select: auto;">
                    <i class="ni ni-cart text-info text-gradient" style="user-select: auto;"></i>
                  </span>
                  <div class="timeline-content" style="user-select: auto;">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" style="user-select: auto;">Server payments for April</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" style="user-select: auto;">21 DEC 9:34 PM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3" style="user-select: auto;">
                  <span class="timeline-step" style="user-select: auto;">
                    <i class="ni ni-credit-card text-warning text-gradient" style="user-select: auto;"></i>
                  </span>
                  <div class="timeline-content" style="user-select: auto;">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" style="user-select: auto;">New card added for order #4395133</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" style="user-select: auto;">20 DEC 2:20 AM</p>
                  </div>
                </div>
                <div class="timeline-block mb-3" style="user-select: auto;">
                  <span class="timeline-step" style="user-select: auto;">
                    <i class="ni ni-key-25 text-primary text-gradient" style="user-select: auto;"></i>
                  </span>
                  <div class="timeline-content" style="user-select: auto;">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" style="user-select: auto;">Unlock packages for development</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" style="user-select: auto;">18 DEC 4:54 AM</p>
                  </div>
                </div>
                <div class="timeline-block" style="user-select: auto;">
                  <span class="timeline-step" style="user-select: auto;">
                    <i class="ni ni-money-coins text-dark text-gradient" style="user-select: auto;"></i>
                  </span>
                  <div class="timeline-content" style="user-select: auto;">
                    <h6 class="text-dark text-sm font-weight-bold mb-0" style="user-select: auto;">New order #9583120</h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0" style="user-select: auto;">17 DEC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
