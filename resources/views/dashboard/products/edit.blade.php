@extends('dashboard.metronic')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{asset('vendor/css/bootstrap-fileinput.css')}}" /> 
@endsection
<!-- END CSS -->

@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('admin')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('products.index')}}">منتجات</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title">تعديل منتج </h3>

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>العنوان</label>
        <input type="text" name="ar_name" class="form-control" value="{{$product->ar_name}}" required>
    </div>
    <div class="form-group">
        <label>التفاصيل</label>
        <textarea name="ar_description" class="form-control ck_editor">{{$product->ar_description}}</textarea>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="en_name" class="form-control" value="{{$product->en_name}}" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="en_description" class="form-control ck_editor">{{$product->en_description}}</textarea>
    </div>

    <!-- IMAGE -->
    <label>صورة</label>
    <div class="fileinput fileinput-product input-group" data-provides="fileinput">
        <div class="form-control" data-trigger="fileinput">
            <i class="glyphicon glyphicon-file fileinput-exists"></i>
            <span class="fileinput-filename"></span>
        </div>
        <span class="input-group-addon btn btn-default btn-file">
            <span class="fileinput-product">Select file</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" id="photo" name="photo">
        </span>
        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
    <div class="form-group">
        <label>Old Photo</label>
        <img src="{{asset('images/'.$product->photo)}}" alt="" srcset="">
    </div>
    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>
</form>

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{asset('vendor/js/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<script>
    $('.fileinput').fileinput()
</script>
@endsection
<!-- END SCRIPTS -->