@extends('header')
@section('title', 'season')
<form action="season" method="post">
  <div class="form-row align-items-center">

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <div class="col-sm-3 my-1">
      <label for="seasonSelected">Season</label>
      <input type="text" class="form-control" name="season">
      <small>For example: sun or rain</small>
    </div>
    <br />
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Submit</button>
      @csrf
    </div>
  </div>
  <div class="row" style="clear:both;">
  @if($type == "sun")
  <div class="showSun">
    <img src="{{ asset('images/sun.jpg') }}" width="300">
  </div>
  @elseif($type == "rain")
  <div class="showRain"> 
    <img src="{{ asset('images/downpour.jpg') }}" width="300">
  </div>
  @endif
</div>
</form>

@include('footer')