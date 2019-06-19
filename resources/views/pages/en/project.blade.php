@extends('layouts.master2')

@section('title' , ' | Products')

@section('content')

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container-fluid p-0">
    <div class="row no-gutters justify-content-center mb-5 pb-2">
      <div class="col-md-6 text-center heading-section ftco-animate">
        <span class="subheading">Projects</span>
        <h2 class="mb-4">Our Projects</h2>
      </div>
    </div>

    <div class="row no-gutters">
     @foreach($projects as $project)
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="project">
          <img src="{{'images/'.$project->photo}}" class="img-fluid" alt="Colorlib Template">
          <div class="text">
            <span>{{$project->en_name}}</span>
            <h3><a href="/desc/{{$project->id}}">{{ str_limit(strip_tags($project->en_description) , $limit ='20' , $end = '...' )}}</a></h3>
          </div>
          <a href="{{'images/'.$project->photo}}" class="icon image-popup d-flex justify-content-center align-items-center">
            <span class="icon-expand"></span>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@stop