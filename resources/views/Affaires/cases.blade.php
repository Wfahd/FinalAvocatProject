@extends('layouts.app')

@section('content')
<!--

 ////////////////////////////////////////////////////////////////////////////
  
 ///////////////////////////////////////////////////////////////////////////////////////

  </div>-->
  <h1 class= "p-3 fw-bold text-danger" >Affaires pour {{ $client->name }}     {{ $client->lastName }} : </h1>
  <div class="container">


      <table class="table">
          <thead>
              <tr>
                <th>#</th>
                  <th>Nom D'affaire</th>
                  <th>Description</th>
                  <th>priorité</th>
                  <th>Status</th>
                  <th>Date du Creation</th>

              </tr>
          </thead>
          <tbody>
            @if ($cases)
                
              @foreach ($cases as $case)
                  <tr>
                    <td>{{ $case->id }}</td>
                    <td>{{ $case->Name }}</td>
                      <td class="truncate"  style="max-width: 200px;">{{ $case->Description }}</td>
                      <td>{{$case->priorité}}</td>
                       @if ($case->status === 'In Progress')
                     
                     
                        <td class="text-warning">{{ $case->status }}</td>
                          
                      @else
                      <td class="text-success">{{ $case->status }}</td>

                      @endif
                    <td>{{$case->created_at}}</td>
                  </tr>
              @endforeach
          </tbody>
          
      </table>
      <div>
        <a href="/MyClients/" class="btn btn-success"> Go To clients list </a>
      </div>
    </div>

  
      @endif
  
@endsection