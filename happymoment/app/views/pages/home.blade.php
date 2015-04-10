
 @extends('layout.default')
   
                

  @section('content')                 

<!-- Calendar -->


<!--<link rel="stylesheet" type="text/css" href="assets/widgets/calendar/calendar.css">-->
{{ HTML::script('assets/widgets/daterangepicker/moment.js') }}
{{ HTML::script('assets/widgets/calendar/calendar.js') }}
{{ HTML::script('assets/widgets/calendar/calendar-demo.js') }}


<!-- <div id="page-title">
    <h2>Dashboard</h2>
    <p>The most complete user interface framework that can be used to create stunning admin dashboards and presentation websites.</p>
    <div id="theme-options" class="admin-options">
    <a href="javascript:void(0);" class="btn btn-primary theme-switcher tooltip-button" data-placement="left" title="Color schemes and layout options">
        <i class="glyph-icon icon-linecons-cog icon-spin"></i>
    </a>
   
</div>
</div> -->
<!-- ------------------------MainContent Start from here----------------------- -->
<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            
        </h3>
        <div class="example-box-wrapper">
            <div id="calendar-example-1" class="col-md-10 center-margin"></div>
        </div>
    </div>
</div>

<!-- ------------------------MainContent End here----------------------- -->


                


        @stop
