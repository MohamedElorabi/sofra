@extends('layouts.app')

@section('page_title')
  @lang('lang.Clients')
@endsection
@section('content')



<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">@lang('lang.List of Clients')</h3>


    </div>
    <div class="box-body">
      @if(count($records))
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="text-center">#</th>
              <th class="text-center">@lang('lang.Name')</th>
              <th class="text-center">@lang('lang.E-mail')</th>
              <th class="text-center">@lang('lang.Phone')</th>
              <th class="text-center">@lang('lang.City')</th>
              <th class="text-center">@lang('lang.Delete')</th>
            </tr>
          </thead>
          <tbody>
            @foreach($records as $record)
            <tr>
              <td class="text-center">{{$loop->iteration}}</td>
              <td class="text-center">{{$record->name}}</td>
              <td class="text-center">{{$record->email}}</td>
              <td class="text-center">{{$record->phone}}</td>
              <td class="text-center">
              {{$record->block->name}}
              {{$record->block->city->name}}
              </td>
              <td class="text-center">
                {!! Form::open([
                  'action' => ['Admin\ClientsController@destroy',$record->id],
                  'method' => 'delete'
                  ])!!}
                  <button type="submit" class="delete_link btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                  {!! Form::close() !!}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
        @else
        <div class="alert alert-danger" role="alert">
          No Data
        </div>
      @endif
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
@endsection
