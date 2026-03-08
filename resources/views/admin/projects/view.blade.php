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
                    <li class="breadcrumb-item"><a href="{{route('projects.index')}}">{{$page}}</a></li>
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
        <h3 class="card-title"><i class="far fa-image"></i> View {{$page}}</h3>  
        <div class="ml-auto"> 
            <a href="{{ route('projects.create') }}" class="btn btn-sm btn-primary"> <i class="fas fa-plus-circle"></i> Create</a> &nbsp;
            <a href="{{ route('projects.edit', ['id' => $project->id]) }}" class="btn btn-sm btn-info"> <i class="fas fa-pencil-alt"></i> Edit</a> &nbsp;
            <a href="{{ route('projects.index') }}" class="btn btn-sm btn-dark"> <i class="fa fa-arrow-circle-left"></i> Back</a> &nbsp;
        </div> 
    </div>
    <div class="card-body">
        
        <div class="table-responsive">
            <table class="table table-bordered" style="margin-bottom: 10px;">
                <tbody>
                    <tr>
                        <td style="background-color:#096ca5; color:#fff;">Project-Name</td>
                        <td><b style="color:#096ca5;">{{ $project->name }}</b>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td rowspan="2">
                            <span>Image :</span>
                            <div>
                                @if(!empty($project) && !empty($project->image))
                                    <img src="{{ asset('storage/projects/' . $project->image) }}" alt="{{ $project->image_alt }}" class="img-fluid rounded" style="max-height: 200px;">
                                @else
                                    <img src="{{ asset('uploads/avatar.png') }}" alt="Portfolio Photo" class="img-fluid rounded" style="max-height: 200px;">
                                @endif
                            </div>
                        </td>
                        <td>
                            <span>Category :</span>
                            <label>{{ $project->category->name ?? '' }}</label>
                        </td>
                        <td>
                            <span>Keyword :</span>
                            <label>{{ $project->keywords ?? '' }}</label>
                        </td>
                        <td>
                            <span>Image Alt-Tag :</span>
                            <label>{{ $project->image_alt ?? '' }}</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <span>Description :</span>
                            <label>{{ $project->description ?? '' }}</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@include('admin.partials.common-index-script', ['tableId' => 'project_table'])
@endsection