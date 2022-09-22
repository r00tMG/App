@extends('template')
@section('employee.index')
    <div class="container ">
          <div class="row">
              
               <table class="border-collapse table table-dark table-hover">
                <thead>
                  <tr>
                    <th class="border border-slate-600" scope="col">#</th>
                    <th class="border border-slate-600" scope="col">Nom</th>
                    <th class="border border-slate-600" scope="col">Prenom</th>
                    <th class="border border-slate-600" scope="col">Téléphone</th>
                    <th class="border border-slate-600" scope="col">Email</th>
                    <th class="border border-slate-600" scope="col">Login</th>
                    <th class="border border-slate-600" scope="col">Profil</th>
                    <th class="border border-slate-600" scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($employees as $e)
                    <tr>
                      <th class="border border-slate-600" scope="row">{{$e->id}}</th>
                      <td class="border border-slate-600">{{$e->nom}}</td>
                      <td class="border border-slate-600">{{$e->prenom}}</td>
                      <td class="border border-slate-600">{{$e->tel}}</td>
                      <td class="border border-slate-600">{{$e->email}}</td>
                      <td class="border border-slate-600">{{$e->login}}</td>
                      <td class="border border-slate-600">{{$e->profil}}</td>
                      <td class="border border-slate-600 m-auto">
                        <form action="{{route('employees.destroy',$e)}}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-sm btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                  </svg>
                            </button>
                        </form>              
                        <a href="{{route('employees.show',$e)}}" class="btn btn-sm btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                              <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                              <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                            </svg>
                        </a>                        
                        <a href="{{route('employees.edit',$e)}}" class="btn btn-sm btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
      </div>
@endsection
