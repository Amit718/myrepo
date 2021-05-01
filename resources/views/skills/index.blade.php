@extends('main-layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Skill Name</td>
          <td>Experties</td>
          <td>Level</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($skills as $skill)
        <tr>
            <td>{{$skill->id}}</td>
            <td>{{$skill->name}}</td>
            <td>{{$skill->experties}}</td>
            <td>{{$skill->level}}</td>
            <td><a href="{{ route('skills.edit',$skill->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('skills.destroy', $skill->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $skills->links() }}
<div>
@endsection