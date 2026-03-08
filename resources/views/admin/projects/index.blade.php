@extends('admin.layout')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"></h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">{{$title}}</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
<!-- /.content-header -->
@section('body')       
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title"><i class="far fa-image"></i> {{$title}}</h3>  
                    <div class="ml-auto">
                        <a class="btn btn-primary btn-sm btn-flat" href="{{route('projects.create')}}"><i class="fas fa-plus-circle"></i> Create</a>
                    </div> 
                </div>
                <div class="card-body">
                    <table id="project_table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Project-Name</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1;?>
                            @foreach($projects as $row)
                                <tr>
                                    <td>{{$i++;}}</td>
                                    <td><a href={{ route('projects.show', $row->slug) }}>{{ $row->name }}</a><br><br>
                                        @if($row->featured)
                                            <span class="badge badge-success">Featured</span>
                                        @endif
                                    </td>
                                    <td>{{ $row->category->name }}</td>
                                    <td> 
                                        <img src="{{ $row->image ? asset('storage/projects/' . $row->image) : asset('uploads/avatar.png') }}" width="100" height="70" alt="{{ $row->image_alt_tag }}">
                                   </td>
                                    <td>
                                        <a class="btn btn-info btn-sm btn-flat" href="{{route('projects.edit', $row->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm btn-flat delete-btn" data-url="{{ route('projects.delete', ['id' => $row->id]) }}"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@include('admin.partials.delete-modal')
@section('scripts')
@include('admin.partials.delete-modal-script')
@include('admin.partials.common-index-script', ['tableId' => 'project_table'])
@endsection