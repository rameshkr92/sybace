@php
    $pageNameMode = trans('Core::operations.create');
    $breadcrumbs[] =  ['url' => url('/').'/'.Lang::getLocale().'/admin/blogs', 'name' => trans('Blogs::blogs.blogs')];
    $action = action('\Sybace\Blogs\Controllers\BlogsController@store');
    $method = '';
    $backFieldLabel = trans('admin.add_new_after_save');
    $submitButton = trans('admin.save');
    if(Request::is('*/edit')){
    $pageNameMode = trans('Core::operations.edit');
    $breadcrumbs[] =  ['url' => '', 'name' => trans('Core::operations.edit').' '.trans('Blogs::blogs.blogs')];
    $action = action('\Sybace\Blogs\Controllers\BlogsController@update', $item->id);
    $method = 'PATCH';
    $backFieldLabel = trans('admin.back_after_update');
    $submitButton = trans('admin.update');
    }else{
    $breadcrumbs[] =  ['url' => '', 'name' => trans('Core::operations.create').' '.trans('Blogs::blogs.blog')];
    }
@endphp

@extends('admin.master')
@section('page_title')
    {{trans('Blogs::blogs.blogs')}}
@endsection
@section('content')
    <!-- end include Media model -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="livicon" data-name="list" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                        {{trans('Blogs::blogs.blogs')}}
                    </h3>
                </div>
                <div class="panel-body">
                    {{--<form class="form-horizontal" name="frm_blogs_update" id="frm_blogs_update" role="form"  method="post" >--}}
                    <form action="{{ $action }}" method="POST" role="form" >
                        @if($method === 'PATCH')
                            <input type="hidden" name="_method" value="PATCH">
                        @endif
                        {!! csrf_field() !!}
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-9">
                                        @include('Core::groups.languages', [
                                            'fields' => [
                                                0 => [
                                                    'type' => 'input_text',
                                                    'properties' => [
                                                        'field_name' => 'name',
                                                        'name' => trans('Core::operations.name'),
                                                        'placeholder' => ''
                                                    ]
                                                ],
                                                1 => [
                                                    'type' => 'textarea',
                                                    'properties' => [
                                                        'field_name' => 'body',
                                                        'name' => trans('Pages::pages.description'),
                                                        'placeholder' => ''
                                                    ]
                                                ],
                                                2 =>[
                                                    'type' => 'input_text',
                                                    'properties' => [
                                                        'field_name' => 'seo_title',
                                                        'name' => trans('Pages::pages.page_seo_title'),
                                                        'placeholder' => ''
                                                    ]

                                                ],
                                                3 =>[
                                                    'type' => 'input_text',
                                                    'properties' => [
                                                        'field_name' => 'meta_keywords',
                                                        'name' => trans('Pages::pages.page_meta_keywords'),
                                                        'placeholder' => ''
                                                    ]

                                                ],
                                                4 => [
                                                    'type' => 'textarea',
                                                    'properties' => [
                                                        'field_name' => 'meta_description',
                                                        'name' => trans('Pages::pages.page_meta_description'),
                                                        'placeholder' => ''
                                                    ]
                                                ]
                                            ]
                                        ])
                                    </div>
                                    <div class="col-md-3 sidbare">
                                        <!-- Language field -->
                                    @include('Core::fields.languages')
                                    <!-- End Language field -->
                                        @include('Core::fields.checkbox', [
                                            'field_name' => 'active',
                                            'name' => trans('admin.active'),
                                            'placeholder' => ''
                                        ])
                                        <div class="checkbox">
                                            <label><input name="back" type="checkbox" value="1" class="minimal-blue" @if(old('back') == 1) checked @endif> {{$backFieldLabel}}</label>
                                        </div>

                                        <button type="submit" class="btn btn-block btn-primary">{{ $submitButton }}</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    {{--<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>--}}
    <script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('body_en');
        CKEDITOR.replace('body_ar');

        $(document).ready(function () {
            $('#lang-en').attr('onClick','return false');
            $('#lang-ar').attr('onClick','return false');
        });
    </script>
@endsection