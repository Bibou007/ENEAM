

@extends('admin.layout')
@section('all-pv')


<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
            
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Procès Verbaux</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Administration</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">PV</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Tous les PV</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tous les PV  </h4>
                                <a href="add-professor.html" class="btn btn-primary">+ Ajouter un PV</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                
                                                <th>Annee Académique</th>
                                                
                                                <th>Titre du PV</th>
                                                <th>Mode de cours</th>
                                                <th>Filiere</th>
                                                <th>Date de publication</th>
                                                
                                                <th style="text-align: center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($allPvs as $pv)
                                            <tr>
                                               
                                                <td>{{$pv->annee}}</td>
                                                <td>{{$pv->pv_path}}</td>
                                                <td>{{$pv->mode_cours}}</td>
                                                <td>{{$pv->filiere}}</td>
                                             
                                            
                                                <td>{{$pv->created_at->format('D M Y')}}</td>
                                                <td style="text-align: center">
                                                    <a href="{{url('show-pv/'.$pv->id)}}" class="btn btn-sm btn-primary"><i class="la la-eye"></i></a>
                                                    {{-- <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a> --}}
                                                    <a href="{{url('delete-pv/'.$pv->id)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                                </td>												
                                            </tr>
                                            @empty
                                            <div class="alert alert-success">Aucune candidatures éffectuées</div>
                                           @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection