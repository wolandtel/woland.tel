<?php
	class Content
	{
		
		public function __construct ($groups = false)
		{
			if ($groups === false)
				return;
			
			foreach ($groups as $group)
				$this->group($group);
		}
		
		private function group ($entries = false)
		{
			if ($enries === false)
				return;
?>
				<div class="group">
<?php
			foreach ($entries as $entry)
				$this->entry($entry[0], $entry[1], $entry[2]);
?>
				</div>
<?php
		}
		
		private function entry ($icon, $title, $content)
		{
			$icon = preg_replace('/^([^-]*)(-.*)$/', '\1 \1\2', $icon);
?>
					<div class="entry clearfix">
						<div>
							<span class="<?=$icon?>"></span>
							<?=$title?>
						</div>
						<div>
<?php
			if (is_array($content))
				echo "							<a href=\"${content[0]}\">${content[1]}</a>\n";
			else
				echo "							$content\n";
?>
						</div>
					</div>
<?php
		}
	}
