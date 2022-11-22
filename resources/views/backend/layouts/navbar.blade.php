<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Testing Platform</title>
        <link type="text/css" href="{{asset('edmin/code/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('edmin/code/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('edmin/code/css/theme.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('edmin/code/images/icons/css/font-awesome.css')}}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="/">Online Testing Platform </a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" style="margin-left: 820px;">Logout</button>
                        </form>
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>