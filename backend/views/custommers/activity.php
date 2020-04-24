<?php

use yii\helpers\Html;
use rmrevin\yii\fontawesome\FA;

?>
<div class="active tab-pane" id="activity">
	<?php
	foreach ($model->visits as $visit) {
	?>
		<!-- Post -->
		<div class="post">
			<div class="card card-success card-outline">
				<div class="card-header">
					<h4 class="card-title"><?= FA::icon('calendar')?> <?= $visit->visit_date ?> (<?= $visit->visit_start;?>)</h4>
					<div class="card-tools">
						<span data-toggle="tooltip" title="پزشک معالج" class="badge bg-primary"><?= $visit->doctor->fullName ?> </span>

						<span class="badge badge-info"><?= $visit->therapy ?></span>

					</div>

					<!-- /.card-tools -->
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6 border-left">
							<div class="alert alert-primary">شرح حال:</div>
							<div class="card-text"><?= Html::tag('pre', $visit->comment, ['class' => 'block-comment']); ?></div>
						</div>
						<div class="col-sm-6">
							<div class="alert alert-info">نسخه</div>
							<div class="card-text"><?= Html::tag('pre', $visit->prescription, ['class' => 'block-comment']); ?></div>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<?= FA::icon("clock-o")?> مدت ویزیت :<?= $visit->duration ?>
					<span class="float-left text-sm"> 
						<?= FA::icon("money")?> مبلغ دریافتی: <?= $visit->sum ?> | 
						<?= FA::icon("minus-circle")?> تخفیف: <?= $visit->discount ?></span>
						<a href="#" class="link-black text-sm">
						
					</span>
				</div>
			</div>

			<p>

			</p>

		</div>
		<!-- /.post -->

	<?php
	}
	?>
</div>