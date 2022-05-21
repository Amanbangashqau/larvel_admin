@extends('layouts.template2_mainlayout')
@section('content')
<style>
.tabs
{
  display: none;
}
#tab1
{
  display: block;
}
</style>
<div class="main-content">


    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Jobs</h5>
                        </div>
                        <a href="{{ url('create_job') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Job</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <div class="tabbable">
                        <ul class="nav nav-tabs">
                          <li class="active"><a onclick="show_tab('tab1')" data-toggle="tab">Submitted (<span id="tab1_total"> </span>)</a></li>
                          <li class=""><a onclick="show_tab('tab2')" data-toggle="tab">In Progress (<span id="tab2_total"> </span>)</a></li>
                          <li class=""><a onclick="show_tab('tab3')" data-toggle="tab">Pending (<span id="tab3_total"> </span>)</a></li>
                          <li class=""><a onclick="show_tab('tab4')" data-toggle="tab">Done Pending Approval (<span id="tab4_total"> </span>)</a></li>
                          <li class=""><a onclick="show_tab('tab5')" data-toggle="tab">Appointments (<span id="tab5_total"> </span>)</a></li>

                        </ul>
                        <!-- <div class="tab-content">
                          <div class="tab-pane active" id="tab1">
                            echo "tttttttttttttttttttttttttttttttttttttttttt"
                          </div>
                        </div> -->
                      </diV>
                      </diV>
                      </diV>
                      <div class="tabs" id="tab1">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Description
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Type
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Source
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        External Company
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <?php
                              $i=1;
                              $tab1_total =0;

                              ?>
                              @foreach ($jobs as $job)
                              @if($job->status == 'Submitted')
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{$i}}</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->description}} </p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->job_type}}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->job_source}}</p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$job->external_company}}</span>
                                  </td>
                                  <td class="text-center">
                                    <?php
                                    // $status_txt ='Submitted';
                                    // if($job->status ==2)
                                    // $status_txt ='In Progress';
                                    // if($job->status ==3)
                                    // $status_txt ='Pending';
                                    // if($job->status ==4)
                                    // $status_txt ='Done Pending Approval ';
                                    // if($job->status ==5)
                                    // $status_txt ='Appointments';




                                     ?>
                                      <span class="text-secondary text-xs font-weight-bold">{{$job->status}}</span>
                                  </td>

                                  <td class="text-center">
                                      <a href="edit_job/{{$job->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit ">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <a href="delete_job/{{$job->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Delete ">
                                      <span>
                                          <i   class="cursor-pointer fas fa-trash text-secondary"></i>
                                      </span>
                                      </a>
                                  </td>
                              </tr>
                              <?php
                              $i++;
                              $tab1_total++;
                              ?>

                              @endif
                              @endforeach

                            </tbody>
                        </table>
                      </div>
                      <!--/////////////////====tab2////////////////////-->
                      <div class="tabs" id="tab2">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Description
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Type
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Source
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        External Company
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <?php
                              $i=1;
                              $tab2_total =0;

                              ?>
                              @foreach ($jobs as $job)
                              @if($job->status == 'In Progress')
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{$i}}</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->description}} </p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->job_type}}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->job_source}}</p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$job->external_company}}</span>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$job->status}}</span>
                                  </td>

                                  <td class="text-center">
                                      <a href="edit_job/{{$job->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit ">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <a href="delete_job/{{$job->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Delete ">
                                      <span>
                                          <i   class="cursor-pointer fas fa-trash text-secondary"></i>
                                      </span>
                                      </a>
                                  </td>
                              </tr>
                              <?php
                              $i++;
                              $tab2_total++;
                              ?>

                              @endif
                              @endforeach

                            </tbody>
                        </table>
                      </div>

                      <!--/////////////////====tab3////////////////////-->
                      <div class="tabs" id="tab3">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Description
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Type
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Source
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        External Company
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <?php
                              $i=1;
                              $tab3_total =0;

                              ?>
                              @foreach ($jobs as $job)
                              @if($job->status == 'Pending')
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{$i}}</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->description}} </p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->job_type}}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->job_source}}</p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$job->external_company}}</span>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$job->status}}</span>
                                  </td>

                                  <td class="text-center">
                                      <a href="edit_job/{{$job->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit ">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <a href="delete_job/{{$job->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Delete ">
                                      <span>
                                          <i   class="cursor-pointer fas fa-trash text-secondary"></i>
                                      </span>
                                      </a>
                                  </td>
                              </tr>
                              <?php
                              $i++;
                              $tab3_total++;
                              ?>

                              @endif
                              @endforeach

                            </tbody>
                        </table>
                      </div>


                      <!--/////////////////====tab4////////////////////-->
                      <div class="tabs" id="tab4">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Description
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Type
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Source
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        External Company
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <?php
                              $i=1;
                              $tab4_total =0;

                              ?>
                              @foreach ($jobs as $job)
                              @if($job->status == 'Done Pending Approval')
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{$i}}</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->description}} </p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->job_type}}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->job_source}}</p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$job->external_company}}</span>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$job->status}}</span>
                                  </td>

                                  <td class="text-center">
                                      <a href="edit_job/{{$job->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit ">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <a href="delete_job/{{$job->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Delete ">
                                      <span>
                                          <i   class="cursor-pointer fas fa-trash text-secondary"></i>
                                      </span>
                                      </a>
                                  </td>
                              </tr>
                              <?php
                              $i++;
                              $tab4_total++;
                              ?>

                              @endif
                              @endforeach

                            </tbody>
                        </table>
                      </div>

                      <!--/////////////////====tab5////////////////////-->
                      <div class="tabs" id="tab5">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Description
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Type
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Job Source
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        External Company
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                              <?php
                              $i=1;
                              $tab5_total =0;

                              ?>
                              @foreach ($jobs as $job)
                              @if($job->status == 'Done Pending Approval')
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">{{$i}}</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->description}} </p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->job_type}}</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">{{$job->job_source}}</p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$job->external_company}}</span>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold">{{$job->status}}</span>
                                  </td>

                                  <td class="text-center">
                                      <a href="edit_job/{{$job->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit ">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <a href="delete_job/{{$job->id}}" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Delete ">
                                      <span>
                                          <i   class="cursor-pointer fas fa-trash text-secondary"></i>
                                      </span>
                                      </a>
                                  </td>
                              </tr>
                              <?php
                              $i++;
                              $tab5_total++;
                              ?>

                              @endif
                              @endforeach

                            </tbody>
                        </table>
                      </div>





                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
