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
                    <li class="breadcrumb-item"><a href="{{route('contact.index')}}">{{$page}}</a></li>
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
            <!--<a href="{{ route('contact.create') }}" class="btn btn-sm btn-primary"> <i class="fas fa-plus-circle"></i> Create</a> &nbsp;-->
            <a href="{{ route('contact.edit', ['id' => $contact->id]) }}" class="btn btn-sm btn-info"> <i class="fas fa-pencil-alt"></i> Edit</a> &nbsp;
            <a href="#" class="btn btn-danger btn-sm btn-flat delete-btn" data-url="{{ route('contact.delete', ['id' => $contact->id]) }}"><i class="fas fa-trash"></i> Delete</a>
        </div> 
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td colspan="3">
                            <span>Address :</span>
                            <label>{{ $contact->address ?? '-' }}</label>
                            <iframe src="{{ $contact->location }}" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </td>
                        <td>
                            <span>Phone numbers :</span>
                            @if(!empty($contact->phones) && is_array($contact->phones))
                                @foreach($contact->phones as $phone)
                                    @if(!empty($phone))
                                        <label class="d-block">{{ $phone }}</label>
                                    @endif
                                @endforeach
                            @else
                                <label>-</label>
                            @endif
                        </td>
                        <td>
                            <span>Email ID :</span>
                            @if(!empty($contact->emails) && is_array($contact->emails))
                                @foreach($contact->emails as $email)
                                    @if(!empty($email))
                                        <label class="d-block">{{ $email }}</label>
                                    @endif
                                @endforeach
                            @else
                                <label>-</label>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>Facebook :</span>
                            <label>{{ $contact->facebook }}</label>
                        </td>
                        <td>
                            <span>Instagram :</span>
                            <label>{{ $contact->instagram }}</label>
                        </td>
                        <td>
                            <span>LinkedIn :</span>
                            <label>{{ $contact->linkedin }}</label>
                        </td>
                        <td>
                            <span>X [Twiter] :</span>
                            <label>{{ $contact->x }}</label>
                        </td>
                        <td>
                            <span>YouTube :</span>
                            <label>{{ $contact->youtube }}</label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
       
    </div>
   
</div>
@endsection

@include('admin.partials.delete-modal')
@section('scripts')
@include('admin.partials.delete-modal-script')
@include('admin.partials.common-index-script', ['tableId' => 'team_table'])
@endsection