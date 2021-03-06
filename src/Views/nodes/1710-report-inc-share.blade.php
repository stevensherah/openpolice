<!-- resources/views/vendor/openpolice/nodes/1710-report-inc-share.blade.php -->
<div class="row">
    <div class="col-md-6">
        <h3 class="slBlueDark mT0 mB15">Read, Print, Download...</h3>
        <div class="mB5 mL10 fPerc125">
            <div class="pB10"><a class="noUnd" href="/complaint/read-{{ $pubID }}" 
                ><i class="fa fa-link mR5" aria-hidden="true"></i> {{ $GLOBALS['SL']->sysOpts['app-url'] 
                }}/complaint/read-{{ $pubID }}</a></div>
            <div class="pB10"><a class="noUnd" target="_blank" href="/complaint/read-{{ $pubID }}/{{ $viewPrfx }}pdf"
                ><i class="fa fa-print mR5" aria-hidden="true"></i> Print Complaint or Save as PDF</a></div>
            <div class="pB10"><a class="noUnd" target="_blank" href="/complaint/read-{{ $pubID }}/{{ $viewPrfx }}xml"
                ><i class="fa fa-cloud-download mR5" aria-hidden="true"></i> 
                Download Raw Complaint Data As XML File</a></div>
        </div>
    </div>
    <div class="col-md-3">
    @if (isset($published) && $published && isset($GLOBALS["SL"]->x["pageView"]) 
        && in_array($GLOBALS["SL"]->x["pageView"], ['public', 'full']))
            <h3 class="slBlueDark mT0 mB20">Share...</h3>
            <div class="disBlo">
                <div class="disIn mR10">
                    {!! view('vendor.survloop.inc-social-simple-tweet', [
                        "link"  => $GLOBALS['SL']->sysOpts['app-url'] . '/complaint/read-' . $pubID,
                        "title" => 'Check out this police complaint!'
                        ])->render() !!}
                </div>
                <div class="disIn mR10">
                    {!! view('vendor.survloop.inc-social-simple-facebook', [
                        "link"  => $GLOBALS['SL']->sysOpts['app-url'] . '/complaint/read-' . $pubID
                        ])->render() !!}
                </div>
            </div>
        </div>
        <div class="col-md-3 taR">
            @if (isset($emojiTags) && trim($emojiTags) != '') <div class="fR mTn5">{!! $emojiTags !!}</div> @endif
    @endif
    </div>
</div>