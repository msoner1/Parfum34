
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php">Parfüm34 Yönetim Paneli</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {$admin_name} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="dashboard.php?cikis"><i class="fa fa-fw fa-power-off"></i> Çıkış</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Gösterge Paneli</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-money"></i> Satışlar <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="demo" class="collapse">
                        {if $admin_level eq 1}
                        <li>
                            <a href="sales.php?islem_yapilmayanlar">İşlem Yapılmayanlar</a>
                        </li>
                        {/if}
                            {if $admin_level ne 3}
                        <li>
                            <a href="sales.php?fatura_kesilecekler">Fatura Kesilecekler</a>
                        </li>
                            {/if}
                        <li>
                            <a href="sales.php?kargoya_verilecekler">Kargoya Verilecekler</a>
                        </li>
                        {if $admin_level eq 1}
                        <li>
                            <a href="sales.php?iptal">İptal Edilenler</a>
                        </li>
                        <li>
                            <a href="sales.php?basarili">Basarili Satislar</a>
                        </li>
                        {/if}
                    </ul>
                </li>
                {if $admin_level eq 1}
                <li>
                    <a href="default.php?mesajlar"><i class="fa fa-fw fa-envelope-square"></i> Mesajlar</a>
                </li>
                <li>
                    <a href="default.php?son_hareketler"><i class="fa fa-fw fa-users"></i> Son Hareketler</a>
                </li>
                {/if}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
