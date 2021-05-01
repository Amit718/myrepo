@extends('main-layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit skills
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
      <form method="post" action="{{ route('skills.update', $skills->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">skills Name:</label>
          <input type="text" class="form-control" name="name" value="{{ $skills->name }}" />
        </div>
        <div class="form-group">
          <label for="price">skills Price :</label>
          <input type="text" class="form-control" name="experties" value="{{ $skills->experties }}" />
        </div>
        <div class="form-group">
          <label for="quantity">skills Quantity:</label>
          <input type="text" class="form-control" name="level" value="{{ $skills->level }}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection