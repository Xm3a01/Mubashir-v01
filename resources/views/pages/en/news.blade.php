@extends('layouts.master2')

@section('title' , ' | News')

@section('content')

<section class="ftco-section">
          <div class="container">
              <div class="row no-gutters">
                  <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url({{'/images/'.$new->photo}});">
                  </div>
                <div class="col-md-7 wrap-about py-5 px-4 px-md-5 ftco-animate">
              <div class="heading-section mb-5">
                <h2 class="mb-4">{{$new->en_title}}</h2>
             </div>
        <div class="">
          {!! $new->en_details !!}
      </div>
    </div>
   </div>
  </div>
</section>

<br>
<hr>
<br>

<section class="ftco-services ftco-no-pt">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <span class="subheading">More News</span>
      </div>
    </div>
  <div class="row">
  @foreach($all as $one)
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch" style="height:100px; width:150px;">
            <div class="img align-self-stretch" style="background-image: url({{'/images/'.$one->photo}});"></div>
          </div>
          <div class="text pt-3 text-center">
            <h3>{{ $one->en_title}}</h3>
            <a href="/en-news/{{$one->id}}"> <span class="position mb-2">{{str_limit(strip_tags($one->en_details) , $limit =20 , $end ='...')}}</span></a>
          </div>
        </div>
      </div>
  @endforeach
  </div>
</section>
@stop