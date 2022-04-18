<?php
/* Database connection settings */
include('header.php');
include('dbconn.php');

session();

$deptID = '';
$uID = '';

//query to get data from the table
$sql = "select * from test1";
$result = oci_parse($conn, $sql);
oci_execute($result);

//loop through the returned data
while ($row = oci_fetch_assoc($result)) {

	$deptID = $deptID . '"' . $row['DEPARTMENT_ID'] . '",';
	$uID = $uID . '"' . $row['USER_ID'] . '",';
}

$deptID = trim($deptID, ",");
$uID = trim($uID, ",");
?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Chart JS -->
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script> -->
	<script src="../chartsJS/Chart294.bundle.min.js"></script>

	<title>Charts</title>

	<style type="text/css">
		#chartBody {
			font-family: Arial;
			/* margin: 80px 100px 10px 100px; */
			/* padding: 0; */
			/* color: white; */
			/* text-align: center; */
			background: #c1c1ac;
		}

		.containerCharts {
			/* color: #E8E9EB; */
			/* background: #222; */
			/* border: #555652 1px solid; */
			/* padding: 10px; */
			margin: 65px auto 70px auto;
			/* margin-left: 10px;
				margin-top: 65px;
				margin-bottom: 70px; */
		}

		canvas {
			background: #ffffff;
		}
	</style>

</head>

