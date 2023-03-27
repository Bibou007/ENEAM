@extends('admin.layout')

@section('single-pv')

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
        
    
            
            
                
                <embed src="{{asset('uploads/PV/'.$pv->pv_path)}}" height="800" width="100%Q" > 
      
        
    </div>
</div>
{{-- --}}


@endsection