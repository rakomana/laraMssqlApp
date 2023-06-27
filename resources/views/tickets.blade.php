@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                <table class="table" id="table">
                    <tr>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Query</th>
                        <th>Coordinates</th>
                        <th>Ticket No</th>
                    </tr>
                    @foreach($tickets as $ticket)
                    <tr>
                        <td>{{$ticket->category}}</td>
                        <td>{{$ticket->status}}</td>
                        <td>{{$ticket->query}}</td>
                        <td>{{$ticket->coordinates}}</td>
                        <td>{{$ticket->ticket_no}}</td>
                    </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#table').DataTable();
  });
</script>
@endsection
