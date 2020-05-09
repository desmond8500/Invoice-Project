{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editTab{{ $devis->id}}">
<i class="fa fa-folder"></i>
</button>
<!-- Modal -->
<div class="modal fade" id="editTab{{ $devis->id}}" tabindex="-1" role="dialog" aria-labelledby="editTab{{ $devis->id}}Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTab{{ $devis->id}}Label">Modifier un devis (Prototype) </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('devisEdit',['devis'=>$devis])}}" method="post" >
                @csrf
                <div class="modal-body"> --}}
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="landing-tab" data-toggle="tab" href="#landing" role="tab" aria-controls="landing" aria-selected="true">Landing Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="webapp-tab" data-toggle="tab" href="#webapp" role="tab" aria-controls="webapp" aria-selected="false">Application web</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mobile-tab" data-toggle="tab" href="#mobile" role="tab" aria-controls="mobile" aria-selected="false">Application mobile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ecommerce-tab" data-toggle="tab" href="#ecommerce" role="tab" aria-controls="ecommerce" aria-selected="false">Ecommerce</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="erp-tab" data-toggle="tab" href="#erp" role="tab" aria-controls="erp" aria-selected="false">ERP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="telephonie-tab" data-toggle="tab" href="#telephonie" role="tab" aria-controls="telephonie" aria-selected="false">Téléphonie</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="landing" role="tabpanel" aria-labelledby="landing-tab">
                            @include('0 AdminLte3.pages.devis.fields.landingpage')
                        </div>
                        <div class="tab-pane fade" id="webapp" role="tabpanel" aria-labelledby="webapp-tab">
                            @include('0 AdminLte3.pages.devis.fields.webapp')
                        </div>
                        <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">
                            @include('0 AdminLte3.pages.devis.fields.mobileapp')
                        </div>
                        <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
                            @include('0 AdminLte3.pages.devis.fields.ecommerce')
                        </div>
                        <div class="tab-pane fade" id="erp" role="tabpanel" aria-labelledby="erp-tab">
                            @include('0 AdminLte3.pages.devis.fields.erp')
                        </div>
                        <div class="tab-pane fade" id="telephonie" role="tabpanel" aria-labelledby="telephonie-tab">
                            @include('0 AdminLte3.pages.devis.fields.telephonie')
                        </div>
                    </div>

                {{-- </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Valider</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
