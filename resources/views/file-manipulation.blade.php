@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('File Manipulation') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('file-manipulation') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="file_manipulation" class="col-md-4 col-form-label text-md-end">{{ __('Report Type') }}</label>

                            <div class="col-md-6">
                                <input type="file" id="file_manipulation" class="form-control" name="file_manipulation"  required>
                                    

                                @error('file_manipulation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- start report -->

                        <!-- end report -->

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Next') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
