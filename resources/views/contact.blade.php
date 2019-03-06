@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row shadow p-3">
        <div class="col-xl col-lg col-md col-sm-12 col-xs-12 mt-3">
            <h3>Contact Khan Industrial Supply</h3>
            <h5>If you have anny comments, questions, or concerns, please use this form, and we will answer you as soon as possible.</h5>
            <hr>
            <br>
            <form action="">
                <p class="mt-2">Name</p>
                <input class="form-control" type="text">
                <p class="mt-2">Email</p>
                <input class="form-control" type="email">
                <p class="mt-2">Company</p>
                <input class="form-control" type="text">
                <p class="mt-2">Comment</p>
                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                <button class="mt-2 btn btn-outline-primary">Submit</button>
            </form>
        </div>
        <div class="col-xl col-lg col-md col-sm-12 col-xs-12 mt-3">
            <h3>Our Headquarters</h3>
            <hr>
            <h5><strong>Khan Industrial Supply LLC</strong></h5>
            <p>6396 La Plata Peak Drive</p>
            <p>Colorado Springs, CO 80923</p>
            <p>United States of America</p>
            <br>
            <h5>Contact</h5>
            <i class="fas fa-phone"></i><p>719-354-7012</p>
            <i class="fas fa-envelope"></i> <a href="">Sales@khan.supply</a>
            <p>If you have a question regarding an order, please contact the number above and you will be helped by our service team.</p>

        </div>
    </div>

</div>

@endsection