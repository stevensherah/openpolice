<!-- resources/views/vendor/openpolice/nodes/1217-volun-home-your-info.blade.php -->
@if (!isset($yourContact->PrsnAddressState) || !$yourContact->PrsnAddressState 
    || trim($yourContact->PrsnAddressState) == '')
    <form name="volunStateForm" method="post" action="/dashboard/volunteer/saveDefaultState" 
        target="_blank" onSubmit="document.getElementById('volunState').style.display='none'; 
            document.getElementById('stateID').value=document.getElementById('newStateID').value;">
    <input type="hidden" id="csrfTok" name="_token" value="{{ csrf_token() }}">
    <div id="volunState" class="slCard w100">
        <h3 class="m0 slBlueDark">Info About You</h3>
        <div class="nFld"><label>
            What State Do You Live In?
            <select id="newStateID" name="newState" class="form-control input-lg mB20">
                <option value="" SELECTED >select state</option>
                {!! $GLOBALS['SL']->states->stateDrop() !!}
            </select>
        </label></div>
        <div class="nFld mT0"><label>
            What is your phone number? 
            <input name="newPhone" type="text" class="form-control input-lg" 
            @if (isset($yourContact) && isset($yourContact->PrsnPhoneMobile))
                value="{{ trim($yourContact->PrsnPhoneMobile) }}"
            @else value="" @endif >
        </label></div>
        <input type="submit" class="btn btn-primary disBlo mT10" value="Save Your Info">
    </div>
    </form>
@endif