@php
    $breadcrumbs = [
    ['url' => '', 'name' => trans('Tutorials::tutorials.tutorials')]
    ];

    $dbTable = '';
    if($items->count()){
    $dbTable = $items[0]['table'];
    }

@endphp

@extends('admin.master')
@section('page_title')
    {{ trans('Tutorials::tutorials.courses') }}
@endsection
@section('content')
    <!-- Include single delete confirmation model -->
    @include('Core::modals.confirm-delete')
    <!-- Include bulk delete confirmation model -->
    @include('Core::modals.bulk-confirm-delete')

    <div class="row">
        <div class="col-md-12">
            <div class="admin-top-operation">
                <a class="btn btn-default" href="{{ action('\Sybace\Tutorials\Controllers\CoursesController@create')}}">{{ trans('Core::operations.create') }} {{ trans('Tutorials::tutorials.course') }}</a>
            </div>
            @if($items->count() || $_GET)
                @include('Tutorials::tutorials.filter')
            @endif
            @if($items->count())
                <form method="POST" action="{{ url('/')."/ar/admin/tutorials/bulk-operations" }}" id="bulk" class="form-inline">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" name="check_all" id="checkall">
                                </th>
                                <th>{{ trans('Core::operations.id') }}</th>
                                <th>{{ trans('Tutorials::tutorials.name') }}</th>
                                <th>{{ trans('Tutorials::tutorials.date') }}</th>
                                <th>{{ trans('Core::operations.status') }}</th>
                                <th>{{ trans('Core::operations.operations') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--{{dd($items)}}--}}
                            @if(isset($items))
                                @foreach($items as $item)
                                    @if(isset($item->trans))
                                        <tr @if($item->trans) data-title="{{ $item->trans->name }}" @endif>
                                            <td>
                                                <input type="checkbox" name="ids[]" class="check_list" value="{{$item->id}}">
                                            </td>
                                            <td>{{ $item->id }}</td>
                                            <td>
                                                @if($item->trans)
                                                    {{ $item->trans->name }}
                                                @endif
                                            </td>
                                            <td>
                                                @if($item->trans)
                                                    {{ $item->trans->created_at }}
                                                @endif
                                            </td>
                                            <td>
                                                @if($item->active == true)
                                                    {{ trans('Core::operations.active') }}
                                                @else
                                                    {{ trans('Core::operations.inactive') }}
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ action('\Sybace\Tutorials\Controllers\CoursesController@edit', $item->id) }}"><i class="fa fa-edit"></i> {{ trans('Core::operations.edit') }}</a>
                                                &nbsp;<a href="{{ action('\Sybace\Tutorials\Controllers\CoursesController@index', $item->id) }}"><i class="fa fa-comment"></i> Comments</a>&nbsp;
                                                <a onclick="confirmDelete(this)" data-toggle="modal" data-href="#full-width" data-id="{{ $item->id }}" @if($item->trans) data-title="{{ $item->trans->name }}" @endif href="#full-width"><i class="fa fa-trash"></i> {{ trans('Core::operations.delete') }}</a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @else
                                {{trans('Tutorials::tutorials.no_message_found')}}
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <label for="operation">{{ trans('Core::operations.with_select') }}</label>
                        <select name="operation" id="operation" class="form-control" required="required">
                            <option value="">- {{ trans('Core::operations.select') }} -</option>
                            {{--<option value="activate">{{ trans('Core::operations.activate') }}</option>--}}
                            {{--<option value="deactivate">{{ trans('Core::operations.deactivate') }}</option>--}}
                            <option value="read">{{ trans('Tutorials::tutorials.read') }}</option>
                            <option value="unread">{{ trans('Tutorials::tutorials.unread') }}</option>
                            <option value="delete">{{ trans('Core::operations.delete') }}</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ trans('Core::operations.go') }}</button>
                    <div class="table-footer">
                        <div class="count"><i class="fa fa-folder-o"></i> {{ $items->total() }} {{ trans('Core::operations.item') }}</div>
                        <div class="pagination-area"> {!! $items->render() !!} </div>
                    </div>
                </form>
            @else
                <div class="text-center">
                    <h1>{{ trans('admin.no_results_found') }}
                        {{--<a href="{{ action('\Sybace\Tutorials\Controllers\TutorialsController@index')}}">{{ trans('admin.back') }}</a>--}}
                    </h1>
                </div>
            @endif
        </div>
    </div>
@endsection
@section('footer')
    <!--jquery-dependency-fields -->
    <script src="/vendor/core/js/jquery-dependency-fields/scripts.js"></script>
    <!--end jquery-dependency-fields -->
    <script src="{{ asset('public/admin_assets/js/index-operations.js') }}"></script>
@endsection