@extends('dashboard.metronic')
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('admin')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('companies.index')}}">الشركات</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل المنطقه </h3>

<form action="{{ route('companies.update', $company->id) }}" method="POST">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>الأسم</label>
        <input type="text" name="ar_name" class="form-control" value="{{$company->ar_name}}" required>
    </div>
    <div class="form-group">
        <label>الملف الشخصي</label>
        <textarea name="ar_profile" class="form-control ck_editor" >{{$company->ar_profile}}</textarea>
    </div>
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="en_name" class="form-control" value="{{$company->en_name}}" required>
    </div>
    <div class="form-group">
        <label>Profile</label>
        <textarea name="en_profile" class="form-control ck_editor" >{{$company->en_profile}}</textarea>
    </div>

 <div class="form-group">
    <div class="col-md-3"> 
      <label for ="happy_co">Happy   Customers</label>
      <input name = "happy_co" type = 'number' class ="form-control" value = "{{$company->happyCustomers}}" ></div>
         <div class="col-md-3">
        <label for ="project_succ">Project Successful</label>
         <input name = "project_succ" type = 'number' class ="form-control" value = "{{$company->projectSuccessful}}" ></div>
     <div class="col-md-3">
          <label for ="years">Years of Experienced</label>
          <input name = "years" type = 'number' class ="form-control" value = "{{$company->yearsOfExperienced}}" ></div>
     <div class="col-md-3">
         <label for ="professional">Professional Expert</label>
         <input name ="professional" type = 'number' class ="form-control" value = "{{$company->professionalExpert}}" ></div>
    </div>

    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>
</form>

@endsection