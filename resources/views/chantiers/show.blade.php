@extends('template')
@section('chantier.show')
<div class="container">
    {{--  protected $fillable=['nom','description','montantPayer','photo','dateDebut','dateFin'] --}}
    <ul>
        <li>Id : {{$chantiers->id}}</li>
        <li>Nom : {{$chantiers->nom}}</li>
        <li>Description : {{$chantiers->description}}</li>
        <li>Montant à payer : {{$chantiers->montantPayer}}</li>
        <li>Photo : {{$chantiers->photo}}</li>
        <li>Date Début : {{$chantiers->dateDebut}}</li>
        <li>Date Fin : {{$chantiers->dateFin}}</li>
    </ul>

</div>
    
@endsection