

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gösterge Paneli
                        </h1>
                    </div>
                </div>
                {if isset($yetki_yok)}
                <div class="alert alert-danger">
                    <strong>Bu işlemi yapmaya yetkiniz yok.</strong>
                </div>
                {/if}
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-money fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{$islem_yapilmayan_satislar_sayi}</div>
                                        <div>İşlem Yapılmayanlar</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sales.php?islem_yapilmayanlar">
                                <div class="panel-footer">
                                    <span class="pull-left">Detaylar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{$fatura_kesilecekler_sayi}</div>
                                        <div>Fatura Kesilecekler</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sales.php?fatura_kesilecekler">
                                <div class="panel-footer">
                                    <span class="pull-left">Detaylar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-truck fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{$kargoya_verilecekler_sayi}</div>
                                        <div>Kargoya Verilecekler</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sales.php?kargoya_verilecekler">
                                <div class="panel-footer">
                                    <span class="pull-left">Detaylar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{$basarili_satislar_sayi}</div>
                                        <div>Basarili Satis</div>
                                    </div>
                                </div>
                            </div>
                            <a href="sales.php?basarili">
                                <div class="panel-footer">
                                    <span class="pull-left">Detaylar</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>

            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