function show_tab(id)
{
  $(".tabs").css('display','none');
  $("#"+id+"").css('display','block');


}
$(document).ready(function() {
  var tab1_total= '<?=$tab1_total?>';
  var tab2_total= '<?=$tab2_total?>';
  var tab3_total= '<?=$tab3_total?>';
  var tab4_total= '<?=$tab4_total?>';
  var tab5_total= '<?=$tab5_total?>';
  $("#tab1_total").html(tab1_total);
  $("#tab2_total").html(tab2_total);
  $("#tab3_total").html(tab3_total);
  $("#tab4_total").html(tab4_total);
  $("#tab5_total").html(tab5_total);

  $('.tabbable ul').on('click', 'li', function() {
    // alert();
    // if ($(this).hasClass('active')) {
    //   $(this).removeClass('active');
    // }
//
    $('li').removeClass('active');
    // if ($('li').hasClass('active')) {
    //   $('li').removeClass('active');
    // }
    // else {
      $(this).addClass('active');
    // }
  });

  $('.dataTables_scrollBody').css('height', '185px'); //forces height to ##px after every redraw
  $('.dataTables_scrollBody').css('background-image', 'url("https://i.imgur.com/Z9WyhV1.png")'); //force a grid image (self-created) as background, always
  $('.dataTables_scrollBody').css('background-repeat', 'repeat');

});
</script>
<style>


.modal {
  text-align: center;
  padding: 0!important;
}

.modal:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -4px;
  /* Adjusts for spacing */
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}
.nav-tabs>li.active>a,
.nav-tabs>li.active>a:hover,
.nav-tabs>li.active>a:focus {
  /* background-color: #D4D2D2; */
  border-bottom: 1px solid #666;
  /* border-style: solid; */
  /* border-bottom-color: black; */


}
.nav-tabs>li
{
  padding-left: 50px;
}

.nav-tabs {
  border-bottom-color: #ddd7d7;

}

.nav-tabs>li>a:hover {
  border-bottom-color: #666;
  color:black;

}
.nav-tabs>li:hover {
  color: Red;
}
.nav-tabs>li.active>a {
  color: black;
}
ul {
  list-style-type: none;
}
.li_selected{
  background-color: black;
  color:white;
}

.tab-pane
{
  padding-top: 20px;
}
.modal .modal-dialog .modal-content .modal-body {
    padding: 0px 26px !important;
}
</style>

@endsection
