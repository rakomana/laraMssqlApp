@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Complex Queries') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('complex-queries') }}">
                        @csrf

                        <!-- start report -->

                        <!-- end report -->

                        <div class="row mb-2">
                            <div class="col-md- offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Animal Lovers with only 1 document linked') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md- offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Children & Sport Lovers') }}
                                </button>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md- offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Unique Interests and the count of people without documents linked to their interests') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md- offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Animal Lovers with only 1 document linked') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md- offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('People with 5 or 6 interests with at least one of the interests having multiple documents') }}
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
