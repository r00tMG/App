@extends('template')
@section('employee.edit')
    <div class="container">
          <div class="row ">
              <div class="border shadow-lg my-5 bg-body rounded">
                <h1 class="text-center">Modification</h1> 
                <form action="{{route('employees.update',$employees)}}" method="post" class="m-5">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" value="{{$employees->nom}}">
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" value="{{$employees->prenom}}">
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Tel</label>
                        <input type="text" name="tel" class="form-control" id="tel" value="{{$employees->tel}}">
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="mail" value="{{$employees->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="login" class="form-label">Login</label>
                        <input type="text" name="login" class="form-control" id="login" value="{{$employees->login}}">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Profil</label>
                        <select name="profil" class="form-control" id="role" value="{{$employees->profil}}">
                            <option value="">Ingénieur</option>
                            <option value="">Technicien</option>
                            <option value="">Sécraitaire</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="mb-3 ">
                           <button class="btn btn-primary">Modifier</button>
                           <a href="{{route('employees.index')}}"><button class="btn btn-danger">Annuler</button></a>
                        </div>
                    </div>
                    
                </form>
              </div>
          </div>
@endsection
