@extends('layouts.master')

@section('content')
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Welcome {{ auth()->user()->name }}</h1>
    </div>
  </div>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
      </div>

    </div>
    <br><br>
  </div>
@endsection

  
