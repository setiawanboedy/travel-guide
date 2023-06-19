@extends('layout.checkout')
@section('title', 'Upload Payment')
@section('content')

    <div class="container-sm section-success mt-100" style="max-width: 650px; margin-bottom: 150px;">
        <div class="col text-center">
            {{-- <form action="{{ route('update-payment', $transId) }}" method="POST">
                @csrf --}}
            <h1>One step closer</h1>
            <p>
                Please upload your transaction evidence before you get the trip
            </p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('update-payment', $transId) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="d-flex justify-content-center mt-5">
                    <div class="dropzone">
                        <img id="blah" src="http://100dayscss.com/codepen/upload.svg" width="100px"
                            class="upload-icon" />
                        <input onchange="readImg(this)" type="file" class="upload-input form-control" name="image"
                            placeholder="Image" />
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </form>
        </div>
    </div>
    <div class="space-bottom"></div>

@endsection
