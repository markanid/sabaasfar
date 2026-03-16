@extends('admin.layout')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('sliders.index')}}">{{$page}}</a></li>
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('body')
<div class="card card-primary card-outline">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title"><i class="fas fa-users"></i> View {{$page}}</h3>  
        <div class="ml-auto"> 
            <a href="{{ route('sliders.create') }}" class="btn btn-sm btn-primary"> <i class="fas fa-plus-circle"></i> Create</a> &nbsp;
            <a href="{{ route('sliders.edit', ['id' => $sliders->id]) }}" class="btn btn-sm btn-info"> <i class="fas fa-pencil-alt"></i> Edit</a> &nbsp;
            <a href="{{ route('sliders.index') }}" class="btn btn-sm btn-dark"> <i class="fa fa-arrow-circle-left"></i> Back</a> &nbsp;
        </div> 
    </div>
    
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" style="margin-bottom: 10px;">
                    <tbody>
                        <tr>
                            <td style="background-color:#096ca5; color:#fff;">Heading</td>
                            <td><b style="color:#096ca5;">{{ !empty($sliders->header) ? $sliders->header : '' }}</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
           </div>
           
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="12">
                                <div>
                                    @if(!empty($sliders->slider))
                                        <p><img src="{{asset('storage/sliders/'.$sliders->slider)}}" alt="Slider Image" style="width: 100%; height: 350px; margin: 5px;"></p>
                                    @endif 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12">
                                <span>Description :</span>
                                <label>{{ !empty($sliders->description) ? $sliders->description : '' }}</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection

@section('scripts')
@include('admin.partials.common-index-script', ['tableId' => 'slider_table'])
@endsection