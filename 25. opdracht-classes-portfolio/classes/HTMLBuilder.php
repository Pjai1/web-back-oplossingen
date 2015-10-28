<?php

	class HTMLBuilder
	{
		protected $header;
		protected $body;
		protected $footer;

		public function __construct($header,$body,$footer)
		{
			$this->header = $header;
			$this->body = $body;
			$this->footer = $footer;
		}

		public function buildHeader()
		{
			echo "<link rel='stylesheet' href='css/global.css'>";
			include "html/".$this->header;
		}

		public function buildBody()
		{
			include "html/".$this->body;
		}

		public function buildFooter()
		{
			echo "<script type='text/javascript' src='js/script.js'></script>";
			include "html/".$this->footer;
		}
	}

?>