<div class="container-fluid display-table">
    <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
            <div class="logo">
                <a hef="home.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                </a>
            </div>
            <div class="navi">
                <ul>
                    <li class="<?=($menu=='index')?'active':'';?>"><a href="<?php echo site_url() ?>index"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                    <li class="<?=($menu=='data')?'active':'';?>"><a href="<?php echo site_url() ?>data"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Data</span></a></li>
                    <li class="<?=($menu=='summarization')?'active':'';?>"><a href="<?php echo site_url() ?>summarization"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Summarization</span></a></li>
                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Pre Fetching</span></a></li>
                    <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">About</span></a></li>
                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Help</span></a></li>
                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">UTM Website</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">
            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
            <div class="row">
                <header>
                    <div class="col-md-7">
                        <nav class="navbar-default pull-left">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-5">
                        <div class="header-rightside">
                            <ul class="list-inline header-top pull-right">
                                <li class="dropdown">
                                    <?php if($menu=='summarization') : ?>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-content">
                                                <a href="#" data-toggle="modal" data-target="#setting" class="view btn-sm active">Setting</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
            </div>
