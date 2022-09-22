@extends('template')
@section('manager.edit')
    <div class="container">
          <div class="row">
              <div class="border shadow-lg my-5 bg-body rounded">
                <h1 class="text-center">Modification</h1> 
                <form action="{{route('managers.update',$managers)}}" method="post" class="m-5">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        {{-- <div class="mb-3 col-md-6">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control" id="nom" value="{{$managers->nom}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="prenom" class="form-label">Prenom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" value="{{$managers->prenom}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="tel" class="form-label">Tel</label>
                            <input type="text" name="tel" class="form-control" id="tel" value="{{$managers->tel}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="mail" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="mail" value="{{$managers->email}}">
                        </div> --}}
                    </div>
                    <div class="mb-3">
                        <label for="login" class="form-label">Login</label>
                        <input type="text" name="login" class="form-control" id="login" value="{{$managers->login}}">
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Rôle</label>
                        <input type="text" name="role" class="form-control" id="role" value="{{$managers->role}}">
                    </div>
                    <div class="mb-3">
                        <label for="employee_id" class="form-label">Employés</label>
                        <select type="text" class="form-select" id="employee_id" value="{{$managers->employee_id}}" placeholder="employee">
                            @foreach ($employees as $c)
                            <option value=""></option>
                            <option class="" value="{{$c->id}}">{{$c->nom}} {{$c->prenom}}</option>                            
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="chantier_id" class="form-label">Chantiers</label>
                        <select type="text" class="form-select" id="chantier_id" value="{{$managers->chantier_id}}" placeholder="chantier">
                            @foreach ($chantiers as $c)
                            <option value=""></option>
                            <option class="" value="{{$c->id}}">{{$c->libelle}} {{$c->description}}</option>                            
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Modifier</button>
                        <a href="{{route('managers.create')}}"><button class="btn btn-danger">Annuler</button></a>
                    </div>
                </form>
              </div>
          </div>
@endsection