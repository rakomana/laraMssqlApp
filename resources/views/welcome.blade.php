@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reports') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('report') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="report" class="col-md-4 col-form-label text-md-end">{{ __('Report Type') }}</label>

                            <div class="col-md-6">
                                <select id="report" class="form-control" name="report"  required>
                                    <option value="" >--Please Select Report--</option>
                                    <option value="big_spender">Big Spenders</option>
                                    <option value="quantity_over_quality">Quantity Over Quality</option>
                                    <option value="net_profit">Net Profit</option>
                                    <option value="big_spender">Gross Sale</option>
                                </select>

                                @error('report')
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
