@extends('template')
@section('chantier.edit')

  
  

     <div class="container">
          <div class="row">
              <div class="border shadow-lg my-5 bg-body rounded">
                <h1 class="text-center">Modifier Votre CHANTIER</h1>
                @if (session('notice'))
                    <div class="bg-red-500">
                        {{session('notice')}}
                    </div> 
                @endif
                <form action="{{route('chantiers.update',$chantiers)}}" method="post" class="m-5">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="libelle" class="form-label">Libellé</label>
                        <input type="text" name="nom" class="form-control" id="libelle" value="{{$chantiers->nom}}">
                        @error('nom')
                           <div class="text-danger">
                               {{$message}}
                            </div> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" id="description" value="{{$chantiers->description}}">
                        @error('description')
                           <div class="text-danger">
                               {{$message}}
                            </div> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Montant(FCFA)</label>
                        <input type="integer" name="montantPayer" class="form-control" id="tel" value="{{$chantiers->montantPayer}}">
                        @error('montantPayer')
                           <div class="text-danger">
                               {{$message}}
                            </div> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" id="photo" value="{{$chantiers->photo}}">
                        @error('photo')
                           <div class="text-danger">
                               {{$message}}
                            </div> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dateDebut" class="form-label">Date Début</label>
                        <input type="date" name="dateDebut" class="form-control" id="dateDebut" value="{{$chantiers->dateDebut}}">
                        @error('dateDebut')
                           <div class="text-danger">
                               {{$message}}
                            </div> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="dateFin" class="form-label">Date Fin</label>
                        <input type="date" name="dateFin" class="form-control" id="dateFin" value="{{$chantiers->dateFin}}">
                        @error('dateFin')
                           <div class="text-danger">
                               {{$message}}
                            </div> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Valider</button>
                        <a href="{{route('chantiers.create')}}"><button class="btn btn-danger">Annuler</button></a>

                    </div>
                </form>
              </div>
          </div>


@endsection

