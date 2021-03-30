<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/admin/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css">
</head>
<body style="background-color: #F0F5F7">
	<div class="main-container">
		<div class="customscroll customscroll-10-p height-100-p xs-pd-20-10 pd-ltr-20">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Dashboard</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url();?>manager/home">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
			
			<div class="bg-white pd-30 box-shadow border-radius-5 mb-30 xs-pd-20-10">
				<div class="row clearfix">
					<div class="col-sm-12">
						<h3 class="mb-30 text-center"><b>Selamat Datang!!!</b></h3>
						<div>
							<p style="text-align: center">
                Ini adalah halaman utama <b>(Dashboard Manager)</b> 
                <br><br><br>
								Anda masuk sebagai <b>Manager!</b>
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<script src="<?php echo base_url();?>assets/admin/src/plugins/jQuery-Knob-master/js/jquery.knob.js"></script>
	<script src="<?php echo base_url();?>assets/admin/src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="<?php echo base_url();?>assets/admin/src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script src="<?php echo base_url();?>assets/admin/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="<?php echo base_url();?>assets/admin/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script>
		$(".dial1").knob();
		$({animatedVal: 0}).animate({animatedVal: 66}, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".dial1").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});
		$(".dial2").knob();
		$({animatedVal: 0}).animate({animatedVal: 75}, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".dial2").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});
		$(".dial3").knob();
		$({animatedVal: 0}).animate({animatedVal: 90}, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".dial3").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});
		$(".dial4").knob();
		$({animatedVal: 0}).animate({animatedVal: 35}, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".dial4").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});
		// map
		jQuery('#browservisit').vectorMap({
			map: 'world_mill_en',
			backgroundColor: '#fff',
			borderWidth: 1,
			zoomOnScroll : false,
			color: '#ddd',
			regionStyle: {
				initial: {
					fill: '#fff'
				}
			},
			enableZoom: true,
			normalizeFunction: 'linear',
			showTooltip: true
		});
		// chart
		Highcharts.chart('chart', {
			chart: {
				type: 'line'
			},
			title: {
				text: ''
			},
			xAxis: {
				categories: ['jan 01', 'jan 10', 'jan 20', 'jan 30', 'jan 30', 'jan 30', 'jan 30'],
				labels: {
					style: {
						color: '#1ca1ec',
						fontSize: '14px'
					}
				}
			},
			yAxis: {
				labels: {
					formatter: function () {
						return this.value;
					},
					style: {
						color: '#1ca1ec',
						fontSize: '14px'
					}
				},
				title: {
					text: ''
				},
			},
			credits: {
				enabled: false
			},
			tooltip: {
				crosshairs: true,
				shared: true
			},
			plotOptions: {
				spline: {
					marker: {
						radius: 10,
						lineColor: '#0ba4f0',
						lineWidth: 1
					}
				}
			},
			legend: {
				align: 'center',
				x: 0,
				y: 0
			},
			series: [{
				name: 'Twitter',
				color: '#00789c',
				marker: {
					symbol: 'circle'
				},
				data: [0, 10, 5, 30, 40, 20, 10]
			},
			{
				name: 'Facebook',
				color: '#236adc',
				marker: {
					symbol: 'circle'
				},
				data: [40, 20, 10, 40, 15, 15, 20]
			},
			{
				name: 'Chat',
				color: '#0ba4f0',
				marker: {
					symbol: 'circle'
				},
				data: [0, 15, 5, 30, 40, 30, 28]
			},
			{
				name: 'Forum',
				color: '#87c7f3',
				marker: {
					symbol: 'circle'
				},
				data: [35, 25, 10, 40, 15, 5, 38]
			}]
		});
		Highcharts.chart('compliance-trend', {
			chart: {
				type: 'column'
			},
			colors: ['#209688', '#f9d47a', '#fb5b55'],
			title: {
				text: ''
			},
			credits: {
				enabled: false
			},
			xAxis: {
				categories: ['1th Sep', '2th Sep', '3th Sep', '4th Sep', '5th Sep', '6th Sep', '7th Sep', '8th Sep', '9th Sep', '10th Sep', '11th Sep', '12th Sep', '13th Sep', '14th Sep', '15th Sep'],
				crosshair: true,
				lineWidth:1,
				lineColor: '#979797',
				labels: {
					style: {
						fontSize: '10px',
						color: '#5a5a5a'
					}
				},
			},
			yAxis: {
				min: 0,
				max: 100,
				gridLineWidth: 0,
				lineWidth:1,
				lineColor: '#979797',
				title: {
					text: ''
				},
				stackLabels: {
					enabled: false,
					style: {
						fontWeight: 'bold',
						color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
					}
				}
			},
			legend: {
				enabled: true
			},
			tooltip: {
				headerFormat: '<b>{point.x}</b><br/>',
				pointFormat: '{series.name}: {point.y}'
			},
			plotOptions: {
				column: {
					stacking: 'normal',
					dataLabels: {
						enabled: false,
						color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
					},
					borderWidth: 0
				}
			},
			series: [{
				name: 'Success',
				maxPointWidth: 10,
				data: [50, 30, 40, 70, 20, 50, 30, 40, 70, 20, 30, 30, 40, 40, 70,]
			}, {
				name: 'Warning',
				maxPointWidth: 10,
				data: [0, 20, 30, 20, 10, 50, 30, 40, 10, 20, 40, 30, 40, 30, 20,]
			}, {
				name: 'Error',
				maxPointWidth: 10,
				data: [50, 50, 30, 10, 70, 0, 40, 20, 20, 60, 30, 30, 20, 30, 10,]
			}]
		});

	</script>
</body>
</html>