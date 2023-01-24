          <style>
              .center {
                  display: block;
                  margin-left: auto;
                  margin-right: auto;
                  /* width: 50%; */
              }

              div.a {
                  text-align: center;
              }
          </style>
          <!-- 
          <div class="block-header">
              <h2>DASHBOARD</h2>
          </div> -->

          <!-- Widgets -->
          <!-- <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">KEGIATAN</div>
                            <div class="number count-to" data-from="0" data-to="<?= $kegiatan_count; ?>" data-speed="2000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">PRODUK</div>
                            <div class="number count-to" data-from="0" data-to="<?= $bumm_count; ?>" data-speed="2000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">PROGRAM DONASI</div>
                            <div class="number count-to" data-from="0" data-to="<?= $donasi_count; ?>" data-speed="2000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">DONATUR</div>
                            <div class="number count-to" data-from="0" data-to="<?= $donatur_count; ?>" data-speed="2000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div> -->
          <!-- #END# Widgets -->
          <!-- CPU Usage -->
          <div class="row clearfix">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="card">
                      <div class="header">
                          <div class="a">
                              <h1>Sistem Prediksi Penjualan</h1>
                          </div>

                          <!-- <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                      </div>
                      <div class="body">
                          <!-- <div id="real_time_chart" class="dashboard-flot-chart"></div> -->
                          <p class="lead">
                              Selamat Datang di Aplikasi Prediksi Penjualan Retail di Batik Solo dengan
                              Metode Single Moving Average <i><b><?= strtoupper($ses_nama) ?></b></i>
                          </p>

                          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                              <!-- Indicators -->
                              <ol class="carousel-indicators">
                                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                      <img src="<?php echo base_url(); ?>images/dashboard/1.jpg" class="center" />
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url(); ?>images/dashboard/2.jpg" class="center" />
                                  </div>
                                  <div class="item">
                                      <img src="<?php echo base_url(); ?>images/dashboard/3.jpg" class="center" />
                                  </div>
                              </div>

                              <!-- Controls -->
                              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                              </a>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
          <!-- #END# CPU Usage -->