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


          <form action="/deposit" method="post" class="modal-dialog"><br><br>
          <br><p class="login-box-msg">เเจ้งการฝากเงิน (Deposit)</p>
           {{ csrf_field() }}
            <div class="form-group">
                <label for="username" >ชื่อผู้ใช้</label>
                 <input type="text" class="form-control" name="username" id="username" placeholder="username">
             <p> {{ $errors->first('username')}}</p>
            </div>           

              <div class="form-group">
                <label for="balance">จำนวนเงินที่ฝาก</label>
                 <input type="text" class="form-control" name="balance" id="balance" placeholder="balance">
            <p> {{ $errors->first('balance')}}</p>
            </div>           
            
            <div class="form-group">
          <label for="title">เลือกธนาคารที่ฝาก</label>
            <select class="form-control" type="text"  name="bankdeposit" id="bankdeposit">
                <option ></option>
                <option>SCB</option>
                <option>TMB</option>
                <option>KTB</option>
            </select>
              <p> {{ $errors->first('bankdeposit')}}</p>
            
          </div>

           <div class="form-group">
                <label for="accountnumberdeposit">เลขบัญชีธนาคารที่ฝาก</label>
                 <input type="text" class="form-control" name="accountnumberdeposit" id="accountnumberdeposit" placeholder="กรุณากรอกเลขบัญชีที่ฝาก">
            <p> {{ $errors->first('accountnumberdeposit')}}</p>
           </div>  

            <div class="form-group">
                <label for="accontnamedeposit">ชื่อบัญชีที่ทำการฝาก</label>
                 <input type="text" class="form-control" name="accontnamedeposit" id="accontnamedeposit" placeholder="กรุณากรอกชื่บัญชี">
            <p> {{ $errors->first('accontnamedeposit')}}</p>
            </div>             

              <div class="form-group">
          <label for="datetime">วันเวลาที่โอนเงิน::: </label>
            <input type="text" name="datetime" id="datetime" value="" />
              <p> {{ $errors->first('datetime')}}</p>
          </div>

         
            <div class="form-group">
          <label for="title">ช่องทางการโอนเงิน</label>
            <select class="form-control" type="text"  name="channeldeposit" id="channeldeposit" >
                <option></option>
                <option>ATM</option>
                <option>InternetBank</option>
                <option>Bank</option>
            </select>
             <p> {{ $errors->first('channeldeposit')}}</p>
          </div>
            
            
           <div class="form-group">
                <label for="accountnumberdeposit">เบอร์โทรศัพ</label>
                 <input type="text" class="form-control" name="tel" id="tel" placeholder="กรุณาใส่เบอร์โทร">
               <p> {{ $errors->first('tel')}}</p>
            </div>  
            
            
            <div class="form-group">
           
            <label for="message-text" class="control-label">ความคิดเห็นเพิ่มเติม:</label>
            <textarea class="form-control"  name="opinion" id="message-text" placeholder="ความคิดเห็นเพิ่มเติม"></textarea>
            <p> {{ $errors->first('opinion')}}</p>
         
            </div>  
                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>

            </form>


@endsection
