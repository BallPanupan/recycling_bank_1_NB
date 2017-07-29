
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')
<br/>
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

<div class="col-md-6">
  <table border="0">
    <tr>

      <td valign="top">
          <?php
            if (count($items)==0) {
              echo "ยังไม่มีสินค้าอยู่ในตะกร้า<br>";
            } else {
          ?>
            <form method="post" action="<?=url('basket_cal')?>">
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
                    echo "
                        <tr>
                  <td><center>
                    <input type='checkbox' name='prd_del[]' value='$id'>
                  </center></td>
                  <td>$id $name</td>
                  <td><center>
                    <input type='text' name='prd_qty[]' value='$qty' size='4' >
                  </center></td>
                  <td><center>$price</center></td>
                  <td><center>$unit</center></td>

                   </tr>";
                  }
                ?>
                  </table>
                  <p align="right">
              <?php echo "จำนวนเงินทั้งหมด $total บาท"; ?><br><br>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <input type="submit" name="calculate" value="คำนวณใหม่">
                    <input type="submit" name="complete" value="สั่งซื้อสินค้า">
                </p>
              </form>
          <?php
      }
          ?>
    </td>
  </tr>
</table>
</div>

</div>

@endsection

@section('footer')
@endsection
