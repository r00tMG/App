@extends('template')
@section('phase.edit')
    <div class="container">
        <div class="row">
            <div class="border shadow-lg my-5 bg-body rounded">
                <h1 class="text-center">Modification</h1>
                <form action="{{ route('phases.update',$phases) }}" method="post" class="m-5">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 ">
                        <label for="libelle" class="form-label">Libellé</label>
                        <input type="text" name="libelle_phase" class="form-control" id="libelle"
                            value="{{ $phases->libelle }}">
                    </div>
                    <div class="mb-3 ">
                        <label for="description" class="form-label">description</label>
                        <input type="text" name="description_phase" class="form-control" id="description"
                            value="{{ $phases->description }}">
                    </div>


                    <div class="mb-3">
                        <label for="chantier_id" class="form-label">Chantiers</label>
                        <select type="text" class="form-select" id="chantier_id" placeholder="chantier">
                            @foreach ($chantiers as $ch)
                                <option value=""></option>
                                <option class="" value="{{ $ch->id }}">{{ $ch->libelle }} {{ $ch->description }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Modifier</button>
                        <a href="{{ route('phases.create') }}"><button class="btn btn-danger">Annuler</button></a>
                    </div>
                </form>
            </div>
        </div>
    @endsection
