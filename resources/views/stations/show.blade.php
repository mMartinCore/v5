@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
                <i class="fa fa-building-o" aria-hidden="true"></i>View Station
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('stations.show_fields')
                    <a href="{!! route('stations.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
