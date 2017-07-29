
@extends('layouts.main')

@section('title','Laravel Framework')

@section('header')

@endsection

@section('content')
    <center>
        <?php
          echo "เพิ่มสินค้า เสร็จสิ้น! <br/>";
            $link=url('/basket');
          echo "<a href='$link'>Back </a>";
         ?>

    </center>
@endsection

@section('footer')

@endsection
