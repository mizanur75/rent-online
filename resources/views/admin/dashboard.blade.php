@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin Dashboard 
                <strong>You are logged in as {{Auth::user()->name}}</strong></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg3 col-md-3 col-sm-6">
                            <div class="tile tile-primary">
                                <div class="tile tile-heading">
                                    Total Orders 
                                    <span class="pull-right">0%</span>
                                </div>
                                <div class="tile tile-body">
                                    <i class="fa fa-shopping-cart"></i>
                                    <h2 class="pull-right">0</h2>
                                </div>
                                <div class="tile tile-footer">
                                    <a href="">View more...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg3 col-md-3 col-sm-6">
                            <div class="tile tile-primary">
                                <div class="tile tile-heading">
                                    Total Orders 
                                    <span class="pull-right">0%</span>
                                </div>
                                <div class="tile tile-body">
                                    <i class="fa fa-credit-card"></i>
                                    <h2 class="pull-right">0</h2>
                                </div>
                                <div class="tile tile-footer">
                                    <a href="">View more...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg3 col-md-3 col-sm-6">
                            <div class="tile tile-primary">
                                <div class="tile tile-heading">
                                    Total Orders 
                                    <span class="pull-right">0%</span>
                                </div>
                                <div class="tile tile-body">
                                    <i class="fa fa-user"></i>
                                    <h2 class="pull-right">0</h2>
                                </div>
                                <div class="tile tile-footer">
                                    <a href="">View more...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg3 col-md-3 col-sm-6">
                            <div class="tile tile-primary">
                                <div class="tile tile-heading">
                                    Total Orders 
                                    <span class="pull-right">0%</span>
                                </div>
                                <div class="tile tile-body">
                                    <i class="fa fa-users"></i>
                                    <h2 class="pull-right">0</h2>
                                </div>
                                <div class="tile tile-footer">
                                    <a href="">View more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
