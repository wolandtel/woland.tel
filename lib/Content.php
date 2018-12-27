<?php
	class Content
	{
		private $contents = [];
		public function __construct ($groups = false)
		{
			if (($groups === false) || ($groups === []))
				return;
			
			foreach ($groups as $group)
				$this->group($group);
			
			if (count($this->contents))
			{
?>
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation"><a href="#"><span class="fa fa-angle-double-up"></span> Top</a></li>
<?php
				foreach ($this->contents as $index => $title):
?>
					<li role="presentation"><a href="#group<?=$index?>"><?=$title?></a></li>
<?php
				endforeach;
?>
				</ul>
<?php
			}
			
		}
		
		private function group ($entries = false)
		{
			if (($entries === false) || ($entries === []))
				return;
			
			if (is_string($entries[0]))
			{
				$title = array_shift($entries);
				$this->contents[] = $title;
?>
				<h4 id="group<?=count($this->contents) - 1?>"><?=$title?></h4>
<?php
			}
?>
				<div class="group">
<?php
			foreach ($entries as $entry)
			{
				if (($entry === false) || ($entry === []))
					continue;
				
				$this->entry($entry[0], $entry[1], $entry[2]);
			}
?>
				</div>
<?php
		}
		
		private function entry ($icon, $title, $content)
		{
			if (!preg_match('/^fa. /', $icon))
				$icon = preg_replace('/^([^-]*)(-.*)$/', '\1 \1\2', $icon);
			$t = mb_substr($title, 0, 1);
			$title = mb_substr($title, 1);
?>
					<div class="entry clearfix">
						<div>
							<span class="entry-title">
								<span class="text-nowrap"><span class="<?=$icon?>"></span> <?=$t?></span><?=$title?>
							</span>
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
