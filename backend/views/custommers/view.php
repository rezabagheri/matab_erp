<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Custommers */

$this->title = $model->first_name . '، ' . $model->last_name;
$this->params['breadcrumbs'][] = ['label' => 'بیماران', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $this->title ?></h3>

                        <p class="text-muted text-center"><?= $model->getAttributeLabel('major') ?></p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b><?= $model->getAttributeLabel('firts_time_visit') ?></b>
                                <a class="float-left"><?= $model->firts_time_visit ?>۲۲ خرداد ۱۳۹۶</a>
                            </li>
                            <li class="list-group-item">
                                <b><?= "مراجعه‌ی قبلی" ?></b>
                                <a class="float-left"><?= $model->firts_time_visit ?>۱۲ فروردین ۱۲۹۹</a>
                            </li>
                            <li class="list-group-item">
                                <b>آخرین تشخیص</b> <a class="float-left">دو قطبی</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">درباره‌ی بیمار</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fa fa-book mr-1"></i> <?= $model->getAttributeLabel('education_level') ?></strong>

                        <p class="text-muted">
                            <?= $model->education_level ?> : <?= $model->major ?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-calendar mr-1"></i> <?= $model->getAttributeLabel('birth_date') ?></strong>
                        <p class="text-muted"><?= $model->birth_date ?></p>

                        <strong><i class="fa fa-map-marker mr-1"></i> <?= $model->getAttributeLabel('birth_place') ?></strong>
                        <p class="text-muted"><?= $model->birth_place ?></p>
                        <strong><i class="fa fa-sort-numeric-up mr-1"></i> <?= $model->getAttributeLabel('birth_order') ?></strong>
                        <p class="text-muted"><?= $model->birth_order ?></p>

                        <strong><i class="fa fa-venus-mars mr-1"></i> <?= $model->getAttributeLabel('gender') ?></strong>
                        <p class="text-muted"><?= $model->gender ?></p>

                        <strong><i class="fa fa-hand-paper-o mr-1"></i> <?= $model->getAttributeLabel('primary_hand') ?></strong>
                        <p class="text-muted"><?= $model->primary_hand ?></p>

                        <hr>
                        <strong><i class="fa fa-venus-mars mr-1"></i> <?= $model->getAttributeLabel('maritalـstatus') ?></strong>
                        <p class="text-muted"><?= $model->maritalـstatus ?></p>
                        <strong><i class="fa fa-venus-mars mr-1"></i> <?= $model->getAttributeLabel('child_count') ?></strong>
                        <p class="text-muted"><?= $model->child_count ?></p>

                        <hr>
                        <strong><i class="fa  fa-mobile mr-1"></i> <?= $model->getAttributeLabel('mobile_numer') ?></strong>
                        <p class="text-muted"><?= $model->mobile_number ?></p>
                        <strong><i class="fa fa-phone mr-1"></i> <?= $model->getAttributeLabel('home_phone') ?></strong>
                        <p class="text-muted"><?= $model->home_phone ?></p>
                        <strong><i class="fa fa-phone mr-1"></i> <?= $model->getAttributeLabel('other_phones') ?></strong>
                        <p class="text-muted"><?= $model->other_phones ?></p>
                        <strong><i class="fa fa-map-marker mr-1"></i> <?= $model->getAttributeLabel('address') ?></strong>
                        <p class="text-muted"><?= $model->address ?></p>

                        <hr />
                        <strong><i class="fa fa-user mr-1"></i> <?= $model->getAttributeLabel('referrer') ?></strong>
                        <p class="text-muted"><?= $model->referrer ?></p>

                        <strong><i class="fa fa-pencil mr-1"></i> نکات مهم</strong>
                        <p class="text-muted">
                            <span class="tag tag-danger">بیماری قلبی</span>
                            <span class="tag tag-success">مشکل کلیه</span>
                            <span class="tag tag-info">حساسیت به سیتالوپرام </span>
                            <span class="tag tag-warning">اعتیاد به ااکل</span>
                            <span class="tag tag-primary">هیچی</span>
                        </p>

                    </div>
                    <!-- /.card-body -->
                    <?= Html::a('ویرایش پرونده', ['update', 'id' => $model->cid], ['class' => 'btn btn-primary']) ?>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <?= $this->render('activity',[
                                'model' => $model
                            ])?>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">
                                <!-- The timeline -->
                                <ul class="timeline timeline-inverse">
                                    <!-- timeline time label -->
                                    <li class="time-label">
                                        <span class="bg-danger">
                                            10 Feb. 2014
                                        </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-envelope bg-primary"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                            <div class="timeline-body">
                                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                quora plaxo ideeli hulu weebly balihoo...
                                            </div>
                                            <div class="timeline-footer">
                                                <a class="btn btn-primary btn-sm">Read more</a>
                                                <a class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-user bg-info"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                                            </h3>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-comments bg-warning"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                            <div class="timeline-body">
                                                Take me to your leader!
                                                Switzerland is small and neutral!
                                                We are more like Germany, ambitious and misunderstood!
                                            </div>
                                            <div class="timeline-footer">
                                                <a class="btn btn-warning btn-flat btn-sm">View comment</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <!-- timeline time label -->
                                    <li class="time-label">
                                        <span class="bg-success">
                                            3 Jan. 2014
                                        </span>
                                    </li>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <li>
                                        <i class="fa fa-camera bg-purple"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                            <div class="timeline-body">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                                <img src="http://placehold.it/150x100" alt="..." class="margin">
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                                    <li>
                                        <i class="fa fa-clock-o bg-gray"></i>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputName" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName2" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>