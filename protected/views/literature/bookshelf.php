
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'report-book-form',
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($literature,'id'); ?>
		<?php echo $form->textField($literature,'id',array('readonly' => true)); ?>
		<?php echo $form->error($literature,'id'); ?>
	</div>	
	<div class="row">
		<?php echo $form->hiddenField($bookshelf, 'id'); ?>
		<?php echo $form->error($bookshelf, 'id'); ?>
	</div>
	
		
<div style="margin-left: 125px"><?php echo CHtml::submitButton('ยืนยัน'); ?></div>

<?php $this->endWidget(); ?>

</div><!-- form -->