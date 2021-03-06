<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2012
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2012, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>
<h2>Search</h2>
<div class="centralColumn">
	<p>Find a patient by <strong>Hospital Number</strong>, <strong>NHS Number</strong>, <strong>Firstname Surname</strong> or <strong>Surname, Firstname</strong>.</p>
	<?php $this->renderPartial('//base/_messages'); ?>
	<?php
		$this->beginWidget('CActiveForm', array(
			'id' => 'omnibox',
			'focus' => '#query',
			'action' => Yii::app()->createUrl('site/search'),
		));?>
	<div id="search_patient_id" class="form_greyBox bigInput">
		<?php echo CHtml::textField('query', '', array('style' => 'width: 400px;')); ?>
		<button type="submit" style="float: right; display: block;" class="classy blue tall" tabindex="2"><span class="button-span button-span-blue">Search</span></button>
		<img class="loader" src="<?php echo Yii::app()->createUrl('img/ajax-loader.gif')?>" alt="loading..." style="float: right; margin-right: 10px; margin-top: 9px; display: none;" />
	</div>
	<?php $this->endWidget(); ?>
</div><!-- .centralColumn -->
<script type="text/javascript">
	$('#omnibox button').click(function() {
		if (!$(this).hasClass('inactive')) {
			disableButtons();
		} else {
			return false;
		}
	});
</script>
