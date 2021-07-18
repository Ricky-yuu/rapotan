@extends('layouts.auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="form-group has-feedback">
                          <input name="email" type="email" class="form-control" placeholder="Email">
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                          <input name="password" type="password" class="form-control" placeholder="Password">
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                          <div class="col-xs-8">
                            <div class="checkbox icheck">
                              <label>
                                <input type="checkbox"> Remember Me
                              </label>
                            </div>
                          </div>
                          <!-- /.col -->
                          <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                          </div>
                          <!-- /.col -->
                        </div>
                      </form>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
