
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')

@endsection

@section('content')


<div class="row">

  <div class="col-md-2">

  </div>

<div class="col-md-3">
  <div class="list-group" style="width:80%">
    <a href="#" class="list-group-item active">
      <center>เลือกรายการ</center>
    </a>
        <a href="admin/addbill/type1" class="list-group-item">เพิ่มบิล</a>
        <a href="type2" class="list-group-item">สินค้าในตะกร้า</a>

  </div>
</div>
<div class="col-md-7">
  <?php
  if (count($items)==0) {
      echo "ยังไม่มีสินค้าอยู่ในตะกร้า<br>";
  } else {
 ?>
</p>
 <form  method="post" action="<?=url('order/insert')?>">
   <p><h3>เพิ่มบิลสั่งซื้อสินค้า</h3></p>
  <table width="400" border="0" cellspcing="1" cellpadding="0">
     <tr>
       <td width="100">username : </td>
       <td><input type="text" name="fullname"  value="<?=$username?>">* </td>
     </tr>
     <tr>
       <td>เบอร์โทรศัพท์ :</td>
       <td><input type="text" name="tel" >
       </td>
   </tr>
     <tr>
       <td>เวลาเข้ารับสินค้า</td>
       <td><input type="time" name="address">* </td>
   </tr>
</table><br>
  <table border="1">
           <tr bgcolor="#E8E8E8">
             <td width="6%"><center><b>รหัสสินค้า</b></center></td>
             <td width="60%"><center><b>ชื่อสินค้า</b></center></td>
             <td width="12%"><center><b>จำนวน</b></center></td>
             <td width="10%"><center><b>ราคา</b></center></td>
             <td width="12%"><center><b>ทั้งหมด</b></center></td>
         </tr>
     <?php
         $total=0;
         foreach ($items as $i) {
             $id=$i['id'];
             $name=$i['name'];
             $price=$i['price'];
             $qty=$i['qty'];

             $unit=$price * $qty;
             $total=$total+$unit;
          echo "<tr>
            <td><center>$id</center></td>
            <td>&nbsp;$name</td>
            <td><center>$qty</center></td>
            <td><center>$price</center></td>
            <td><center>$unit</center></td>
             </tr>";
      } // end foreach
      ?>
   </table><br>

  <?php echo "จำนวนทั้งหมด $total บาท"; ?>
       <br><br>
       <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
       <input  type="hidden" name="total" value="<?=$total?>">
       <input type="submit"  value="ยืนยันการสั่งซื้อ">
       <input type="reset"  value="เคลียร์">
   </p>
</form>
 <?php
  }
 ?>
</div>

</div>

@endsection

@section('footer')

@endsection
