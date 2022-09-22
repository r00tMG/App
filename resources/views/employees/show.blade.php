@extends('template')
@section('chantier.show')
<div class="container ">
    {{--  protected $fillable=['nom','prenom','tel','email','login']; --}}
    <ul>
        <li>Id : {{$employees->id}}</li>
        <li>Nom : {{$employees->nom}}</li>
        <li>Prenom : {{$employees->prenom}}</li>
        <li>Téléphone : {{$employees->tel}}</li>
        <li>Email : {{$employees->email}}</li>
        <li>Login : {{$employees->login}}</li>
    </ul>

</div>
    
@endsection