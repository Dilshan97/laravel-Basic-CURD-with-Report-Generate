
@extends('layouts/app')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b><i class="fas fa-truck"></i> Delivery</b>

                    <div class="btn" style="float: right;">
                        <a href="{{ url('dynamic_pdf/pdf') }}"  class="btn btn-primary"><i class="fas fa-print"></i> Report</a>
                        <a href="{{ route('deliveries.create')}}"  class="btn btn-success"><i class="fas fa-plus-circle"></i> Add Delivery</a>
                    </div>
                    
                </div><!-- card-header -->
 
                <div class="card-body">
                  <div class="row">
                    <div class="col-12">

                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer Name</th>
                                    <th>Customer ID</th>
                                    <th>Receivers Name</th>
                                    <th>Receiver Contact</th>
                                    <th>Receivers NIC</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($deliveries as $delivery)
                                <tr>
                                    <td>{{ $delivery->order_id }}</td>
                                    <td>{{ $delivery->customer_name }}</td>
                                    <td>{{ $delivery->customer_id }}</td>
                                    <td>{{ $delivery->receivers_name }}</td>
                                    <td>{{ $delivery->receiver_contact }}</td>
                                    <td>{{ $delivery->receivers_nic }}</td>
                                    <td>

                                        <a href="{{ route('deliveries.edit', $delivery->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
             
                                         <form id="delete-form-{{ $delivery->id }}" action="{{ route('deliveries.destroy', $delivery->id) }}" method="post" style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE')}}
                                        </form>
                                        
                                        <a href="" onclick="
                                                     if(confirm('Are you sure You want delete this?')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $delivery->id }}').submit();
                                                    }
                                                    else{
                                                        event.preventDefault();
                                                    }"
                                                    class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                  </div>
                </div><!-- card-body -->
                
            </div>
        </div>
    </div>
</div>

@endsection

