<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Your current blogmarks are:</p>
<ul>
<?php foreach($urls as $url): ?>
	<li><a href="<?= $url->url ?>"><?= $url->title ?></a></li>
<?php endforeach; ?>
</ul>

