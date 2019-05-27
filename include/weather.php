<!-- WEATHER -->
<?php
$today = date("Y-m-d");
$url = 'http://openapi.airkorea.or.kr/openapi/services/rest/ArpltnInforInqireSvc/getCtprvnMesureSidoLIst?ServiceKey=905YR6myOpqUOunzfax10z7hb92PLU7qpvI242YsWmqIfsXKYjCeOPH%2BmaIECwTKpln1hM1fkHhnhTFS8C0NNA%3D%3D&searchDate='.$today.'&InformCode=PM10'; /*URL*/
$data = file_get_contents($url);
$xml = simplexml_load_string($data."");
print_r($xml);
 ?>
<div class="col-md-6">
  <div class="panel">
    <div class="panel-heading">
      <h3 class="panel-title">아침운동 전용 날씨</h3>
      <div class="right">
        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
      </div>
    </div>
    <div class="panel-body no-padding">

    </div>
    <div class="panel-footer">
      <div class="row">
        <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
        <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">다른 지역의 날씨 보기</a></div>
      </div>
    </div>
  </div>
</div>
<!-- END WEATHER -->
