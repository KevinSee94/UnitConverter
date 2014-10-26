<?php
class block_unitConverter extends block_base {
	public funtion init(){
		$this->title = get_string('unitConverter', 'block_unitConverter');
	}
	public funtion get_content() {
		if ($this->content !== null) {
			return $this->content;
		}

		$this->content = new stdClass
		$this->content->text = 'The content of our SimpleHTML block!';
		$this->content->footer = 'Footer here...';

		return $this->content;
	}
}

