<?php
	class Tools {
		static public function res ($path) {
			return $path . '?' . stat($path)['mtime'];
		}
		
		static public function css ($path) {
			echo '<link rel="stylesheet" type="text/css" href="' . self::res($path) . '" />' . "\n";
		}
		
		static public function js ($path) {
			echo '<script src="' . self::res($path) . '"></script>' . "\n";
		}
		
		static public function imageGeometry ($path) {
			if (file_exists($path))
				return (new \Imagick($path))->getImageGeometry();
			else
				return ['width' => 0, 'height' => 0];
		}
	}
