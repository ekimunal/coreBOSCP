<?php /*************************************************************************************************
 * Evolutivo vtyiiCPng - web based vtiger CRM Customer Portal
 * Copyright 2012 JPL TSolucio, S.L.  --  This file is a part of vtyiiCPNG.
 * You can copy, adapt and distribute the work under the "Attribution-NonCommercial-ShareAlike"
 * Vizsage Public License (the "License"). You may not use this file except in compliance with the
 * License. Roughly speaking, non-commercial users may share and modify this code, but must give credit
 * and share improvements. However, for proper details please read the full License, available at
 * http://vizsage.com/license/Vizsage-License-BY-NC-SA.html and the handy reference for understanding
 * the full license at http://vizsage.com/license/Vizsage-Deed-BY-NC-SA.html. Unless required by
 * applicable law or agreed to in writing, any software distributed under the License is distributed
 * on an  "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations under the
 * License terms of Creative Commons Attribution-NonCommercial-ShareAlike 3.0 (the License).
 *************************************************************************************************
 *  Author       : JPL TSolucio, S. L.
 *************************************************************************************************/?>
<table class="list">
<colgroup>
<col style="width: 30%;"></col>
<col style="width: 55%;"></col>
<col style="width: 15%;"></col>
</colgroup>
<thead>
<tr>
<th colspan="3"><?php echo $modname; ?></th>
</tr>
</thead>
<tbody>
<?php
$i=0;
if (is_array($relPrj))
foreach ($relPrj as $prrow) {
	echo '<tr class="'.($i % 2 == 0 ? 'even' : 'odd').'">
	<td>'.CHtml::link($prrow['projectmilestonename'],"index.php#vtentity/ProjectMilestone/view/".$prrow['id']).'</td>
	<td>'.$prrow['projectmilestonedate'].'</td>
	<td>'.$prrow['projectmilestonetype'].'</td>
	</tr>';
	$i++;
} ?>
</tbody>
</table>