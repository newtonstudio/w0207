<!-- #MAIN PANEL -->
<div id="main" role="main">

<!-- RIBBON -->
<div id="ribbon">

    <!-- breadcrumb -->
    <ol class="breadcrumb">
        <li>Home</li>
        <li>Blank</li>
    </ol>
    <!-- end breadcrumb -->

    <!-- You can also add more buttons to the
    ribbon for further usability

    Example below:

    <span class="ribbon-button-alignment pull-right" style="margin-right:25px">
        <a href="#" id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa fa-grid"></i> Change Grid</a>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa fa-plus"></i> Add</span>
        <button id="search" class="btn btn-ribbon" data-title="search"><i class="fa fa-search"></i> <span class="hidden-mobile">Search</span></button>
    </span> -->

</div>
<!-- END RIBBON -->

<!-- #MAIN CONTENT -->

    
    <!-- col -->
    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
        <h1 class="page-title txt-color-blueDark">
            
            <!-- PAGE HEADER -->
            <i class="fa-fw fa fa-home"></i> 
                Page Header 
            <span>>  
                Subtitle
            </span>
        </h1>
    </div>
    <!-- end col -->

<!-- end row -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
				    <script type="text/javascript">
				      google.charts.load('current', {'packages':['bar']});
				      google.charts.setOnLoadCallback(drawChart);

				      function drawChart() {
				        var data = google.visualization.arrayToDataTable(<?=json_encode($finalFormat)?>);

				        var options = {
				          chart: {
				            title: 'Monthly Visitor',
				            subtitle: 'by month',
				          },
				          bars: 'horizontal' // Required for Material Bar Charts.
				        };

				        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

				        chart.draw(data, google.charts.Bar.convertOptions(options));
				      }
				    </script>

				    <div id="barchart_material" style="width: 900px; height: 500px;"></div>

<!-- END #MAIN CONTENT -->

</div>
<!-- END #MAIN PANEL -->