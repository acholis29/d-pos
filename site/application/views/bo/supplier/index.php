<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
   $this->load->view("shared/_header");

?>
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
    <div class="container-fluid">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Supplier
                <small>Hotel, Room Category & Rates</small>
            </h1>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PAGE TOOLBAR -->
        <div class="page-toolbar">
            <!-- BEGIN THEME PANEL -->
            <div class="btn-group btn-theme-panel">
                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-settings"></i>
                </a>
                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h3>Other master for hotel</h3>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <ul class="theme-colors">
                                        <li class="theme-color theme-color-default" data-theme="default">
                                            <i class="fa fa-hotel"></i> Room category
                                        </li>
                                        <li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Blue Hoki</span>
                                        </li>
                                        <li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Blue Steel</span>
                                        </li>
                                        <li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Orange</span>
                                        </li>
                                        <li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
                                            <span class="theme-color-view"></span>
                                            <span class="theme-color-name">Yellow Crusta</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 seperator">
                            <h3>LAYOUT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END THEME PANEL -->
        </div>
        <!-- END PAGE TOOLBAR -->
    </div>
</div>
<!-- END PAGE HEAD-->





<!-- BEGIN PAGE CONTENT BODY -->
<div class="page-content">
    <div class="container-fluid">
        <!-- BEGIN PAGE BREADCRUMBS -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="/bo">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Hotel</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMBS -->
        <!-- BEGIN PAGE CONTENT INNER -->
        <div class="page-content-inner">
            <div class="mt-content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="portlet light">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-home"></i>
                                <span class="caption-subject font-dark bold uppercase">Hotel</span>
                            </div>
                            <div class="actions">                                
                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                            </div>
                        </div>
                        <div class="portlet-body" style="height: auto;">
                            <div class="row number-stats margin-bottom-30">
                            <div class="table-scrollable table-scrollable-borderless">
                                <table class="table table-hover table-light">
                                    <thead>
                                        <tr class="uppercase">
                                            <th colspan="2"> Hotel Name </th>
                                            <th> Earnings </th>
                                            <th> CASES </th>
                                            <th> CLOSED </th>
                                            <th> RATE </th>
                                        </tr>
                                    </thead>
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">Brain</a>
                                        </td>
                                        <td> $345 </td>
                                        <td> 45 </td>
                                        <td> 124 </td>
                                        <td>
                                            <span class="bold theme-font">80%</span>
                                        </td>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                    </div>

                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT INNER -->
    </div>
</div>
<!-- END PAGE CONTENT BODY -->

<?php $this->load->view("shared/_footer"); ?>   