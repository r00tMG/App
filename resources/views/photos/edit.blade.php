@extends('template')
@section('photos.edit')
    <div class="container">
          <div class="row">
              <div class="border shadow-lg my-5 bg-body rounded">
                <h1 class="text-center">Modification</h1> 
                <form action="{{route('photos.update',$photos)}}" method="post" class="m-5">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="titre" class="form-label">Titre</label>
                            <input type="text" name="titre" class="form-control" id="titre" value="{{$photos->titre}}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="chemin" class="form-label">Chemin</label>
                            <input type="string" name="chemin" class="form-control" id="chemin" value="{{$photos->chemin}}">
                        </div>
                    </div>
                 
                    <div class="mb-3">
                        <button class="btn btn-primary">Modifier</button>
                        <a href="{{route('photos.create')}}"><button class="btn btn-danger">Annuler</button></a>
                    </div>
                </form>
              </div>
          </div>
@endsection