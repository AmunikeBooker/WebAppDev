<?php
/**
 * ------------------------------------------------------------------------
 * JUDownload for Joomla 3.x
 * ------------------------------------------------------------------------
 *
 * @copyright      Copyright (C) 2010-2016 JoomUltra Co., Ltd. All Rights Reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 * @author         JoomUltra Co., Ltd
 * @website        http://www.joomultra.com
 * @----------------------------------------------------------------------@
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

if ($menuItems)
{
	?>
	<ul id="menu" class="nav<?php echo($hideMainmenu ? ' disabled' : ''); ?>">
		<li class="dropdown<?php echo($hideMainmenu ? ' disabled' : ''); ?>">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<?php echo $menuItems->text; ?>
				<span class="caret"></span>
			</a>

			<?php
			if (!$hideMainmenu && count($menuItems->submenu) > 0)
			{ ?>
				<ul class="dropdown-menu">
					<?php foreach ($menuItems->submenu as $sub)
					{
						$hasChild = ($sub->submenu ? true : false);
						?>
						<li<?php echo($hasChild ? ' class="dropdown-submenu"' : ''); ?>>
							<a href="<?php echo $sub->link; ?>" <?php echo($hasChild ? ' class="dropdown-toggle" data-toggle="dropdown"' : ''); ?>><?php echo $sub->text; ?></a>
							<?php
							if ($hasChild)
							{ ?>
								<ul class="dropdown-menu mod-judownload-menu">
									<?php
									foreach ($sub->submenu as $key => $item)
									{ ?>
										<li>
											<a href="<?php echo $item->link; ?>"><?php echo $item->text; ?></a>
										</li>
									<?php
									} ?>
								</ul>
							<?php
							} ?>
						</li>
					<?php
					} ?>
				</ul>
			<?php
			} ?>
		</li>
	</ul>
	<?php
} ?>