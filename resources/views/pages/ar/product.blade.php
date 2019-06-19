@extends('layouts.master')

@section('title' , ' | الوصف')

@section('content')

<section class="ftco-services ftco-no-pt">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <span class="subheading">المنتجات</span>
        <h2 class="mb-4">منتجات الشركه</h2>
      </div>
    </div>
  <div class="row">
  @foreach($products as $product)
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch" style="height:100px">
            <div class="img align-self-stretch" style="background-image: url({{'/images/'.$product->photo}});"></div>
          </div>
          <div class="text pt-3 text-center">
            <h3>{{ $product->ar_name}}</h3>
            <a href="/ar-product/desc/{{$product->id}}"> <span class="position mb-2">{{str_limit(strip_tags($product->ar_description) , $limit =20 , $end ='...')}}</span></a>
          </div>
        </div>
      </div>
  @endforeach
  </div>
</section>
@stop