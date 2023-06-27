@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{url('/tickets')}}">{{ __('Ticket') }}</a></div>

                <div class="card-body">
                    <form method="POST" action="{{ url('ticket') }}">
                        @csrf

                        @if ($message = Session::get('success'))
							<div class="alert alert-success alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>	
									<strong>{{ $message }}</strong>
							</div>
						@endif
                        
                        <div class="row mb-3">
                            <label for="report" class="col-md-4 col-form-label text-md-end">{{ __('Ticket Category') }}</label>

                            <div class="col-md-6">
                                <select id="category" class="form-control" name="category"  required>
                                    <option value="" >--Please Select Category--</option>
                                    <option value="sales">Sales</option>
                                    <option value="accounts">Accounts</option>
                                    <option value="it">IT</option>
                                </select>                            

                                @error('report')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="query_reason" class="col-md-4 col-form-label text-md-end">{{ __('Ticket Query') }}</label>

                            <div class="col-md-6">
                            <input type="text" id="query_reason" class="form-control" name="query_reason"  required>                            

                                @error('query_reason')
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
                                    {{ __('Save') }}
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
