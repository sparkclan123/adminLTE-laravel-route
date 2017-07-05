@extends('master')

@section('content')
  <br><p class="login-box-msg">รายการการเเจ้งถอนเงิน (List Withdraw)</p>
<table class="table table-striped">

<tr>
<th>รหัส</th>
<th>ชื่อ</th>
<th>ยอดเงินที่ลูกค้าเเจ้งถอน</th>
<th>ธนาคารที่ลูกค้าต้องการเเจ้งถอน</th>
<th>เลขบัญชีลูกค้า</th>
<th>ชื่อบัญชีของลูกค้า</th>
<th>วันเวลาที่เเจ้งถอน</th>
<th>เบอร์โทร</th>
<th>ความคิดเห็นเพิ่มเติม</th>

</tr>

    
    @foreach($withdraw as $d)
        <tr> 
        
            <td> {{ $d->id}}</td>
            <td> {{ $d->username}}</td>
            <td> {{ $d->balance}}</td>
            <td> {{ $d->bankwithdrawal}}</td>
            <td> {{ $d->accountnumberwithdrawal}}</td>
            <td> {{ $d->accountnamewithdrawal}}</td>
            <td> {{ $d->datetime}}</td>
            <td> {{ $d->tel}}</td>
            <td> {{ $d->opinion}}</td>
            
           
         </tr>
          
    @endforeach


 </table>

 {{ $withdraw->links() }}

@endsection