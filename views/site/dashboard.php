<?php

/* @var $this yii\web\View */

//$this->title = Yii::$app->name;
$this->title = 'Dashboard';
?>

<div class="site-index">

    <div class="body-content box box-group">

        <section class="content">

                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>20</h3>

                                <p>Sudah Presensi</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-checkmark-circled"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>4</h3>

                                <p>Belum Presensi</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-alert"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>3</h3>

                                <p>Terlambat</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-alarm"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>20</h3>

                                <p>Ada di Kantor</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-briefcase"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-purple">
                            <div class="inner">
                                <h3>2</h3>

                                <p>Ijin Tidak Masuk</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-person"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-lime">
                            <div class="inner">
                                <h3>1</h3>

                                <p>Pulang Awal</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-timer"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-maroon">
                            <div class="inner">
                                <h3>0</h3>

                                <p>Data Capture</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-fuchsia">
                            <div class="inner">
                                <h3>30</h3>

                                <p>Total Pegawai</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-people"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <!-- LINE CHART -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Line Chart</h3>


                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <canvas id="lineChart" style="height:250px"></canvas>

                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-4">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Statistik</h3>
                            </div>
                            <div class="box-body">

                                <div class="info-box bg-green">
                                    <span class="info-box-icon"><i class="fa fa-check-circle"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Rata-rata masuk</span>
                                        <span class="info-box-number">20  <i class="ion ion-person"></i></span>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 66%"></div>
                                        </div>
                                        <span class="progress-description"></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>

                                <div class="info-box bg-red">
                                    <span class="info-box-icon"><i class="fa fa-times-circle"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Rata-rata tidak masuk</span>
                                        <span class="info-box-number">2  <i class="ion ion-person"></i></span>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 5%"></div>
                                        </div>
                                        <span class="progress-description"></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>

                                <div class="info-box bg-yellow-active" style="height: 20px">
                                    <span class="info-box-icon"><i class="fa fa-clock-o"></i></span>

                                    <div class="info-box-content">
                                        <span class="info-box-text">Rata-rata terlambat</span>
                                        <span class="info-box-number">3  <i class="ion ion-person"></i></span>

                                        <div class="progress">
                                            <div class="progress-bar" style="width: 7%"></div>
                                        </div>
                                        <span class="progress-description"></span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->

                            </div>
                        </div>
                    </div>
                </div>

        </section>
    </div>

    <script>
        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100)
        };
        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                },
                {
                    label: "My Second dataset",
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                }
            ]

        }

        window.onload = function () {
            var ctx = document.getElementById("lineChart").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData, {
                responsive: true
            });
        }
    </script>