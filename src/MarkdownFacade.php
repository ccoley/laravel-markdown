<?php

namespace Coley\Markdown;

use Illuminate\Support\Facades\Facade;

class MarkdownFacade extends Facade {

	protected static function getFacadeAccessor() {
		return 'coley.markdown';
	}

} 