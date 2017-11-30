<?php $this->load->view('template/_header'); ?>
<?php $this->load->view('template/_aside'); ?>
<div class="user-dashboard">
    <h1>Analytics</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 gutter">
        	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#barcharts" aria-expanded="false" aria-controls="barcharts">Bar Charts</button>
        	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#linecharts" aria-expanded="false" aria-controls="linecharts">Line Charts</button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#piecharts" aria-expanded="false" aria-controls="piecharts">Pie Charts</button>
        	<br><br>
            <div class="collapse" id="barcharts">
            	<div class="sales">
	                <div id="containerbar" style="width: 75%;">
				        <canvas id="canvasbar"></canvas>
				    </div>
                    <div style="width: 25%">
                        <button id="bar_by_state" class="btn btn-primary">By State</button>
                        <button id="bar_by_region" class="btn btn-primary">By Region</button>
                    </div>
	            </div>
            </div>
            <div class="collapse" id="linecharts">
            	<div class="sales">
	                <div id="containerline" style="width: 75%;">
				        <canvas id="canvasline"></canvas>
				    </div>
                    <div style="width: 25%">
                        <button id="line_by_state" class="btn btn-primary">By State</button>
                        <button id="line_by_region" class="btn btn-primary">By Region</button>
                    </div>
	            </div>
            </div>
            <div class="collapse" id="piecharts">
                <div class="sales">
                    <div id="containerpie" style="width: 75%;">
                        <canvas id="canvaspie"></canvas>
                    </div>
                    <div style="width: 25%">
                        <button id="pie_by_state" class="btn btn-primary">By State</button>
                        <button id="pie_by_region" class="btn btn-primary">By Region</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var LABEL = '<?php echo $label; ?>';
        var API = '<?php echo $api; ?>';
        LABEL = $.parseJSON(LABEL);
        API = $.parseJSON(API);

        var pieColor = [];
        var dynamicColors = function() {
            var r = Math.floor(Math.random() * 255);
            var g = Math.floor(Math.random() * 255);
            var b = Math.floor(Math.random() * 255);
            return "rgb(" + r + "," + g + "," + b + ")";
        };

        var color = Chart.helpers.color;
        var barChartData = {
            labels: LABEL,
            datasets: [{
                label: 'Region',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: API
            }]
        };

        var lineChartData = {
            type: 'line',
            data: {
                labels: LABEL,
                datasets: [{
                    label: "Region",
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: API,
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Line Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Areas'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        };

        $.each(API, function( key, value ) {
            pieColor.push(dynamicColors());
        });
        var pieChartData = {
            type: 'pie',
            data: {
                datasets: [{
                    data: API,
                    backgroundColor: pieColor,
                    label: 'Pie Charts'
                }],
                labels: LABEL
            },
            options: {
                responsive: true
            }
        };

        window.onload = function() {
            var bar_chart = document.getElementById("canvasbar").getContext("2d");
            window.myBar = new Chart(bar_chart, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Bar Chart'
                    }
                }
            });

            var line_chart = document.getElementById("canvasline").getContext("2d");
			window.myLine = new Chart(line_chart, lineChartData);

            var pie_chart = document.getElementById("canvaspie").getContext("2d");
            window.myPie = new Chart(pie_chart, pieChartData);

            document.getElementById('bar_by_state').addEventListener('click', function() {
                var group_by = 'state';
                var label_url = '<?php echo base_url(); ?>'+'analytics/get_labels';
                var data_url = '<?php echo base_url(); ?>'+'analytics/get_data';
                var labels = [];
                var api = [];

                $.ajax({
                    url: label_url,
                    type: "POST",
                    data: { group_by: group_by },
                    dataType: "json",
                    success: function (data) {
                        labels = data.result;
                        while(window.myBar.data.labels.length > 0) {
                            window.myBar.data.labels.pop();
                        }

                        $.each(labels, function(i, val) {
                            window.myBar.data.labels.push(val);
                        });
                        window.myBar.update();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });

                $.ajax({
                    url: data_url,
                    type: "POST",
                    data: { group_by: group_by },
                    dataType: "json",
                    success: function (data) {
                        api = data.result;
                        window.myBar.data.datasets.forEach((dataset) => {
                            dataset.data.pop();
                        });
                        $.each(api, function(i, val) {
                            window.myBar.data.datasets.forEach((dataset) => {
                                dataset.data.push(val);
                            });
                        });
                        window.myBar.update();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });             
            });

            document.getElementById('bar_by_region').addEventListener('click', function() {
                var group_by = 'region';
                var label_url = '<?php echo base_url(); ?>'+'analytics/get_labels';
                var data_url = '<?php echo base_url(); ?>'+'analytics/get_data';
                var labels = [];
                var api = [];

                $.ajax({
                    url: label_url,
                    type: "POST",
                    data: { group_by: group_by },
                    dataType: "json",
                    success: function (data) {
                        labels = data.result;
                        while(window.myBar.data.labels.length > 0) {
                            window.myBar.data.labels.pop();
                        }

                        $.each(labels, function(i, val) {
                            window.myBar.data.labels.push(val);
                        });
                        window.myBar.update();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });

                $.ajax({
                    url: data_url,
                    type: "POST",
                    data: { group_by: group_by },
                    dataType: "json",
                    success: function (data) {
                        api = data.result;
                        window.myBar.data.datasets.forEach((dataset) => {
                            dataset.data.pop();
                        });

                        $.each(api, function(i, val) {
                            window.myBar.data.datasets.forEach((dataset) => {
                                dataset.data.push(val);
                            });
                        });
                        window.myBar.update();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });             
            });

            document.getElementById('line_by_state').addEventListener('click', function() {
                var group_by = 'state';
                var label_url = '<?php echo base_url(); ?>'+'analytics/get_labels';
                var data_url = '<?php echo base_url(); ?>'+'analytics/get_data';
                var labels = [];
                var api = [];

                $.ajax({
                    url: label_url,
                    type: "POST",
                    data: { group_by: group_by },
                    dataType: "json",
                    success: function (data) {
                        labels = data.result;
                        while(window.myLine.data.labels.length > 0) {
                            window.myLine.data.labels.pop();
                        }

                        $.each(labels, function(i, val) {
                            window.myLine.data.labels.push(val);
                        });
                        window.myLine.update();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });

                $.ajax({
                    url: data_url,
                    type: "POST",
                    data: { group_by: group_by },
                    dataType: "json",
                    success: function (data) {
                        api = data.result;
                        window.myLine.data.datasets.forEach((dataset) => {
                            dataset.data.pop();
                        });
                        $.each(api, function(i, val) {
                            window.myLine.data.datasets.forEach((dataset) => {
                                dataset.data.push(val);
                            });
                        });
                        window.myLine.update();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });             
            });

            document.getElementById('line_by_region').addEventListener('click', function() {
                var group_by = 'region';
                var label_url = '<?php echo base_url(); ?>'+'analytics/get_labels';
                var data_url = '<?php echo base_url(); ?>'+'analytics/get_data';
                var labels = [];
                var api = [];

                $.ajax({
                    url: label_url,
                    type: "POST",
                    data: { group_by: group_by },
                    dataType: "json",
                    success: function (data) {
                        labels = data.result;
                        while(window.myLine.data.labels.length > 0) {
                            window.myLine.data.labels.pop();
                        }

                        $.each(labels, function(i, val) {
                            window.myLine.data.labels.push(val);
                        });
                        window.myLine.update();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });

                $.ajax({
                    url: data_url,
                    type: "POST",
                    data: { group_by: group_by },
                    dataType: "json",
                    success: function (data) {
                        api = data.result;
                        window.myLine.data.datasets.forEach((dataset) => {
                            dataset.data.pop();
                        });

                        $.each(api, function(i, val) {
                            window.myLine.data.datasets.forEach((dataset) => {
                                dataset.data.push(val);
                            });
                        });
                        window.myLine.update();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status);
                        console.log(thrownError);
                    }
                });             
            });

            document.getElementById('pie_by_state').addEventListener('click', function() {
                var group_by = 'state';
                var label_data_url = '<?php echo base_url(); ?>' + 'analytics/get_label_data';
                var labels = [];
                var api = [];

                $.post(label_data_url, { group_by: group_by },
                    function(data_response){
                        response = data_response.result;
                        labels = response.labels;
                        api = response.api;
                        window.myPie.destroy();

                        $.each(api, function( key, value ) {
                            pieColor.push(dynamicColors());
                        });
                        pieChartData = {
                            type: 'pie',
                            data: {
                                datasets: [{
                                    data: api,
                                    backgroundColor: pieColor,
                                    label: 'Pie Charts'
                                }],
                                labels: labels
                            },
                            options: {
                                responsive: true
                            }
                        };

                        window.myPie = new Chart(pie_chart, pieChartData);
                    }, "json"
                );          
            });

            document.getElementById('pie_by_region').addEventListener('click', function() {
                var group_by = 'region';
                var label_data_url = '<?php echo base_url(); ?>' + 'analytics/get_label_data';
                var labels = [];
                var api = [];

                $.post(label_data_url, { group_by: group_by },
                    function(data_response){
                        response = data_response.result;
                        labels = response.labels;
                        api = response.api;
                        window.myPie.destroy();

                        $.each(api, function( key, value ) {
                            pieColor.push(dynamicColors());
                        });
                        pieChartData = {
                            type: 'pie',
                            data: {
                                datasets: [{
                                    data: api,
                                    backgroundColor: pieColor,
                                    label: 'Pie Charts'
                                }],
                                labels: labels
                            },
                            options: {
                                responsive: true
                            }
                        };

                        window.myPie = new Chart(pie_chart, pieChartData);
                    }, "json"
                );         
            });
        };
    </script>
</div>
<?php $this->load->view('template/_footer'); ?>
