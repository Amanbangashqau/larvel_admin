<?php ini_set('memory_limit', '520M'); ?>
@extends('layouts.mainlayout')
@section('pageTitle', 'ShowRooms')


@section('content')
<!-- <div class="alert alert-success alert-dismissable margin5">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Success:</strong> You have successfully logged in.
</div> -->
<!-- Main content -->
<section class="content-header">
    <h1>{{$company->comp_name}}</h1>
    <ol class="breadcrumb">
        <li class="active">
            <a href="#">
                <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Dashboard
            </a>
        </li>
    </ol>
</section>
  <section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box primary">
                <!-- <div class="portlet-title">
                    <div class="caption">
                        <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> ShowRooms
                    </div>
                </div> -->


                <div class="portlet-body flip-scroll">
                  @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}
                    </div><br />
                  @endif
                  @if(session()->get('delete'))
                    <div class="alert alert-danger">
                      {{ session()->get('delete') }}
                    </div><br />
                  @endif

                  <!-- <a href="/create_company" class="button button-glow button-rounded button-primary pull-right"></a> -->
                  &nbsp; &nbsp;<a class="button button-glow button-rounded button-success pull-right" style="margin-left:5px;"  onclick="window.history.back()">Back</a>
                  <?php
                  if($comp_id =='' || $u_role=='Admin')
                  {?>
                  <button type="button" class="button button-glow button-rounded button-primary pull-right" data-toggle="modal" data-target="#myModal">Add New</button>
                <?php }?>
                   <br/><br/>
                    <table class="table table-bordered table-striped table-condensed flip-content" id="datatable">
                        <thead class="flip-content">
                            <tr>
                                <th>S.no</th>
                                <th>User Name</th>
                                <!-- <th>Account Code</th> -->
                                <!-- <th>Manager Name</th> -->

                                <th >Email</th>
                                <th>User Role </th>
                                <th >Opening Time</th>
                                <th >Closing Time </th>
                                <?php
                                if($comp_id =='' || $u_role=='Admin')
                                {?>
                                <th colspan="3">Action</th>
                              <?php
                                }
                                ?>

                            </tr>
                        </thead>
                        <tbody id="user_tbody">
                          <?php  $i=1;
                          //print "<pre>";
                          //print_r($usergodown[0]); exit();

                          ?>
                            @foreach($users as $user)

                            <tr>
                                <td><?=$i?></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role_id}}</td>
                                <td>{{$user->login_time_from}}</td>
                                <td>{{$user->login_time_to}}</td>
                                <?php
                                if($comp_id =='' || $u_role=='Admin')
                                {?>
                                <td><a href="/user_index?id={{$user->id}}&company_id={{ app('request')->input('id')}}"><button class="label label-sm label-success" style="border:none" > Move User</button> </a></td>

                                <td> <a ><button class="label label-sm label-success open_modal" value="{{$user->id}}" style="border:none" > Edit</button> </a></td>
                                <td>
                                  <?php if ($user->role_id != 1)
                                  {
                                  ?>
                                  <form id='user_delete' method="post">
                                    @csrf
                                  <input type="hidden" value="{{ app('request')->input('id') }}" name="buid"  />
                                  <input type="hidden"  name="user_id" value="{{$user->id}}"  />
                                  <button onclick="return confirm('Are you sure you want to delete this item?');"  type="button" class="label label-sm label-danger" onclick="delete_userse()" style="border:none">Delete</button>
                                  </form>
                                <?php }?>
                                </td>

                                <?php }?>
                            </tr>
                          <?php $i++;?>
                          @endforeach
                          <input type="hidden" value="<?=$i?>" id="row_no" />
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>


  </section>

  <!--create==modal======================-->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header btn-success">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add User</h4>
        </div>
        <div class="modal-body">

          <div class="panel-body">
            <form role="form" method="post" id='user_form' action="/add_user?id={{ app('request')->input('id') }}&company_id={{ app('request')->input('company_id') }}" >
              @csrf
              <input type="hidden" value="{{ app('request')->input('id') }}" name="buid" id="buid" />
              <input type="hidden"  name="id" id="id" />
              <input type="hidden"  name="url" id="url" value="add_user" />
              <input type="hidden" value="{{ app('request')->input('company_id') }}" name="company_id" id="company_id" />

                <div class="form-group">
                    <label>User Name</label>
                    <input class="form-control" name="user_name" id="user_name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="email" id="email" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label>Password </label>
                    <input type="password" class="form-control"  name="password" id="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <label>Business unit name</label>
                    <select class="form-control" name="u_buid_id" id="u_buid_id">
                     @foreach($showroomgodown as $showr_d)
                      <option value='{{$showr_d->id}}'>{{$showr_d->bussiness_unit_name}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>User Role </label>
                    <select class="form-control" name="role_id" id="role_id">
                     @foreach($user_roles as $role)
                      <option value='{{$role->id}}'>{{$role->name}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <div class="checkbox-list">
                  <label for="closeButton">
                      <span class="checker" id="uniform-closeButton">
                          <input id="Time_based_login" onclick="check()" type="checkbox" value="checked" checked="" class="input-small custom-checkbox"> <span style="margin-left:-50px;">Set Time based login </span>
                      </span>
                  </label>
                </div>
                </div>
                <div id="Time_based_login_dev" >
                  <div class="form-group">
                      <label>From Time</label>
                      <input type="time" name="login_time_from" id="login_time_from" class="form-control" placeholder="Opening Time">
                  </div>
                  <div class="form-group">
                      <label>To Time</label>
                      <input type="time" name="login_time_to" id="login_time_to" class="form-control" placeholder="Closing Time">
                  </div>

                </div>
                <button type="button" class="btn btn-responsive button-alignment btn-primary"  onclick="Add_user()">Add</button>

            </form>
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!--==end=modal========================-->
  <!--=====================================================Javascript=script======================================-->
  <script>
  function check()
  {
    if($('#Time_based_login').prop('checked'))
    {
      // something when checked
      $("#Time_based_login_dev").css("display", "block");
    }
    else
    {
      $("#Time_based_login_dev").css("display", "none");    // something else when not
    }

  }

   function Add_user()
   {
      var data = $('#user_form').serialize();
      var url_new=  $('#url').val();
      //alert(url_new);
      var row_no = $('#row_no').val();
      $('#row_no').val(parseInt(row_no)+1);
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "/"+url_new+"",
                  method: 'post',
                  data: data,
                  success: function(user){
                    var html = '';
                    for(var i = 0; i < user.length; i++)
                    {
                      var login_from='';
                      if(user[i].login_time_from !=null)
                      {
                          login_from = user[i].login_time_from;
                      }
                      var login_to='';
                      if(user[i].login_time_to !=null)
                      {
                          login_to = user[i].login_time_to;
                      }
                       var s_no = i+1;
                        html += '<tr>'+
                         '<td>' +s_no+ '</td>' +
                                    '<td>' + user[i].name + '</td>' +
                                    '<td>' + user[i].email + '</td>' +
                                    '<td>' + user[i].role_id + '</td>' +
                                    '<td>' + login_from + '</td>' +
                                    '<td>' + login_to + '</td>' +
                                    '<td><button class="label label-sm label-success" style="border:none" > Move User</button> </td>' +
                                    '<td><a ><button class="label label-sm label-success open_modal" value="'+ user[i].id +'" style="border:none" > Edit</button> </a></td>' +
                                    '<td><form action="" method="post"><button  type="submit" class="label label-sm label-danger" style="border:none">Delete</button></form></td>' +

                                '</tr>';
                    }
                    $('#datatable tbody').html('')
                    $('#datatable tr').first().after(html);
                    $('#url').val('add_user');
                     // var tr ="<tr><td>"+row_no+" </td> <td>"+result.user.name+"</td> <td>"+result.user.email+"</td> <td>"+result.user.role_id+"</td> <td> </td> <td> </td> <td><button class='label label-sm label-success' style='border:none' > Move User</button> </td> <td> <a href=''><button class='label label-sm label-success open_modal' value='"+result.user.id+"' style='border:none' > Edit</button> </td> <td>  <form action='' method='post'><button  type='submit' class='label label-sm label-danger' style='border:none'>Delete</button></form> </td></tr>";
                     //
                     // $("#user_tbody").append(tr);
                     $('#myModal').modal('hide');
                    // console.log(result);
                  }
                });

  }


  </script>
  <script>

  function delete_userse()
  {
      var data = $('#user_delete').serialize();
        $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
           }
       });
        jQuery.ajax({
           url: "/user_delete",
           method: 'post',
           data: data,
           success: function(user){

             var html = '';
             for(var i = 0; i < user.length; i++)
             {
               var login_from='';
               if(user[i].login_time_from !=null)
               {
                   login_from = user[i].login_time_from;
               }
               var login_to='';
               if(user[i].login_time_to !=null)
               {
                   login_to = user[i].login_time_to;
               }
                var s_no = i+1;
                 html += '<tr>'+
                  '<td>' +s_no+ '</td>' +
                             '<td>' + user[i].name + '</td>' +
                             '<td>' + user[i].email + '</td>' +
                             '<td>' + user[i].role_id + '</td>' +
                             '<td>' + login_from + '</td>' +
                             '<td>' + login_to + '</td>' +
                             '<td><button class="label label-sm label-success" style="border:none" > Move User</button> </td>' +
                             '<td><a ><button class="label label-sm label-success open_modal" value="'+ user[i].id +'" style="border:none" > Edit</button> </a></td>' +
                             '<td><form action="" method="post"><button  type="submit" class="label label-sm label-danger" style="border:none">Delete</button></form></td>' +

                         '</tr>';
             }
             $('#datatable tbody').html('')
             $('#datatable tr').first().after(html);
             $('#url').val('add_user');

           }
         });
  }
  $(document).on('click','.open_modal',function(){
      $('#user_form').attr('action', 'user_edit');
      $('#url').val('user_edit');
      var url = "/getuser";
      var user_id= $(this).val();
      $('#id').val(user_id);
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/getuser') }}",
                  method: 'post',
                  data: {
                     id: user_id
                  },
                  success: function(result){
                    //alert(result.company.comp_name);
                    $('#user_name').val(result.user.name);
                    // $('#address').val(result.company.address);
                    $('#u_buid_id').val(result.user.buid);
                    $('#email').val(result.user.email);
                    $('#password').val(result.user.password);
                    $('#role_id').val(result.user.role_id);
                    //$('#owner_name').val(result.company.owner_name);
                    $('#myModal').modal('show');
                    // console.log(result);
                  }});

  });
  </script>
@endsection
