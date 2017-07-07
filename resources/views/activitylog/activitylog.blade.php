@extends('master')
@section('content')
 <br><p class="login-box-msg">ActivityLog</p>
<table class='table table-striped'>
<tr>
    <th>ID</th>
    <th>User</th>
    <th>message</th>
    <th>Log Time</th>
    <th>Action</th>
</tr>

@foreach($activitylog as $a)
        <tr> 
            <td> {{ $a->id}}</td>
            <td> {{ $a->user->name}}</td> 
            <td> {{ $a->message}}</td>
            <td> {{ $a->created_at}}</td>
            <td></td>
          
         
         </tr>
 @endforeach
</table>
{{ $activitylog->links() }} 
@endsection 