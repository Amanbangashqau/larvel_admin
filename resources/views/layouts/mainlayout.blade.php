<!DOCTYPE html>
<html>

<head>
   @include('layouts.include.head')
</head>

<body class="skin-josh">
@include('layouts.include.header')
<div class="wrapper row-offcanvas row-offcanvas-left">
<?php   if(session('company_id') !='') {//exit(); ?>
@include('layouts.include.side_bar')
<?php }
else
{?>
@include('layouts.include.admin_side_bar')
<?php
}
?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">



      @yield('content')



</aside>
<!-- right-side -->
</div>

@include('layouts.include.footer')
</body>

</html>
