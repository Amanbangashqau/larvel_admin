@extends('layouts.template2_mainlayout')
@section('content')
<div class="main-content">


    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Jobs Report</h5>
                        </div>
                        <!-- <a href="{{ url('create_job') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New Job</a> -->
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <div class="tabbable">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab1" data-toggle="tab">Submitted (3)</a></li>
                          <li class=""><a href="#tab2" data-toggle="tab">In Progress (1)</a></li>
                          <li class=""><a href="#tab3" data-toggle="tab">Pending (0)</a></li>
                          <li class=""><a href="#tab4" data-toggle="tab">Done Pending Approval (10)</a></li>
                          <li class=""><a href="#tab4" data-toggle="tab">Appointments (5)</a></li>

                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab1">
                          </div>
                        </div>
                      </diV>
                      </diV>
                      </diV>
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
                                        Job Source
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
                                    <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th> -->
                                </tr>

                            </thead>
                            <tbody>
                              <tr>
                                  <td class="ps-4">
                                      <p class="text-xs font-weight-bold mb-0">1</p>
                                  </td>

                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Appliance Repair</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">Technician to repair, adjust, service or install .</p>
                                  </td>
                                  <td class="text-center">
                                      <p class="text-xs font-weight-bold mb-0">XYZ</p>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold"></span>
                                  </td>
                                  <td class="text-center">
                                      <span class="text-secondary text-xs font-weight-bold"></span>
                                  </td>

                                  <!-- <td class="text-center">
                                      <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                          data-bs-original-title="Edit Job">
                                          <i class="fas fa-edit text-secondary"></i>
                                      </a>
                                      <span>
                                          <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                      </span>
                                  </td> -->
                              </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
$(document).ready(function() {

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
