
@extends('layouts/app')

@section('main-content')

<div class="container">

    <div class="card">
        <div class="card-body">
            <center><h2><i class="fas fa-plus-square"></i> Add Delivery</h2></center>
        </div>
            
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            @include('layouts/messages')

            <form action="{{ route('deliveries.store') }}" method="POST">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Reference Number</label>
                    <input type="text" class="form-control" name = "order_id"  placeholder="Reference Number">
                </div>

                <div class="form-group">
                    <label>Register Customer Name</label>
                    <input type="text" class="form-control" name = "customer_name" placeholder="Register Customer Name">
                </div>

                <div class="form-group">
                    <label>Registration Number</label>
                    <input type="text" class="form-control" name = "customer_id" placeholder="Registration Number">
                </div> 

                <div class="form-group">
                    <label>Name of the Receiver</label>
                    <input type="text" class="form-control" name = "receivers_name" placeholder="Name of the Receiver">
                </div> 

                <div class="form-group">
                    <label>Contact Number of the Receiver</label>
                    <input type="text" class="form-control" name = "receiver_contact" placeholder="Contact Number of the Receiver">
                </div> 

                <div class="form-group">
                    <label>NIC Number of the Receiver</label>
                    <input type="text" class="form-control" name = "receivers_nic" placeholder="NIC Number of the Receiver">
                </div>



                 <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add Delivery</button>
                 &nbsp;
                 <button type="reset" class="btn btn-warning"><i class="fas fa-retweet"></i> Reset</button>

        </form>
   
        </div>

        </div>

        <br><br>
    </div>
</div>

@endsection

