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
                 <h3 class="box-title">เเจ้งการถอนเงิน(Withdraw)</h3>
            </div>

        <form action="/withdraw" method="post" class="modal-dialog">
                    {{ csrf_field() }}
          <div class="box-body">
                <div class="form-group">
                    <label for="username" >ชื่อผู้ใช้</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="username">
                    <p style="color:red"><strong> {{ $errors->first('username')}}</<strong></p>
                </div>           

                <div class="form-group">
                    <label for="balance">จำนวนเงินที่ต้องการเเจ้งถอน</label>
                    <input type="text" class="form-control" name="balance" id="balance" placeholder="balance">
                      <p style="color:red"> <strong> {{ $errors->first('balance')}}</strong></p>
                </div>           
            
                <div class="form-group">
                    <label for="title">เลือกธนาคารทีต้องการถอน</label>
                        <select class="form-control" type="text"  name="bankwithdrawal" id="bankwithdrawal">
                            <option ></option>
                            <option>SCB</option>
                            <option>TMB</option>
                            <option>KTB</option>
                        </select>
                    <p style="color:red">   <strong> {{ $errors->first('bankwithdrawal')}}</strong></p>
                
                </div>

                <div class="form-group">
                    <label for="accountnumberwithdrawal">เลขบัญชีธนาคารที่ถอน</label>
                    <input type="text" class="form-control" name="accountnumberwithdrawal" id="accountnumberwithdrawal" placeholder="กรุณากรอกเลขบัญชีที่ฝาก">
                    <p style="color:red"> <strong> {{ $errors->first('accountnumberwithdrawal')}}</strong></p>
                </div>  

                <div class="form-group">
                    <label for="accountnamewithdrawal">ชื่อบัญชีที่ทำการถอน</label>
                    <input type="text" class="form-control" name="accountnamewithdrawal" id="accountnamewithdrawal" placeholder="กรุณากรอกชื่บัญชี">
                    <p style="color:red"><strong> {{ $errors->first('accountnamewithdrawal')}}</strong></p>
                </div>             

                <div class="form-group">
                    <label for="datetime">วันเวลาที่ถอนเงิน::: </label>
                    <input type="text" name="datetime" id="datetime" value="" />
                    <p style="color:red">  <strong> {{ $errors->first('datetime')}}</strong></p>
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
