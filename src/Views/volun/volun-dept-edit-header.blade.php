<!-- resources/views/vendor/openpolice/volun/volun-dept-edit-header.blade.php -->
<div class="nodeAnchor"><a id="deptContact" name="deptContact"></a></div>
<div id="fixedHeader" class="fixed">
    <div class="row mTn5">
        <div class="col-md-9">
            <h2 class="slBlueDark m0">{{ str_replace('Department', 'Dept', $deptRow->DeptName) }}</h2>
        </div><div class="col-md-3 taR">
            <a href="javascript:;" id="hidivBtnScoreDeet" class="fR disBlo hidivBtn pT10">
                <h3 class="m0 slGreenLight"><nobr>OPC Accessibility Score: <b id="opcScore" class="mL10">{{ 
                    intVal($deptRow->DeptScoreOpenness) }}</b></nobr></h3></a>
            <div class="fC"></div>
        </div>
    </div>
    <div class="slGrey">
        {{ $deptRow->DeptAddressCity }}, {{ $deptRow->DeptAddressState }} {{ $deptRow->DeptAddressZip }}
        {!! $editsSummary[0] !!}
    </div>
</div>
<div class="row" style="margin-top: 60px;">
    <div class="col-md-7">
        <h2 class="m0">Department Main Contact Info</h2>
    </div><div class="col-md-5 taR">
        <!-- <div id="ScoreDeet" class="disNon w100 row2 p15">
            
        </div> -->
        <a href="https://www.google.com/search?as_q={{ $deptRow->DeptName }}, {{ $deptRow->DeptAddressState }} {{ 
            $deptRow->DeptAddressZip }}" class="btn btn-default" target="_blank"
            >Begin Department Search <i class="fa fa-google mL10"></i></a>
    </div>
</div>
<style>
#pageTopGapID { display: none; }
.nodeAnchor a { top: -100px; }
</style>
<script type="text/javascript">
$(document).ready(function(){
    function chkDeptScore() {
        if (document.getElementById("n1226FldID") && document.getElementById("opcScore")) {
            var score = 0;
            
            if (document.getElementById("n1272FldID") && document.getElementById("n1272FldID").value.trim() != '') {
                score+=5;
            }
            if (document.getElementById("n1274FldID") && document.getElementById("n1274FldID").value.trim() != '') {
                score+=5;
            }
            if (document.getElementById("n1275FldID") && document.getElementById("n1275FldID").value.trim() != '') {
                score+=5;
            }
            if (document.getElementById("n1276FldID") && document.getElementById("n1276FldID").value.trim() != '') {
                score+=5;
            }
            if (document.getElementById("n1278fld0") && document.getElementById("n1278fld0").checked) {
                score+=15;
            }
            if (document.getElementById("n1279FldID") && document.getElementById("n1279FldID").value.trim() != '') {
                score+=20;
            }
            if (document.getElementById("n1280FldID") && document.getElementById("n1280FldID").value.trim() != '') {
                score+=15;
            }
            if (document.getElementById("n1286FldID") && document.getElementById("n1286FldID").value.trim() != '') {
                score+=30;
            }
            if (document.getElementById("n1285fld0") && document.getElementById("n1285fld0").checked) {
                score+=15;
            }
            if (document.getElementById("n1285fld1") && document.getElementById("n1285fld1").checked) {
                score+=3;
            }
            if (document.getElementById("n1285fld2") && document.getElementById("n1285fld2").checked) {
                score+=2;
            }
            if (document.getElementById("n1287fld0") && document.getElementById("n1287fld0").checked) {
                score+=15;
            }
            if (document.getElementById("n1287fld1") && document.getElementById("n1287fld1").checked) {
                score+=15;
            }
            if (document.getElementById("n1287fld2") && document.getElementById("n1287fld2").checked) {
                score-=10;
            }
            document.getElementById("n1226FldID").value = score;
            document.getElementById("opcScore").innerHTML = score;
        }
        if (document.getElementById("n1329fld0") && document.getElementById("n1329fld0").checked) {
            if (document.getElementById("saveStar1")) document.getElementById("saveStar1").src="/openpolice/star1.png";
        } else {
            if (document.getElementById("saveStar1")) document.getElementById("saveStar1").src="/openpolice/star1-gry.png";
        }
        if (document.getElementById("n1329fld1") && document.getElementById("n1329fld1").checked) {
            if (document.getElementById("saveStar2")) document.getElementById("saveStar2").src="/openpolice/star1.png";
            if (document.getElementById("saveStar2b")) document.getElementById("saveStar2b").src="/openpolice/star1.png";
            if (document.getElementById("saveStar2c")) document.getElementById("saveStar2c").src="/openpolice/star1.png";
        } else {
            if (document.getElementById("saveStar2")) document.getElementById("saveStar2").src="/openpolice/star1-gry.png";
            if (document.getElementById("saveStar2b")) document.getElementById("saveStar2b").src="/openpolice/star1-gry.png";
            if (document.getElementById("saveStar2c")) document.getElementById("saveStar2c").src="/openpolice/star1-gry.png";
        }
        if (document.getElementById("n1329fld2") && document.getElementById("n1329fld2").checked) {
            if (document.getElementById("saveStar3")) document.getElementById("saveStar3").src="/openpolice/star1.png";
            if (document.getElementById("saveStar3b")) document.getElementById("saveStar3b").src="/openpolice/star1.png";
            if (document.getElementById("saveStar3c")) document.getElementById("saveStar3c").src="/openpolice/star1.png";
        } else {
            if (document.getElementById("saveStar3")) document.getElementById("saveStar3").src="/openpolice/star1-gry.png";
            if (document.getElementById("saveStar3b")) document.getElementById("saveStar3b").src="/openpolice/star1-gry.png";
            if (document.getElementById("saveStar3c")) document.getElementById("saveStar3c").src="/openpolice/star1-gry.png";
        }
        if (document.getElementById("admMenuCustBot")) {
            var newHgt = Math.round($(window).height())-335;
            document.getElementById("admMenuCustBot").style.height=""+newHgt+"px";
        }
        setTimeout(function() { chkDeptScore(); }, 500);
    }
    setTimeout(function() { chkDeptScore(); }, 100);
    
	$(document).on("click", "#closeScripts", function() {
        $("#hidivScripts").slideUp("fast");
        setTimeout(function() { $("#hidivBtnScripts").slideDown("fast"); }, 600);
	});
    
});
</script>