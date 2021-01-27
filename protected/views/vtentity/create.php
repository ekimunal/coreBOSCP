<?php
/*************************************************************************************************
 * coreBOSCP - web based coreBOS Customer Portal
 * Copyright 2011-2014 JPL TSolucio, S.L.   --   This file is a part of coreBOSCP.
 * Licensed under the GNU General Public License (the "License") either
 * version 3 of the License, or (at your option) any later version; you may not use this
 * file except in compliance with the License. You can redistribute it and/or modify it
 * under the terms of the License. JPL TSolucio, S.L. reserves all rights not expressly
 * granted by the License. coreBOSCP distributed by JPL TSolucio S.L. is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. Unless required by
 * applicable law or agreed to in writing, software distributed under the License is
 * distributed on an "AS IS" BASIS, WITHOUT ANY WARRANTIES OR CONDITIONS OF ANY KIND,
 * either express or implied. See the License for the specific language governing
 * permissions and limitations under the License. You may obtain a copy of the License
 * at <http://www.gnu.org/licenses/>
 *************************************************************************************************
 *  Author       : JPL TSolucio, S. L.
 *************************************************************************************************/

if(($cache=Yii::app()->cache)!==null) {
	if (($modname=$cache->get('yiicpng.sidebar.listmodules'))!==false) {
		$modname=$modname[$model->getModule()];
	} else {
	  $modname=Yii::t('core', $model->getModule());
	}
} else {
	$modname=Yii::t('core', $model->getModule());
}
?>
<?php echo $this->renderPartial('//vtentity/_form', 
        array('model'=>$model,
            'fields'=>$fields,
            'uitypes'=>$uitypes,
            'legend'=>Yii::t('core','create')." $modname"
            )); ?>

<script type="text/javascript">
breadCrumb.add({ icon: 'add', href: 'javascript:chive.goto(\'<?php echo $this->modelLinkName;?>/<?php echo $this->entity;?>/create\')', text: '<?php echo $this->entity; ?>'});
breadCrumb.show();
sideBar.activate(0);
</script>