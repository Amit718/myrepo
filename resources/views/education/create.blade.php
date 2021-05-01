@extends('main-layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('education.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Course:</label>
              <input type="text" class="form-control" name="course"/>
          </div>
          <div class="form-group">
              <label for="price">University :</label>
              <input type="text" class="form-control" name="university"/>
          </div>
          <div class="form-group">
              <label for="quantity">Year</label>
              <input type="text" class="form-control" name="year"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
