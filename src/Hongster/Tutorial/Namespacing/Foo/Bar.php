<?php namespace Hongster\Tutorial\Namespacing\Foo;

class Bar {
	public function __toString() {
		return get_class($this);
	}
}