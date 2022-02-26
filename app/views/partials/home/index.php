<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<style>
    #users{box-shadow:5px 10px 7px gray;font-size:20px;border-radius:2rem;}
    .row,.value{padding:20px 0 20px 0}
    #users>.row:hover{padding:23px 0 23px 0;transition:.5s}
    #users>.value:hover{padding:23px 0 23px 0;transition:.5s}
</style>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div style="text-align:center;"><h1>Dashboard</h1></div><br>
            <div class="row ">
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_users();  ?>
                    <a class="animated zoomIn record-count card bg-warning text-white" id="users" href="<?php print_link("users/") ?>">
                        <div class="row">
                            <div class="col-4">
                                <i class="material-icons mi-xxxlg">verified_user</i>
                            </div>
                            <div class="col-4">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Users</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_admission();  ?>
                    <a class="animated rubberBand record-count card bg-dark text-white" id="users" href="<?php print_link("admission/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">accessible</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Admission</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_announcement();  ?>
                    <a class="animated rubberBand record-count card bg-danger text-white" id="users"  href="<?php print_link("announcement/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">notifications</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Announcement</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_feestructure();  ?>
                    <a class="animated rubberBand record-count alert alert-success"  id="users" href="<?php print_link("feestracture/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">share</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Fee structure</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_applyforadmission();  ?>
                    <a class="animated zoomIn record-count alert alert-danger"  id="users" href="<?php print_link("apply_for_admission/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">archive</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Apply For Admission</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_event();  ?>
                    <a class="animated zoomIn record-count alert bg-success text-white" id="users" href="<?php print_link("event/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">event_note</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Event</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_assignment();  ?>
                    <a class="animated rubberBand record-count card alert-secondary " id="users" href="<?php print_link("assignment/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">trending_down</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Assignment</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_enrollment();  ?>
                    <a class="animated zoomIn record-count card bg-success text-white"id="users"  href="<?php print_link("enrolment/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">assignment_ind</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Enrollment</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_howtomakepayment();  ?>
                    <a class="animated rollIn record-count card bg-danger text-white" id="users" href="<?php print_link("how_to_make_payment/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons">extension</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">How To Make Payment</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_perfomance();  ?>
                    <a class="animated slideInRight record-count card bg-primary text-white" id="users" href="<?php print_link("perfomance/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">assignment_turned_in</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Perfomance</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 comp-grid">
                </div>
            </div>
        </div>
    </div>
</div>
