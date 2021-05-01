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
          <td>Course</td>
          <td>University</td>
          <td>Year</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($education as $ed)
        <tr>
            <td>{{$ed->id}}</td>
            <td>{{$ed->course}}</td>
            <td>{{$ed->university}}</td>
            <td>{{$ed->year}}</td>
            <td><a href="{{ route('education.edit',$ed->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('education.destroy', $ed->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger delete-record" type="button">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {{ $education->links() }}
<div>
@endsection

@section('scripts')
<script type="text/javascript">

    var csrf ="{{csrf_token()}}";

    $(document).ready(function(){
       $(document).on('click', '.delete-record', function(e) {

            if(confirm("Are you sure?")) {
                $(this).parent().submit();    
            }
            return false;

       });
        
    });

</script>

@endsection