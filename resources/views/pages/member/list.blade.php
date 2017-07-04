@extends('master')
@section('content')
 <br><p class="login-box-msg">รายชื่อสมาชิก</p>
<table class='table table-striped'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Balance</th>
    <th>Action</th>
</tr>
@foreach($users as $u)
        <tr > 
            <td> {{ $u->id}}</td>
            <td> {{ $u->name}}</td>
            <td> {{ $u->email}}</td>

            <td></td>
           <td>
                 <form action="/delete/{{$u -> id}}" method="post">
                 {{csrf_field()}}
                 {{method_field('DELETE')}}
                    <a href="/pages/member/edit" class="btn btn-primary" type="text" value="edit">Edit</a>
                 
                
                 <input class="btn btn-danger" type="submit" value="Delete">
                </form>
           </td>
         
         </tr>
 @endforeach
</table>
 {{ $users->links() }}
@endsection 