<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AidData DET 2.0 Alpha</title> 

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />

    <link rel='stylesheet' href='https://api.tiles.mapbox.com/mapbox.js/v2.1.2/mapbox.css' />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
  

    <link rel="stylesheet" href="index.css?<?php echo filectime('index.css') ?>" />    
</head>

<body>

    <div id="header">
        <div id="title">Data Extraction Tool</div>
    </div>
    
    <div id="navigation">
        <ul id="nav_top">
            <li>Boundary</li>
            <li>Data</li>
            <li>Overview</li>
            <li>Checkout</li>
        </ul>
        <div id="nav_mid">
            <div id="back"><button style="display:none;">Back</button></div>
            <div id="step">Boundary Selection</div>
            <div id="next"><button style="display:none;">Next</button></div>
        </div>
        <div id="nav_bot">
            <div id="message">Select a boundary to get started</div>
        </div>
    </div>
    
    <div id="main">

        <div id="boundary" class="content">
            <div id="bnd_opts">
                <div>Available Boundaries:</div>
                <select id="bnd_options" size="19">
                </select>
            </div>
            <div id="bnd_map">
                <div id="map"></div>
            </div>
            <div id="bnd_info">
                <div id="bnd_title"></div>
                <div id="bnd_short"></div>
                <div id="bnd_link"></div>
                <button id="bnd_lock" style="display:none;" data-locked="false">Select</button>
            </div>
        </div>

        <div id="data" class="content" style="display:none;">
            <div id="data_top">
                <div id="data_bnd">
                    <span>Boundary Info</span>
                    <div>
                        <div id="data_bnd_title"></div>
                        <div id="data_bnd_short"></div>
                        <div id="data_bnd_link"></div>
                    </div>
                </div>
                <div id="data_summary">
                    <span>Data Summary</span>
                    <div>
                        <div>Datasets Available: <span id="data_summary_available">#</span></div>
                        <div>Items Selected: <span id="data_summary_selected">#</span></div>
                    </div>
                </div>    
            </div>
            <div id="data_mid">
                <span>Available Data:</span>
                <button>Clear All</span>
            </div>
            <div id="data_bot"></div>
        </div>

        <div id="overview" class="content" style="display:none;"></div>

        <div id="checkout" class="content" style="display:none;"></div>

    </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>

    <script src='https://api.tiles.mapbox.com/mapbox.js/v2.1.2/mapbox.js'></script>

    <!-- // <script src="http://code.highcharts.com/highcharts.js"></script> -->
    <!-- // <script src="http://code.highcharts.com/modules/exporting.js"></script> -->

    <script src="/libs/underscoremin.js"></script>

    <!-- // <script src="/aiddata/libs/spin.min.js"></script>     -->
    <!-- // <script src="/aiddata/libs/simple_statistics.js"></script> -->
    <!-- // <script src="/aiddata/libs/URI.js"></script> -->

    <script src="index.js"></script>

</body>

</html>
