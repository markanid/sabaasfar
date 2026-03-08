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
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-users"></i> Create {{$page}}</h3>
        <a class="btn btn-dark btn-sm btn-flat float-right" href="{{route('contact.index')}}"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
    </div>
    <form method="post" action="{{ route('contact.update') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $contact->id ?? '' }}">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Phone</label>
                        <div id="phone-wrapper">
                            @php $phones = old('phones', $contact->phones ?? []); @endphp
                            @if (!empty($phones))
                                @foreach ($phones as $index => $phone)
                                    <div class="input-group mb-2">
                                        <input type="text" name="phones[]" tabindex="1" class="form-control" value="{{ $phone }}">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-danger remove-phone"><i class="fas fa-minus"></i></button>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="input-group mb-2">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-success add-phone"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            @else
                                <div class="input-group mb-2">
                                    <input type="text" name="phones[]" tabindex="1" class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-success add-phone"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            @endif
                        </div>
                        @if ($errors->has('phones'))
                          <span class="text-danger">{{ $errors->first('phones') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email </label>
                        <div id="email-wrapper">
                            @php $emails = old('emails', $contact->emails ?? []); @endphp
                            @if (!empty($emails))
                                @foreach ($emails as $index => $email)
                                    <div class="input-group mb-2">
                                        <input type="text" name="emails[]" tabindex="2" class="form-control" value="{{ $email }}">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-danger remove-email"><i class="fas fa-minus"></i></button>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="input-group mb-2">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-success add-email"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            @else
                                <div class="input-group mb-2">
                                    <input type="text" name="emails[]" tabindex="2" class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-success add-email"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            @endif
                        </div>
                        @if ($errors->has('emails'))
                          <span class="text-danger">{{ $errors->first('emails') }}</span>
                        @endif
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="addresses">Address</label>
                        <div id="address-wrapper">
                            <div class="input-group mb-2 address-group">
                                <div class="w-100 mb-2">
                                    <textarea name="address" id="address" rows="3" class="form-control" tabindex="3">{{ old('address', $contact->address ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('address'))
                          <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Facebook </label>
                        <input type="text" name="facebook" tabindex="4" value="{{ old('facebook', $contact->facebook ?? '') }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Instagram </label>
                        <input type="text" name="instagram" tabindex="5" value="{{ old('instagram', $contact->instagram ?? '') }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>LinkedIn </label>
                        <input type="text" name="linkedin" tabindex="6" value="{{ old('linkedin', $contact->linkedin ?? '') }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>X [Twitter] </label>
                        <input type="text" name="twitter" tabindex="7" value="{{ old('twitter', $contact->twitter ?? '') }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>YouTube </label>
                        <input type="text" name="youtube" tabindex="8" value="{{ old('youtube', $contact->youtube ?? '') }}" class="form-control">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Location Map </label>
                        <input type="text" name="location" tabindex="9" value="{{ old('location', $contact->location ?? '') }}" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer" align="center">
            <button type="submit" id="submitBtn" tabindex="10" class="btn btn-primary  btn-flat"><i class="fas fa-save"></i> Save</button>
            <button type="reset" value="Reset" id="resetbtn" tabindex="11" class="btn btn-secondary  btn-flat"><i class="fas fa-undo-alt"></i> Reset</button>
            
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    $(function () {
    // Add phone input
    $('.add-phone').click(function () {
        $('#phone-wrapper').append(`
            <div class="input-group mb-2">
                <input type="text" name="phones[]" class="form-control" placeholder="Enter phone number">
                <div class="input-group-append">
                    <button type="button" class="btn btn-danger remove-phone"><i class="fas fa-minus"></i></button>
                </div>
            </div>
        `);
    });

    // Remove phone input
    $(document).on('click', '.remove-phone', function () {
        $(this).closest('.input-group').remove();
    });

    // Add email input
    $('.add-email').click(function () {
        $('#email-wrapper').append(`
            <div class="input-group mb-2">
                <input type="email" name="emails[]" class="form-control" placeholder="Enter email address">
                <div class="input-group-append">
                    <button type="button" class="btn btn-danger remove-email"><i class="fas fa-minus"></i></button>
                </div>
            </div>
        `);
    });

    // Remove email input
    $(document).on('click', '.remove-email', function () {
        $(this).closest('.input-group').remove();
    });

});

$(function () {
    bsCustomFileInput.init();
    $.validator.setDefaults({
        submitHandler: function (form) {
            $('#submitBtn').prop('disabled', true); // Disable the submit button
                form.submit();
        }
    });
});
</script>
@endsection