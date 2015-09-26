@extends('admin.app')

@section('content')
    @include('admin.partials.title-section',['title' => $package->name,'showAction' => false])
    {!! Form::model($package, ['method' => 'PUT','route' => array('admin.packages.update',$package->id),'class' => 'form-horizontal']) !!}
        {!! Form::hidden('id',null) !!}
        @include('admin.packages._forms')
    {!! Form::close() !!}


    @include('admin.packages._tabs',[
        'package_courses' => $package_courses
    ]);

@endsection


@section('footer')
    <script type="text/javascript" src="/js/modal.js"></script>

    <script type="text/javascript">

        $('#add').on('click',function(e){
            e.preventDefault();
           var target = $(this).data('target');

           var jModal = $.jModal({
                'modal':target
           });

           jModal.init();
           jModal.open();
        });

    </script>

@endsection