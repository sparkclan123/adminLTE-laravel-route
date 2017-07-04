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

            <div class="box box-info">
               <div class="modal-dialog">
                 <h3 class="box-title">เเจ้งการฝากเงิน (Deposit)</h3>
            </div>
          <form action="/deposit" method="post" class="modal-dialog">
                    {{ csrf_field() }}
                    <div class="box-body">
            <div class="form-group">
                <label for="username" >ชื่อผู้ใช้</label>
                 <input type="text" class="form-control" name="username" id="username" placeholder="username">
             <p style="color:red"><strong> {{ $errors->first('username')}}</<strong></p>
            </div>           

              <div class="form-group">
                <label for="balance">จำนวนเงินที่ฝาก</label>
                 <input type="text" class="form-control" name="balance" id="balance" placeholder="balance">
           <p style="color:red"> <strong> {{ $errors->first('balance')}}</strong></p>
            </div>           
            
            <div class="form-group">
          <label for="title">เลือกธนาคารที่ฝาก</label>
            <select class="form-control" type="text"  name="bankdeposit" id="bankdeposit">
                <option ></option>
                <option>SCB</option>
                <option>TMB</option>
                <option>KTB</option>
            </select>
           <p style="color:red">   <strong> {{ $errors->first('bankdeposit')}}</strong></p>
            
          </div>

           <div class="form-group">
                <label for="accountnumberdeposit">เลขบัญชีธนาคารที่ฝาก</label>
                 <input type="text" class="form-control" name="accountnumberdeposit" id="accountnumberdeposit" placeholder="กรุณากรอกเลขบัญชีที่ฝาก">
           <p style="color:red"> <strong> {{ $errors->first('accountnumberdeposit')}}</strong></p>
           </div>  

            <div class="form-group">
                <label for="accontnamedeposit">ชื่อบัญชีที่ทำการฝาก</label>
                 <input type="text" class="form-control" name="accontnamedeposit" id="accontnamedeposit" placeholder="กรุณากรอกชื่บัญชี">
            <p style="color:red"><strong> {{ $errors->first('accontnamedeposit')}}</strong></p>
            </div>             

              <div class="form-group">
          <label for="datetime">วันเวลาที่โอนเงิน::: </label>
            <input type="text" name="datetime" id="datetime" value="" />
            <p style="color:red">  <strong> {{ $errors->first('datetime')}}</strong></p>
          </div>

         
            <div class="form-group">
          <label for="title">ช่องทางการโอนเงิน</label>
            <select class="form-control" type="text"  name="channeldeposit" id="channeldeposit" >
                <option></option>
                <option>ATM</option>
                <option>InternetBank</option>
                <option>Bank</option>
            </select>
            <p style="color:red"> <strong> {{ $errors->first('channeldeposit')}}</strong></p>
          </div>
            
            
           <div class="form-group">
                <label for="accountnumberdeposit">เบอร์โทรศัพ</label>
                 <input type="text" class="form-control" name="tel" id="tel" placeholder="กรุณาใส่เบอร์โทร">
              <p style="color:red"> <strong> {{ $errors->first('tel')}}</strong></p>
            </div>  
            
            
            <div class="form-group">
           
            <label for="message-text" class="control-label">ความคิดเห็นเพิ่มเติม:</label>
            <textarea class="form-control"  name="opinion" id="message-text" placeholder="ความคิดเห็นเพิ่มเติม"></textarea>
            <p style="color:red"><strong> {{ $errors->first('opinion')}}</strong></p>
         
            </div>  
                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
</div>
            </form>


@endsection
