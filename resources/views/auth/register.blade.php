@extends('layouts.app')

@section('title', 'Register')

@section('content')

    <div style="margin-top: 100px; display: flex; justify-content: center" class="row">
        <div class="col-md-4">
            <div class="card-col-md-4">
                <div class="card-body">
                    <h1 class="text-center mb-3">Register</h1>

                    @if (session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{session()->get('error_message')}}
                    </div>
                    @endif

                    <form method="POST" action="{{route('register')}}" class="form-control">
                        @csrf
                        <div class="container">
                            <div class="form-group ">
                                <label class="mb-2" for="name">Name</label><br>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                                <input name="name" type="text" class="form-control mb-3" id="name"
                                    aria-describedby="emailHelp" placeholder="Enter name" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label class="mb-2" for="exampleInputEmail1">Email address</label><br>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                                <input name="email" type="email" class="form-control mb-3" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label class="mb-2" for="exampleInputPassword1">Password</label><br>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{$errors->first('password')}}</span>
                                @endif
                                <input name="password" type="password" class="form-control mb-3" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <div class="form-group mb-2">
                                <label class="mb-2" for="exampleInputPassword2">Confirm Password</label>
                                <input name="password_confirmation" type="password" class="form-control mb-5" id="exampleInputPassword2"
                                    placeholder="Confirm password">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                    <div style="margin-top: 100px">

                    </div>
                </div>
            </div>
        </div>

    @endsection
