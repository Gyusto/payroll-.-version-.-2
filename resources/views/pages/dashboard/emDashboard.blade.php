@extends('layouts.app')
@section('title') {{'Dashboard'}} @endsection
@section('layouts.container.content')
<div class="row">
    <div class="col-md-12  mb-3 pb-1">
       <div class="d-flex align-items-lg-center flex-lg-row flex-column">
          <div class="flex-grow-1">
             <h4 class="font-size-16 mb-1">Good Morning, {{ Auth::user()->user_name }}!</h4>
             <p class="font-size-16 text-muted mb-0">Here's what's happening with your employees
                today. {{Auth::id()}}
             </p>
          </div>
       </div>
    </div>
</div>
<div class="row">
   <div class="col-md-6 col-xl-3">
      <div class="card card-border-top">
         <div class="card-body">
            <div class="float-end">
               <div class="avatar-sm mx-auto mb-4">
                  <span class="avatar-title rounded-circle bg-light font-size-24">
                  <i class="material-icons md-18 text-danger">attach_money</i>
                  </span>
               </div>
            </div>
            <div>
               <p class="text-muted fw-semibold flex-grow-1">Total Revenue</p>
               <h4 class="mb-1 mt-1"><span class="header">Tsh.</span><span class="counter-value">58425</span></h4>
            </div>
            <p class="text-muted mt-3 mb-0 font-size-16"><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week </p>
         </div>
      </div>
   </div>
   <div class="col-md-6 col-xl-3">
      <div class="card card-border-top" >
         <div class="card-body">
            <div class="float-end">
               <div class="avatar-sm mx-auto mb-4">
                  <span class="avatar-title rounded-circle bg-light font-size-24">
                  <i class="material-icons md-18 text-danger">group</i>
                  </span>
               </div>
            </div>
            <div>
               <p class="text-muted fw-semibold flex-grow-1">Total Employees</p>
               <h4 class="mb-1 mt-1"><span class="header"></span><span class="counter-value">58425</span></h4>
            </div>
            <p class="text-muted mt-3 mb-0 font-size-16"><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week </p>
         </div>
      </div>
   </div>
   <div class="col-md-6 col-xl-3">
      <div class="card card-border-top">
         <div class="card-body">
            <div class="float-end">
               <div class="avatar-sm mx-auto mb-4">
                  <span class="avatar-title rounded-circle bg-light font-size-24">
                  <i class="material-icons md-18 text-danger">public</i>
                  </span>
               </div>
            </div>
            <div>
               <p class="text-muted fw-semibold flex-grow-1">Active Project</p>
               <h4 class="mb-1 mt-1"><span class="header"></span><span class="counter-value">58425</span></h4>
            </div>
            <p class="text-muted mt-3 mb-0 font-size-16"><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week </p>
         </div>
      </div>
   </div>
   <div class="col-md-6 col-xl-3">
      <div class="card card-border-top">
         <div class="card-body">
            <div class="float-end">
               <div class="avatar-sm mx-auto mb-4">
                  <span class="avatar-title rounded-circle bg-light font-size-24">
                  <i class="material-icons md-18 text-danger">engineering</i>
                  </span>
               </div>
            </div>
            <div>
               <p class="text-muted fw-semibold flex-grow-1">Active  Activities</p>
               <h4 class="mb-1 mt-1"><span class="header"></span><span class="counter-value">25</span></h4>
            </div>
            <p class="text-muted mt-3 mb-0 font-size-16"><span class="badge badge-soft-error me-1"><i class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week </p>
         </div>
      </div>
   </div>
