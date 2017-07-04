@extends('master')

@section('content')
  <br><p class="login-box-msg">รายการการฝากเงิน (List Deposit)</p>
<table class="table table-striped">

<tr>
<th>รหัส</th>
<th>ชื่อ</th>
<th>ยอดเงินที่ฝาก</th>
<th>ธนาคารที่ฝาก</th>
<th>เลขบัญชีที่ฝาก</th>
<th>ชื่อบัญชีที่ฝาก</th>
<th>วันเวลาที่ฝาก</th>
<th>ช่องทางการฝาก</th>
<th>เบอร์โทร</th>
<th>ความคิดเห็นเพิ่มเติม</th>

</tr>

    
    @foreach($deposit as $d)
        <tr> 
        
            <td> {{ $d->id}}</td>
            <td> {{ $d->username}}</td>
            <td> {{ $d->balance}}</td>
            <td> {{ $d->bankdeposit}}</td>
            <td> {{ $d->accountnumberdeposit}}</td>
            <td> {{ $d->accontnamedeposit}}</td>
            <td> {{ $d->datetime}}</td>
            <td> {{ $d->channeldeposit}}</td>
            <td> {{ $d->tel}}</td>
            <td> {{ $d->opinion}}</td>
            
           
         </tr>
          
    @endforeach


 </table>

 {{ $deposit->links() }}

@endsection