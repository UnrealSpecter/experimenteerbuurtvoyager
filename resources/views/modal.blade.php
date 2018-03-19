@if(count($errors) > 0)
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" style="color: #82368c;" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 style="color: #82368c;" class="modal-title">Er is iets niet helemaal goed gegaan!</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <ul style="color: #82368c;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endif
@if(Session::has('alert'))
<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" style="color: #82368c;" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 style="color: #82368c;" class="modal-title">Systeem bericht</h4>
            </div>
            <div class="modal-body">
              <p class="alert alert-msg">{{ Session::get('alert') }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Modal HTML -->
<div id="explanationModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" style="color: #82368c;" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 style="color: #82368c;" class="modal-title">Hallo!</h4>
            </div>
            <div class="modal-body">
              <p class="alert alert-msg">Om het menu te openen swipe naar rechts! <br /> Om het menu te sluiten swipe naar links!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
