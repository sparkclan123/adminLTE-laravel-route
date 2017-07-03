@extends('master')

@section('content')

<script type="text/javascript">
$(function(){
  $("#datetime").datetimepicker({
   
  dateFormat: 'yy-mm-dd',
  timeFormat: "HH:mm"
  });
});
</script>


          <form action="/deposit/{{$deposit -> id}}" method="post">
           {{ csrf_field() }}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="username">ชื่อผู้ใช้</label>
                 <input type="text" class="form-control" name="username" id="username" placeholder="username"value="{{ $deposit->username}}">
                 <p> {{ $errors->first('username')}}</p>
            </div>           

              <div class="form-group">
                <label for="balance">จำนวนเงินที่ฝาก</label>
                 <input type="text" class="form-control" name="balance" id="balance" placeholder="balance"value="{{ $deposit->balance}}">
                 <p> {{ $errors->first('balance')}}</p>
            </div>           
            
            <div class="form-group">
          <label for="title">เลือกธนาคารที่ฝาก</label>
            <select class="form-control" type="text"  name="bankdeposit" id="bankdeposit" value="{{ $deposit->bankdeposit}}">
                <option>กรุณาเลือก</option>
                <option>SCB</option>
                <option>TMB</option>
                <option>KTB</option>
            </select>
            
          </div>

           <div class="form-group">
                <label for="accountnumberdeposit">เลขบัญชีธนาคารที่ฝาก</label>
                 <input type="text" class="form-control" name="accountnumberdeposit" id="accountnumberdeposit" placeholder="กรุณากรอกเลขบัญชีที่ฝาก"value="{{ $deposit->accountnumberdeposit}}">
             <p> {{ $errors->first('accountnumberdeposit')}}</p>
            </div>  

            <div class="form-group">
                <label for="accontnamedeposit">ชื่อบัญชีที่ทำการฝาก</label>
                 <input type="text" class="form-control" name="accontnamedeposit" id="accontnamedeposit" placeholder="กรุณากรอกชื่บัญชี" value="{{ $deposit->accontnamedeposit}}">
             <p> {{ $errors->first('accontnamedeposit')}}</p>
            </div>             

              <div class="form-group">
          <label for="datetime">วันเวลาที่โอนเงิน::: </label>
    <input type="text" name="datetime" id="datetime" value="{{ $deposit->datetime}}">
       <p> {{ $errors->first('datetime')}}</p>
      </div>

         
            <div class="form-group">
          <label for="title">ช่องทางการโอนเงิน</label>
            <select class="form-control" type="text"  name="channeldeposit" id="channeldeposit" value="{{ $deposit->channeldeposit}}">
                <option>กรุณาเลือก</option>
                <option>ATM</option>
                <option>InternetBank</option>
                <option>Bank</option>
            </select>
           
          </div>
            
            
           <div class="form-group">
                <label for="accountnumberdeposit">เบอร์โทรศัพ</label>
                 <input type="text" class="form-control" name="tel" id="tel" placeholder="กรุณาใส่เบอร์โทร" value="{{ $deposit->tel}}">
            <p> {{ $errors->first('tel')}}</p>
            </div>  
            
            
            <div class="form-group">
                <label for="accountnumberdeposit">ความคิดเห็นเพิ่มเติม</label>
                 <input type="text" class="form-control" name="opinion" id="opinion" placeholder="ความคิดเห็นเพิ่มเติม" value="{{ $deposit->opinion}}">
             <p> {{ $errors->first('opinion')}}</p>
            </div>  
                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>

            </form>


@endsection