<body id="chartBody">

	<div class="container container-responsive" style="margin: 65px auto 70px auto;">
		<h2 class="display-4">Random Data Representing Charts</h2>
		<!-- <h1>USE CHART.JS WITH MYSQL DATASETS</h1> -->
		<div class="row" style="margin-right: -90px;margin-left: -90px;">
			<div class="col-sm-4">
				<canvas id="chart" style="width: 150px; height: 100px; /* border: 1px solid #555652; */ margin-top: 10px;"></canvas>
			</div>

			<div class="col-sm-4">
				<canvas id="chart2" style="width: 150px; height: 100px; margin-top: 10px;"></canvas>
			</div>

			<div class="col-sm-4">
				<canvas id="chart3" style="width: 150px; height: 100px; margin-top: 10px;"></canvas>
			</div>
		</div>
		<br>
		<!-- row 2 -->
		<div class="row" style="margin-right: -90px;margin-left: -90px;">
			<div class="col-sm-8">
				<div class="card">
					<canvas id="chart4" style="width: 150px; height: 80px; margin-top: 10px;"></canvas>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<canvas id="chart5" style="width: 150px; height: 75px; margin-top: 10px;"></canvas>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12" style="margin-top: 30px;">
						<div class="card">
							<canvas id="chart6" style="width: 150px; height: 75px; margin-top: 10px;"></canvas>
						</div>
					</div>
				</div>

			</div>
			<!-- MIS </div> -->
			<!-- <div class="col-sm-4">
						<div class="panel panel-default border-panel card-view panel-refresh">

							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Highest Selling Month in 20<?php echo $pyear; ?></h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body" style="padding: 0;">
									<div class="flex-stat flex-stat-3 text-center" style="padding-top: 0px;padding-bottom: 0px;">
										<span class="block"><span class="initial">৳ </span>
										<span class="txt-violet weight-300 data-rep "><?php echo max($JAN_PS, $FEB_PS, $MAR_PS, $APR_PS, $MAY_PS, $JUN_PS, $JUL_PS, $AUG_PS, $SEP_PS, $OCT_PS, $NOV_PS, $DEC_PS); ?></span> Cr.</span>
										<span class="block"><?php $arr = array('January' => $JAN_PS, 'February' => $FEB_PS, 'March' => $MAR_PS, 'April' => $APR_PS, 'May' => $MAY_PS, 'June' => $JUN_PS, 'July' => $JUL_PS, 'August' => $AUG_PS, 'September' => $SEP_PS, 'October' => $OCT_PS, 'November' => $NOV_PS, 'December' => $DEC_PS);
															arsort($arr);
															echo $name = key($arr); ?></span>
									</div>
									
								</div>	
							</div>
						</div>	
					</div> -->
		</div>


	</div>
	<?php include('footer.php'); ?>

	<script>
		var ctx = document.getElementById("chart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
					'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
				],
				datasets: [{
						label: 'DeptID',
						data: [<?php echo $deptID; ?>],
						backgroundColor: 'rgba(255,99,132,0.1)',
						borderColor: 'rgba(255,99,132)',
						borderWidth: 1
					},

					{
						label: 'UserID',
						data: [<?php echo $uID; ?>],
						backgroundColor: 'rgba(0,255,255,0.1)',
						borderColor: 'rgba(0,255,255)',
						borderWidth: 1
					}
				]
			},

			options: {
				title: {
					display: true,
					text: 'Chart 1_Random Data'
				},
				scales: {
					scales: {
						yAxes: [{
							beginAtZero: false
						}],
						xAxes: [{
							autoskip: true,
							maxTicketsLimit: 20
						}]
					}
				},
				tooltips: {
					mode: 'index'
				},
				legend: {
					display: true,
					position: 'top',
					labels: {
						/* fontColor: 'rgb(255,255,255)', */
						fontSize: 12
					}
				}
			}
		});
	</script>
	<!-- chart 2 -->
	<script>
		var ctx = document.getElementById("chart2").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
					'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
				],
				datasets: [{
						label: 'DeptID',
						data: [<?php echo $deptID; ?>],
						backgroundColor: 'rgba(255,99,132,0.1)',
						borderColor: 'rgba(255,99,132)',
						borderWidth: 3
					},

					{
						label: 'UserID',
						data: [<?php echo $uID; ?>],
						backgroundColor: 'rgba(0,255,255,0.1)',
						borderColor: 'rgba(0,255,255)',
						borderWidth: 3
					}
				]
			},

			options: {
				title: {
					display: true,
					text: 'Some text here..'
				},
				scales: {
					scales: {
						yAxes: [{
							beginAtZero: true
						}],
						xAxes: [{
							autoskip: true,
							maxTicketsLimit: 20
						}]
					}
				},
				tooltips: {
					mode: 'index'
				},
				legend: {
					display: true,
					position: 'top',
					labels: {
						/* fontColor: 'rgb(255,255,255)', */
						fontSize: 16
					}
				}
			}
		});
	</script>
	<!-- chart 3 -->

	<script>
		var ctx = document.getElementById("chart3").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
					'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
				],
				datasets: [{
						label: 'DeptID',
						data: [<?php echo $deptID; ?>],
						backgroundColor: 'rgba(255,99,132,0.1)',
						borderColor: 'rgba(255,99,132)',
						borderWidth: 3
					},

					{
						label: 'UserID',
						data: [<?php echo $uID; ?>],
						backgroundColor: 'rgba(0,255,255,0.1)',
						borderColor: 'rgba(0,255,255)',
						borderWidth: 3
					}
				]
			},

			options: {
				title: {
					display: true,
					text: 'Some text here..'
				},
				scales: {
					scales: {
						yAxes: [{
							beginAtZero: true
						}],
						xAxes: [{
							autoskip: true,
							maxTicketsLimit: 20
						}]
					}
				},
				tooltips: {
					mode: 'index'
				},
				legend: {
					display: true,
					position: 'top',
					labels: {
						/* fontColor: 'rgb(255,255,255)', */
						fontSize: 12
					}
				}
			}
		});
	</script>
	<!-- chart 4 -->

	<script>
		var ctx = document.getElementById("chart4").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'radar',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
					'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
				],
				datasets: [{
						label: 'DeptID',
						data: [<?php echo $deptID; ?>],
						backgroundColor: 'rgba(255,99,132,0.1)',
						borderColor: 'rgba(255,99,132)',
						borderWidth: 3
					},

					{
						label: 'UserID',
						data: [<?php echo $uID; ?>],
						backgroundColor: 'rgba(0,255,255,0.1)',
						borderColor: 'rgba(0,255,255)',
						borderWidth: 3
					}
				]
			},

			options: {
				title: {
					display: true,
					text: 'Some text here..'
				},
				scales: {
					scales: {
						yAxes: [{
							beginAtZero: true
						}],
						xAxes: [{
							autoskip: true,
							maxTicketsLimit: 20
						}]
					}
				},
				tooltips: {
					mode: 'index'
				},
				legend: {
					display: true,
					position: 'top',
					labels: {
						/* fontColor: 'rgb(255,255,255)', */
						fontSize: 16
					}
				}
			}
		});
	</script>

	<!-- chart 5 -->

	<script>
		var ctx = document.getElementById("chart5").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
					'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
				],
				datasets: [{
						label: 'DeptID',
						data: [<?php echo $deptID; ?>],
						backgroundColor: 'rgba(255,99,132,0.1)',
						borderColor: 'rgba(255,99,132)',
						borderWidth: 3
					},

					{
						label: 'UserID',
						data: [<?php echo $uID; ?>],
						backgroundColor: 'rgba(0,255,255,0.1)',
						borderColor: 'rgba(0,255,255)',
						borderWidth: 3
					}
				]
			},

			options: {
				title: {
					display: true,
					text: 'Some text here..'
				},
				scales: {
					scales: {
						yAxes: [{
							beginAtZero: true
						}],
						xAxes: [{
							autoskip: true,
							maxTicketsLimit: 20
						}]
					}
				},
				tooltips: {
					mode: 'index'
				},
				legend: {
					display: true,
					position: 'top',
					labels: {
						/* fontColor: 'rgb(255,255,255)', */
						fontSize: 16
					}
				}
			}
		});
	</script>

	<!-- chart 6 -->

	<script>
		var ctx = document.getElementById("chart6").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul',
					'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
				],
				datasets: [{
						label: 'DeptID',
						data: [<?php echo $deptID; ?>],
						backgroundColor: 'rgba(255,99,132,0.1)',
						borderColor: 'rgba(255,99,132)',
						borderWidth: 3
					},

					{
						label: 'UserID',
						data: [<?php echo $uID; ?>],
						backgroundColor: 'rgba(0,255,255,0.1)',
						borderColor: 'rgba(0,255,255)',
						borderWidth: 3
					}
				]
			},

			options: {
				title: {
					display: true,
					text: 'Some text here..'
				},
				scales: {
					scales: {
						yAxes: [{
							beginAtZero: true
						}],
						xAxes: [{
							autoskip: true,
							maxTicketsLimit: 20
						}]
					}
				},
				tooltips: {
					mode: 'index'
				},
				legend: {
					display: true,
					position: 'top',
					labels: {
						/* fontColor: 'rgb(255,255,255)', */
						fontSize: 16
					}
				}
			}
		});
	</script>


</body>

</html>