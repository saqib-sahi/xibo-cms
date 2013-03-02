<?php
/*
 * Xibo - Digitial Signage - http://www.xibo.org.uk
 * Copyright (C) 2006-2013 Daniel Garner
 *
 * This file is part of Xibo.
 *
 * Xibo is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version. 
 *
 * Xibo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Xibo.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Theme variables:
 * 	table_rows = Array containing the table rows
 */
defined('XIBO') or die("Sorry, you are not allowed to directly access this page.<br /> Please press the back button in your browser.");
?>
<div class="info_table">
	<table style="width:100%">
		<thead>
			<tr>
				<th><?php echo Theme::Translate('Last Accessed'); ?></th>
				<th><?php echo Theme::Translate('Active'); ?></th>
				<th><?php echo Theme::Translate('User Name'); ?></th>	
				<th><?php echo Theme::Translate('Last Page'); ?></th>	
				<th><?php echo Theme::Translate('IP Address'); ?></th>	
				<th><?php echo Theme::Translate('Browser'); ?></th>	
				<th><?php echo Theme::Translate('Action'); ?></th>	
			</tr>
		</thead>
		<tbody>
			<?php foreach(Theme::Get('table_rows') as $row) { ?>
			<tr>
				<td><?php echo $row['lastaccessed']; ?></td>
				<td><?php echo $row['isexpired']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['lastpage']; ?></td>
				<td><?php echo $row['ip']; ?></td>
				<td><?php echo $row['browser']; ?></td>
				<td>
					<?php foreach($row['buttons'] as $button) { ?>
					<button class="XiboFormButton" href="<?php echo $button['url']; ?>"><span><?php echo $button['text']; ?></span></button>
					<?php } ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>