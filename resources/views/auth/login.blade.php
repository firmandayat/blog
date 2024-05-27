@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div style="margin-top: 100px; display: flex; justify-content: center" class="row">
        <div class="col-md-4">
            <div class="card-col-md-4">
                <div class="card-body">
                    <h1 class="text-center mb-3">Login</h1>

                    @if (session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{session()->get('error_message')}}
                    </div>
                    @endif
                    
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                    @endif

                    <form method="POST" action="" class="form-control">
                        @csrf
                        <div class="container">
                            <div class="form-group mb-2">
                                <label class="mb-2" for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control mb-3" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2" for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control mb-5" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <div style="margin-top: 100px">

                    </div>
                </div>
            </div>
        </div>

    @endsection
