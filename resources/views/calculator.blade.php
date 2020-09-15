@include('header')
<form action="calculator" method="post">
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
      <label for="firstInput">First Input</label>
      <input type="text" class="form-control" id="firstInput" name="firstInput">
    </div>
    <div class="col-sm-3 my-1">
      <label for="secondInput">Second Input</label>
      <input type="text" class="form-control" id="secondInput" name="secondInput">
    </div>
    <br />
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary" value="+" name="instruction">sum</button>
      @csrf
    </div>
  </div>
</form>
<div class="row" style="clear: both;float: left;margin: 30px;">
    <span class="ml-5">{{$sum ?? ''}}</span>
</div>
@include('footer')