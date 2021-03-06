@extends('layouts.view')

@section('content')
                
        
<div id="header" class="col-12">
  <h1>Refreshsments Donation Form</h1> 
</div>

<div class="col-12">
  <table>
      <thead>
          <tr>
              <th> ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Date</th>
              <th>Type</th>
          </tr>
      </thead>
       <tbody>
          @foreach ($foods = App\Food::get() as $food)
          <tr>
              <td>{{ $food->id }}</td>
              <td>{{ $food->name }}</td>
              <td>{{ $food->email }}</td>
              <td>{{ $food->phone }}</td>
              <td>{{ $food->date }}</td>
              <td>{{ $food->type }}</td>
              <td>
                <form method="POST" action="/food/{{$food->id}}">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
          
                  <div class="form-group">
                      <input type="submit" class="button" value="Delete">
                  </div>
              </form> 
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
 {{--  {{ $foods->links() }}  --}}
</div>    
@endsection