</div>

               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-header border-0 align-items-center d-flex">
                           <p class="text-muted fw-semibold flex-grow-1">Revenue</p>
                           <div>
                              <button type="button" class="btn btn-soft-secondary btn-sm">
                              ALL
                              </button>
                              <button type="button" class="btn btn-soft-secondary btn-sm">
                              1M
                              </button>
                              <button type="button" class="btn btn-soft-secondary btn-sm">
                              6M
                              </button>
                              <button type="button" class="btn btn-soft-primary btn-sm">
                              1Y
                              </button>
                           </div>
                        </div>
                        <div class="card-header p-0 border-0 bg-soft-light">
                           <div class="row g-0 text-center">
                              <div class="col-6 col-sm-3">
                                 <div class="p-3 border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="7585">7,585</span></h5>
                                    <p class="text-muted mb-0">Orders</p>
                                 </div>
                              </div>
                              <!--end col-->
                              <div class="col-6 col-sm-3">
                                 <div class="p-3 border-dashed border-start-0">
                                    <h5 class="mb-1">$<span class="counter-value" data-target="22.89">22.89</span>k</h5>
                                    <p class="text-muted mb-0">Earnings</p>
                                 </div>
                              </div>
                              <!--end col-->
                              <div class="col-6 col-sm-3">
                                 <div class="p-3 border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value" data-target="367">367</span></h5>
                                    <p class="text-muted mb-0">Refunds</p>
                                 </div>
                              </div>
                              <!--end col-->
                              <div class="col-6 col-sm-3">
                                 <div class="p-3 border-dashed border-start-0 border-end-0">
                                    <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">18.92</span>%</h5>
                                    <p class="text-muted mb-0">Conversation Ratio</p>
                                 </div>
                              </div>
                              <!--end col-->
                           </div>
                        </div>
                        <!-- end card header -->
                        <div class="card-body p-0 pb-2">
                           <div class="w-100">
                              <div id="customer_impression_charts" data-colors="[&quot;--vz-warning&quot;, &quot;--vz-primary&quot;, &quot;--vz-success&quot;]" class="apex-charts" dir="ltr" style="min-height: 385px;">
                                 <div id="apexchartsy6tzrzor" class="apexcharts-canvas apexchartsy6tzrzor apexcharts-theme-light" style="width: 841px; height: 370px;">
                                    <svg id="SvgjsSvg1332" width="841" height="370" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                       <foreignObject x="0" y="0" width="841" height="370">
                                          <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 10px 20px; position: absolute; max-height: 185px;">
                                             <div class="apexcharts-legend-series" rel="1" seriesname="Orders" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(247, 184, 75) !important; color: rgb(247, 184, 75); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Orders" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Orders</span></div>
                                             <div class="apexcharts-legend-series" rel="2" seriesname="Earnings" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(94, 163, 203) !important; color: rgb(94, 163, 203); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Earnings" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Earnings</span></div>
                                             <div class="apexcharts-legend-series" rel="3" seriesname="Refunds" data:collapsed="false" style="margin: 0px 10px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(106, 218, 125) !important; color: rgb(106, 218, 125); height: 9px; width: 9px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 6px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Refunds" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Refunds</span></div>
                                          </div>
                                          <style type="text/css">  
                                             .apexcharts-legend {  
                                             display: flex;  
                                             overflow: auto; 
                                             padding: 0 10px;    
                                             } 
                                             .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {   
                                             flex-wrap: wrap 
                                             } 
                                             .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {   
                                             flex-direction: column; 
                                             bottom: 0;  
                                             } 
                                             .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {    
                                             justify-content: flex-start;    
                                             } 
                                             .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {   
                                             justify-content: center;    
                                             } 
                                             .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right { 
                                             justify-content: flex-end;  
                                             } 
                                             .apexcharts-legend-series {   
                                             cursor: pointer;    
                                             line-height: normal;    
                                             } 
                                             .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{    
                                             display: flex;  
                                             align-items: center;    
                                             } 
                                             .apexcharts-legend-text { 
                                             position: relative; 
                                             font-size: 14px;    
                                             } 
                                             .apexcharts-legend-text *, .apexcharts-legend-marker * {  
                                             pointer-events: none;   
                                             } 
                                             .apexcharts-legend-marker {   
                                             position: relative; 
                                             display: inline-block;  
                                             cursor: pointer;    
                                             margin-right: 3px;  
                                             border-style: solid;
                                             } 
                                             .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{  
                                             display: inline-block;  
                                             } 
                                             .apexcharts-legend-series.apexcharts-no-click {   
                                             cursor: auto;   
                                             } 
                                             .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {    
                                             display: none !important;   
                                             } 
                                             .apexcharts-inactive-legend { 
                                             opacity: 0.45;  
                                             }
                                          </style>
                                       </foreignObject>
                                       <g id="SvgjsG1334" class="apexcharts-inner apexcharts-graphical" transform="translate(84.01193181818182, 30)">
                                          <defs id="SvgjsDefs1333">
                                             <clipPath id="gridRectMasky6tzrzor">
                                                <rect id="SvgjsRect1340" width="776.8562499999999" height="270.93" x="-22.111931818181823" y="-1.1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                             </clipPath>
                                             <clipPath id="forecastMasky6tzrzor"></clipPath>
                                             <clipPath id="nonForecastMasky6tzrzor"></clipPath>
                                             <clipPath id="gridRectMarkerMasky6tzrzor">
                                                <rect id="SvgjsRect1341" width="736.6323863636363" height="272.73" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                             </clipPath>
                                          </defs>
                                          <line id="SvgjsLine1339" x1="0" y1="0" x2="0" y2="268.73" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="268.73" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                          <g id="SvgjsG1387" class="apexcharts-xaxis" transform="translate(0, 0)">
                                             <g id="SvgjsG1388" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                                <text id="SvgjsText1390" font-family="Helvetica, Arial, sans-serif" x="0" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1391">Jan</tspan>
                                                   <title>Jan</title>
                                                </text>
                                                <text id="SvgjsText1393" font-family="Helvetica, Arial, sans-serif" x="66.60294421487603" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1394">Feb</tspan>
                                                   <title>Feb</title>
                                                </text>
                                                <text id="SvgjsText1396" font-family="Helvetica, Arial, sans-serif" x="133.20588842975206" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1397">Mar</tspan>
                                                   <title>Mar</title>
                                                </text>
                                                <text id="SvgjsText1399" font-family="Helvetica, Arial, sans-serif" x="199.80883264462813" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1400">Apr</tspan>
                                                   <title>Apr</title>
                                                </text>
                                                <text id="SvgjsText1402" font-family="Helvetica, Arial, sans-serif" x="266.41177685950413" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1403">May</tspan>
                                                   <title>May</title>
                                                </text>
                                                <text id="SvgjsText1405" font-family="Helvetica, Arial, sans-serif" x="333.0147210743802" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1406">Jun</tspan>
                                                   <title>Jun</title>
                                                </text>
                                                <text id="SvgjsText1408" font-family="Helvetica, Arial, sans-serif" x="399.61766528925625" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1409">Jul</tspan>
                                                   <title>Jul</title>
                                                </text>
                                                <text id="SvgjsText1411" font-family="Helvetica, Arial, sans-serif" x="466.2206095041323" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1412">Aug</tspan>
                                                   <title>Aug</title>
                                                </text>
                                                <text id="SvgjsText1414" font-family="Helvetica, Arial, sans-serif" x="532.8235537190084" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1415">Sep</tspan>
                                                   <title>Sep</title>
                                                </text>
                                                <text id="SvgjsText1417" font-family="Helvetica, Arial, sans-serif" x="599.4264979338844" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1418">Oct</tspan>
                                                   <title>Oct</title>
                                                </text>
                                                <text id="SvgjsText1420" font-family="Helvetica, Arial, sans-serif" x="666.0294421487605" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1421">Nov</tspan>
                                                   <title>Nov</title>
                                                </text>
                                                <text id="SvgjsText1423" font-family="Helvetica, Arial, sans-serif" x="732.6323863636366" y="297.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                   <tspan id="SvgjsTspan1424">Dec</tspan>
                                                   <title>Dec</title>
                                                </text>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1381" class="apexcharts-grid">
                                             <g id="SvgjsG1382" class="apexcharts-gridlines-horizontal"></g>
                                             <g id="SvgjsG1383" class="apexcharts-gridlines-vertical"></g>
                                             <line id="SvgjsLine1386" x1="0" y1="268.73" x2="732.6323863636363" y2="268.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                             <line id="SvgjsLine1385" x1="0" y1="1" x2="0" y2="268.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
                                          </g>
                                          <g id="SvgjsG1342" class="apexcharts-area-series apexcharts-plot-series">
                                             <g id="SvgjsG1343" class="apexcharts-series" seriesName="Orders" data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1346" d="M 0 268.73 L 0 192.58983333333333 L 66.60294421487603 123.16791666666666 L 133.20588842975206 165.71683333333334 L 199.8088326446281 116.44966666666667 L 266.41177685950413 158.99858333333333 L 333.01472107438013 132.12558333333334 L 399.6176652892562 174.67450000000002 L 466.2206095041322 170.19566666666668 L 532.8235537190083 94.0555 L 599.4264979338842 152.28033333333335 L 666.0294421487603 127.64675 L 732.6323863636363 118.68908333333334 L 732.6323863636363 268.73M 732.6323863636363 118.68908333333334z" fill="rgba(247,184,75,0.1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 0 268.73 L 0 192.58983333333333 L 66.60294421487603 123.16791666666666 L 133.20588842975206 165.71683333333334 L 199.8088326446281 116.44966666666667 L 266.41177685950413 158.99858333333333 L 333.01472107438013 132.12558333333334 L 399.6176652892562 174.67450000000002 L 466.2206095041322 170.19566666666668 L 532.8235537190083 94.0555 L 599.4264979338842 152.28033333333335 L 666.0294421487603 127.64675 L 732.6323863636363 118.68908333333334 L 732.6323863636363 268.73M 732.6323863636363 118.68908333333334z" pathFrom="M -1 268.73 L -1 268.73 L 66.60294421487603 268.73 L 133.20588842975206 268.73 L 199.8088326446281 268.73 L 266.41177685950413 268.73 L 333.01472107438013 268.73 L 399.6176652892562 268.73 L 466.2206095041322 268.73 L 532.8235537190083 268.73 L 599.4264979338842 268.73 L 666.0294421487603 268.73 L 732.6323863636363 268.73"></path>
                                                <path id="SvgjsPath1347" d="M 0 192.58983333333333 L 66.60294421487603 123.16791666666666 L 133.20588842975206 165.71683333333334 L 199.8088326446281 116.44966666666667 L 266.41177685950413 158.99858333333333 L 333.01472107438013 132.12558333333334 L 399.6176652892562 174.67450000000002 L 466.2206095041322 170.19566666666668 L 532.8235537190083 94.0555 L 599.4264979338842 152.28033333333335 L 666.0294421487603 127.64675 L 732.6323863636363 118.68908333333334" fill="none" fill-opacity="1" stroke="#f7b84b" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 0 192.58983333333333 L 66.60294421487603 123.16791666666666 L 133.20588842975206 165.71683333333334 L 199.8088326446281 116.44966666666667 L 266.41177685950413 158.99858333333333 L 333.01472107438013 132.12558333333334 L 399.6176652892562 174.67450000000002 L 466.2206095041322 170.19566666666668 L 532.8235537190083 94.0555 L 599.4264979338842 152.28033333333335 L 666.0294421487603 127.64675 L 732.6323863636363 118.68908333333334" pathFrom="M -1 268.73 L -1 268.73 L 66.60294421487603 268.73 L 133.20588842975206 268.73 L 199.8088326446281 268.73 L 266.41177685950413 268.73 L 333.01472107438013 268.73 L 399.6176652892562 268.73 L 466.2206095041322 268.73 L 532.8235537190083 268.73 L 599.4264979338842 268.73 L 666.0294421487603 268.73 L 732.6323863636363 268.73" fill-rule="evenodd"></path>
                                                <g id="SvgjsG1344" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                   <g class="apexcharts-series-markers">
                                                      <circle id="SvgjsCircle1447" r="0" cx="0" cy="0" class="apexcharts-marker wr1cuc553" stroke="#ffffff" fill="#f7b84b" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                   </g>
                                                </g>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1348" class="apexcharts-bar-series apexcharts-plot-series">
                                             <g id="SvgjsG1349" class="apexcharts-series" rel="1" seriesName="Earnings" data:realIndex="1">
                                                <path id="SvgjsPath1353" d="M -9.990441632231404 268.731 L -9.990441632231404 68.86306250000001 L 9.990441632231404 68.86306250000001 L 9.990441632231404 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M -9.990441632231404 268.731 L -9.990441632231404 68.86306250000001 L 9.990441632231404 68.86306250000001 L 9.990441632231404 268.731 Z" pathFrom="M -9.990441632231404 268.731 L -9.990441632231404 268.731 L 9.990441632231404 268.731 L 9.990441632231404 268.731 L 9.990441632231404 268.731 L 9.990441632231404 268.731 L 9.990441632231404 268.731 L -9.990441632231404 268.731 Z" cy="68.86206250000001" cx="9.990441632231404" j="0" val="89.25" barHeight="199.8679375" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1355" d="M 56.61250258264463 268.731 L 56.61250258264463 47.969304999999984 L 76.59338584710744 47.969304999999984 L 76.59338584710744 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 56.61250258264463 268.731 L 56.61250258264463 47.969304999999984 L 76.59338584710744 47.969304999999984 L 76.59338584710744 268.731 Z" pathFrom="M 56.61250258264463 268.731 L 56.61250258264463 268.731 L 76.59338584710744 268.731 L 76.59338584710744 268.731 L 76.59338584710744 268.731 L 76.59338584710744 268.731 L 76.59338584710744 268.731 L 56.61250258264463 268.731 Z" cy="47.96830499999999" cx="76.59338584710744" j="1" val="98.58" barHeight="220.76169500000003" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1357" d="M 123.21544679752066 268.731 L 123.21544679752066 114.79349833333336 L 143.19633006198347 114.79349833333336 L 143.19633006198347 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 123.21544679752066 268.731 L 123.21544679752066 114.79349833333336 L 143.19633006198347 114.79349833333336 L 143.19633006198347 268.731 Z" pathFrom="M 123.21544679752066 268.731 L 123.21544679752066 268.731 L 143.19633006198347 268.731 L 143.19633006198347 268.731 L 143.19633006198347 268.731 L 143.19633006198347 268.731 L 143.19633006198347 268.731 L 123.21544679752066 268.731 Z" cy="114.79249833333336" cx="143.19633006198347" j="2" val="68.74" barHeight="153.93750166666666" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1359" d="M 189.8183910123967 268.731 L 189.8183910123967 24.925707499999984 L 209.7992742768595 24.925707499999984 L 209.7992742768595 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 189.8183910123967 268.731 L 189.8183910123967 24.925707499999984 L 209.7992742768595 24.925707499999984 L 209.7992742768595 268.731 Z" pathFrom="M 189.8183910123967 268.731 L 189.8183910123967 268.731 L 209.7992742768595 268.731 L 209.7992742768595 268.731 L 209.7992742768595 268.731 L 209.7992742768595 268.731 L 209.7992742768595 268.731 L 189.8183910123967 268.731 Z" cy="24.924707499999982" cx="209.7992742768595" j="3" val="108.87" barHeight="243.80529250000004" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1361" d="M 256.4213352272727 268.731 L 256.4213352272727 95.08663166666665 L 276.40221849173554 95.08663166666665 L 276.40221849173554 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 256.4213352272727 268.731 L 256.4213352272727 95.08663166666665 L 276.40221849173554 95.08663166666665 L 276.40221849173554 268.731 Z" pathFrom="M 256.4213352272727 268.731 L 256.4213352272727 268.731 L 276.40221849173554 268.731 L 276.40221849173554 268.731 L 276.40221849173554 268.731 L 276.40221849173554 268.731 L 276.40221849173554 268.731 L 256.4213352272727 268.731 Z" cy="95.08563166666664" cx="276.40221849173554" j="4" val="77.54" barHeight="173.64436833333338" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1363" d="M 323.0242794421487 268.731 L 323.0242794421487 80.5528175 L 343.00516270661154 80.5528175 L 343.00516270661154 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 323.0242794421487 268.731 L 323.0242794421487 80.5528175 L 343.00516270661154 80.5528175 L 343.00516270661154 268.731 Z" pathFrom="M 323.0242794421487 268.731 L 323.0242794421487 268.731 L 343.00516270661154 268.731 L 343.00516270661154 268.731 L 343.00516270661154 268.731 L 343.00516270661154 268.731 L 343.00516270661154 268.731 L 323.0242794421487 268.731 Z" cy="80.5518175" cx="343.00516270661154" j="5" val="84.03" barHeight="188.17818250000002" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1365" d="M 389.6272236570248 268.731 L 389.6272236570248 153.98329 L 409.6081069214876 153.98329 L 409.6081069214876 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 389.6272236570248 268.731 L 389.6272236570248 153.98329 L 409.6081069214876 153.98329 L 409.6081069214876 268.731 Z" pathFrom="M 389.6272236570248 268.731 L 389.6272236570248 268.731 L 409.6081069214876 268.731 L 409.6081069214876 268.731 L 409.6081069214876 268.731 L 409.6081069214876 268.731 L 409.6081069214876 268.731 L 389.6272236570248 268.731 Z" cy="153.98229" cx="409.6081069214876" j="6" val="51.24" barHeight="114.74771000000001" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1367" d="M 456.2301678719008 268.731 L 456.2301678719008 204.75086583333334 L 476.2110511363636 204.75086583333334 L 476.2110511363636 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 456.2301678719008 268.731 L 456.2301678719008 204.75086583333334 L 476.2110511363636 204.75086583333334 L 476.2110511363636 268.731 Z" pathFrom="M 456.2301678719008 268.731 L 456.2301678719008 268.731 L 476.2110511363636 268.731 L 476.2110511363636 268.731 L 476.2110511363636 268.731 L 476.2110511363636 268.731 L 476.2110511363636 268.731 L 456.2301678719008 268.731 Z" cy="204.74986583333333" cx="476.2110511363636" j="7" val="28.57" barHeight="63.98013416666667" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1369" d="M 522.8331120867769 268.731 L 522.8331120867769 61.428199166666666 L 542.8139953512397 61.428199166666666 L 542.8139953512397 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 522.8331120867769 268.731 L 522.8331120867769 61.428199166666666 L 542.8139953512397 61.428199166666666 L 542.8139953512397 268.731 Z" pathFrom="M 522.8331120867769 268.731 L 522.8331120867769 268.731 L 542.8139953512397 268.731 L 542.8139953512397 268.731 L 542.8139953512397 268.731 L 542.8139953512397 268.731 L 542.8139953512397 268.731 L 522.8331120867769 268.731 Z" cy="61.42719916666667" cx="542.8139953512397" j="8" val="92.57" barHeight="207.30280083333335" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1371" d="M 589.4360563016528 268.731 L 589.4360563016528 173.86931 L 609.4169395661156 173.86931 L 609.4169395661156 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 589.4360563016528 268.731 L 589.4360563016528 173.86931 L 609.4169395661156 173.86931 L 609.4169395661156 268.731 Z" pathFrom="M 589.4360563016528 268.731 L 589.4360563016528 268.731 L 609.4169395661156 268.731 L 609.4169395661156 268.731 L 609.4169395661156 268.731 L 609.4169395661156 268.731 L 609.4169395661156 268.731 L 589.4360563016528 268.731 Z" cy="173.86831" cx="609.4169395661156" j="9" val="42.36" barHeight="94.86169000000001" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1373" d="M 656.0390005165289 268.731 L 656.0390005165289 70.52023083333333 L 676.0198837809917 70.52023083333333 L 676.0198837809917 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 656.0390005165289 268.731 L 656.0390005165289 70.52023083333333 L 676.0198837809917 70.52023083333333 L 676.0198837809917 268.731 Z" pathFrom="M 656.0390005165289 268.731 L 656.0390005165289 268.731 L 676.0198837809917 268.731 L 676.0198837809917 268.731 L 676.0198837809917 268.731 L 676.0198837809917 268.731 L 676.0198837809917 268.731 L 656.0390005165289 268.731 Z" cy="70.51923083333332" cx="676.0198837809917" j="10" val="88.51" barHeight="198.2107691666667" barWidth="19.980883264462808"></path>
                                                <path id="SvgjsPath1375" d="M 722.6419447314049 268.731 L 722.6419447314049 186.83553250000003 L 742.6228279958677 186.83553250000003 L 742.6228279958677 268.731 Z" fill="rgba(94,163,203,0.9)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 722.6419447314049 268.731 L 722.6419447314049 186.83553250000003 L 742.6228279958677 186.83553250000003 L 742.6228279958677 268.731 Z" pathFrom="M 722.6419447314049 268.731 L 722.6419447314049 268.731 L 742.6228279958677 268.731 L 742.6228279958677 268.731 L 742.6228279958677 268.731 L 742.6228279958677 268.731 L 742.6228279958677 268.731 L 722.6419447314049 268.731 Z" cy="186.83453250000002" cx="742.6228279958677" j="11" val="36.57" barHeight="81.89546750000001" barWidth="19.980883264462808"></path>
                                                <g id="SvgjsG1351" class="apexcharts-bar-goals-markers" style="pointer-events: none">
                                                   <g id="SvgjsG1352" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1354" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1356" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1358" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1360" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1362" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1364" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1366" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1368" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1370" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1372" className="apexcharts-bar-goals-groups"></g>
                                                   <g id="SvgjsG1374" className="apexcharts-bar-goals-groups"></g>
                                                </g>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1376" class="apexcharts-line-series apexcharts-plot-series">
                                             <g id="SvgjsG1377" class="apexcharts-series" seriesName="Refunds" data:longestSeries="true" rel="1" data:realIndex="2">
                                                <path id="SvgjsPath1380" d="M 0 250.81466666666668 L 66.60294421487603 241.85700000000003 L 133.20588842975206 253.05408333333335 L 199.8088326446281 230.65991666666667 L 266.41177685950413 221.70225000000002 L 333.01472107438013 244.09641666666667 L 399.6176652892562 257.53291666666667 L 466.2206095041322 248.57525 L 532.8235537190083 253.05408333333335 L 599.4264979338842 203.78691666666668 L 666.0294421487603 241.85700000000003 L 732.6323863636363 190.35041666666666" fill="none" fill-opacity="1" stroke="rgba(106,218,125,1)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.2" stroke-dasharray="8" class="apexcharts-line" index="2" clip-path="url(#gridRectMasky6tzrzor)" pathTo="M 0 250.81466666666668 L 66.60294421487603 241.85700000000003 L 133.20588842975206 253.05408333333335 L 199.8088326446281 230.65991666666667 L 266.41177685950413 221.70225000000002 L 333.01472107438013 244.09641666666667 L 399.6176652892562 257.53291666666667 L 466.2206095041322 248.57525 L 532.8235537190083 253.05408333333335 L 599.4264979338842 203.78691666666668 L 666.0294421487603 241.85700000000003 L 732.6323863636363 190.35041666666666" pathFrom="M -1 268.73 L -1 268.73 L 66.60294421487603 268.73 L 133.20588842975206 268.73 L 199.8088326446281 268.73 L 266.41177685950413 268.73 L 333.01472107438013 268.73 L 399.6176652892562 268.73 L 466.2206095041322 268.73 L 532.8235537190083 268.73 L 599.4264979338842 268.73 L 666.0294421487603 268.73 L 732.6323863636363 268.73" fill-rule="evenodd"></path>
                                                <g id="SvgjsG1378" class="apexcharts-series-markers-wrap" data:realIndex="2">
                                                   <g class="apexcharts-series-markers">
                                                      <circle id="SvgjsCircle1448" r="0" cx="0" cy="0" class="apexcharts-marker wms1t354v" stroke="#ffffff" fill="#6ada7d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                   </g>
                                                </g>
                                             </g>
                                             <g id="SvgjsG1345" class="apexcharts-datalabels" data:realIndex="0"></g>
                                             <g id="SvgjsG1350" class="apexcharts-datalabels" data:realIndex="1"></g>
                                             <g id="SvgjsG1379" class="apexcharts-datalabels" data:realIndex="2"></g>
                                          </g>
                                          <g id="SvgjsG1384" class="apexcharts-grid-borders"></g>
                                          <line id="SvgjsLine1442" x1="-19.01193181818182" y1="0" x2="751.6443181818181" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                          <line id="SvgjsLine1443" x1="-19.01193181818182" y1="0" x2="751.6443181818181" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                          <g id="SvgjsG1444" class="apexcharts-yaxis-annotations"></g>
                                          <g id="SvgjsG1445" class="apexcharts-xaxis-annotations"></g>
                                          <g id="SvgjsG1446" class="apexcharts-point-annotations"></g>
                                          <rect id="SvgjsRect1449" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                          <rect id="SvgjsRect1450" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                       </g>
                                       <rect id="SvgjsRect1338" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                       <g id="SvgjsG1425" class="apexcharts-yaxis" rel="0" transform="translate(33, 0)">
                                          <g id="SvgjsG1426" class="apexcharts-yaxis-texts-g">
                                             <text id="SvgjsText1428" font-family="Helvetica, Arial, sans-serif" x="20" y="31.4" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1429">120.00</tspan>
                                                <title>120.00</title>
                                             </text>
                                             <text id="SvgjsText1431" font-family="Helvetica, Arial, sans-serif" x="20" y="98.58250000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1432">90.00</tspan>
                                                <title>90.00</title>
                                             </text>
                                             <text id="SvgjsText1434" font-family="Helvetica, Arial, sans-serif" x="20" y="165.76500000000001" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1435">60.00</tspan>
                                                <title>60.00</title>
                                             </text>
                                             <text id="SvgjsText1437" font-family="Helvetica, Arial, sans-serif" x="20" y="232.94750000000002" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1438">30.00</tspan>
                                                <title>30.00</title>
                                             </text>
                                             <text id="SvgjsText1440" font-family="Helvetica, Arial, sans-serif" x="20" y="300.13" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1441">0.00</tspan>
                                                <title>0.00</title>
                                             </text>
                                          </g>
                                       </g>
                                       <g id="SvgjsG1335" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                       <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                       <div class="apexcharts-tooltip-series-group" style="order: 1;">
                                          <span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 184, 75);"></span>
                                          <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                             <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                             <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                             <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                          </div>
                                       </div>
                                       <div class="apexcharts-tooltip-series-group" style="order: 2;">
                                          <span class="apexcharts-tooltip-marker" style="background-color: rgb(94, 163, 203);"></span>
                                          <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                             <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                             <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                             <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                          </div>
                                       </div>
                                       <div class="apexcharts-tooltip-series-group" style="order: 3;">
                                          <span class="apexcharts-tooltip-marker" style="background-color: rgb(106, 218, 125);"></span>
                                          <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                             <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                             <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                             <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                       <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                       <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
@endsection