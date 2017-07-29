
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')

@endsection

@section('content')

<div class="row">

  <div class="col-md-4">

  </div>

<div class="col-md-4">


        <div class="col-md-7">
          <table width="100%"  border="0" cellspacing="4">
          <?php
            foreach($result as $row) {
            $id_prd=$row->id_prd;
            $name_prd=$row->name_prd;
            $detail_prd=$row->detail_prd;
            $price_prd=$row->price_prd;

                $link2=url("product/detail/$id_prd");
                $link3=url("basket_insert/$id_prd");

                //$link3=url("basket/insert/$id_prd");
          echo "<tr>

          <td width='80%' valign='top'><br>
          <b>รหัสสินค้า :</b> $id_prd  <br>
          <b>ชื่อสินค้า : </b>$name_prd <br>

          <b>ราคา :</b> $price_prd บาท <br>

          [ <a href='$link3'>หยิบใส่ตระกร้าสินค้า </a>]  <br><br><br>
          </td>
          </tr>";
          }
          ?>
          </table>
        </div>
    </div>

<div class="col-md-4">

</div>

</div>

@endsection

@section('footer')

@endsection
