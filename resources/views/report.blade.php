@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="d-grid justify-content-center mb-5">
                <a class="btn btn-primary" href="{{url('/')}}">Reports</a>
            </div>
            <div class="card">
                <div class="card-header">{{$report_heading}}</div>

                <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Customer Name</th>
                        <th>Total Amount</th>
                    </tr>
                    @foreach($order_details as $order_detail)
                    <tr>
                        <td>{{$order_detail->full_name}}</td>
                        <td>{{$order_detail->total}}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
