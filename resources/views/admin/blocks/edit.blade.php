@extends('layouts.app')
@section('page_title')
@lang('lang.Edit Block')
@endsection
@section('content')



<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">

    </div>
    <div class="box-body">
      {!! Form::model($model,[
          'action'  => ['Admin\BlockController@update',$model->id],
          'method'  => 'put'
        ]) !!}
        @include('flash::message')
      @include('partials.validation')
      @include('admin.blocks.form')
      <div class="form-group">
        <button class="btn btn-primary" type="submit">@lang('lang.update')</button>
      </div>
      {!! Form::close() !!}

    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
@endsection
