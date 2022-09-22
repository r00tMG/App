@extends('template')
@section('phase.create')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 style="float: left"><strong>Toutes les Phases</strong> </h2>
                        <button class="btn btn-sm btn-primary" style="float: right" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Nouvelle Phase</button>
                </div>
                <div class="card-body">

                    {{-- Table des phases --}}
                    <div class="container my-5">
                        <div class="row">
                             <table class="table table-dark table-hover">
                              <thead>
                                <tr>
                                  <th class="border border-slate-600" scope="col">#</th>
                                  <th class="border border-slate-600" scope="col">Libellé</th>
                                  <th class="border border-slate-600" scope="col">Description</th>
                                  <th class="border border-slate-600" scope="col">Chantier</th>
                                  <th class="border border-slate-600" scope="col">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($phases as $p)
                                  <tr>
                                    <th class="border border-slate-600" scope="row">{{$p->id}}</th>
                                    <td class="border border-slate-600">{{$p->libelle_phase}}</td>
                                    <td class="border border-slate-600">{{$p->description_phase}}</td>
                                    {{-- les attributs sont à regler  --}}
                                    <td class="border border-slate-600"> <span class="border">{{$p->chantier_id}}</span><span class="border">{{$p->libelle}}</span><span class="border">{{$p->description}}</span> </td>
                                    <td class="border border-slate-600">
                                      <form action="{{route('phases.destroy',$p)}}" method="post" class="d-inline">
                                          @method('DELETE')
                                          @csrf
                                          <button class="btn btn-sm btn-danger">
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                          </button>
                                      </form>              
                                      <a href="{{route('phases.show',$p)}}" class="btn btn-sm btn-warning">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                                            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                          </svg>
                                      </a>                        
                                      <a href="{{route('phases.edit',$p)}}" class="btn btn-sm btn-success">
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

                </div>
            </div>
        </div>
    </div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><strong>Nouvelle Phase</strong> </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
     <div class="container">
          <div class="row">
              <div class="">
                <form action="{{route('phases.store')}}" method="post" class="m-5">
                    @csrf
                        <div class="mb-3 col-md-6">
                            <label for="libelle" class="form-label">Libellé</label>
                            <input type="text" name="libelle_phase" class="form-control" id="libelle">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" name="description_phase" class="form-control" id="description">
                        </div>
                        <div class="mb-3">
                            <label for="chantier_id" class="form-label">Chantiers</label>
                            <select type="text" class="form-select" id="chantier_id" placeholder="chantier">
                                @foreach ($chantiers as $c)
                                <option value=""></option>
                                <option class="" value="{{$c->id}}">{{$c->libelle}} {{$c->description}}</option>                            
                                @endforeach
                            </select>
                        </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Inserer</button>
                    </div>
                </form>
              </div>
          </div>

        </div>
       
      </div>
    </div>
  </div>

   
@endsection