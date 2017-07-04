@extends('master')

@section('content')


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

            
             <div class="box box-info">  
                <div class="modal-dialog">
          
                 <h3 class="box-title">สมักสมาชิก</h3>
            
    <form action="/registermember" method="post" form class="modal-body">
     {{csrf_field()}}
     {{--  --}}
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" id="name" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <span class="help-block"> 
 				                 <p style="color:red"><strong>{{ $errors->first('name') }}</strong> </p>
 				            </span> 
      </div>
      {{--  --}}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <span class="help-block"> 
 				                <p style="color:red"> <strong>{{ $errors->first('email') }}</strong> </p>
 				            </span> 
      </div>
      {{--  --}}
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <span class="help-block"> 
 				                 <p style="color:red"><strong>{{ $errors->first('password') }}</strong> </p>
 				            </span> 
      </div>
      {{--  --}}
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="retype_password" id="password" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    <span class="help-block"> 
 				                 <p style="color:red"><strong>{{ $errors->first('retype_password') }}</strong> </p>
 				            </span> 
      </div> 
     
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
     
    </form>
 </div>
    
  



        @endsection