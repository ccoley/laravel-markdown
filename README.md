# Markdown for Laravel 5

A [Parsedown][1] wrapper for Laravel to compile markdown to HTML.

Parsedown is fast and supports [GitHub flavored markdown][2].

## Installation

Require this package with composer using the following command:

```
composer require ccoley/laravel-markdown
```

After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
Coley\Markdown\MarkdownServiceProvider::class,
```

If you want to use the `Markdown` facade, you need to add it to the `aliases` array in `config/app.php`

```php
'Markdown' => Coley\Markdown\MarkdownFacade::class
```

## Example

```php
// Regular parsing.
// Output: <p>Hello <em>Markdown</em>!</p>
echo Markdown::text('Hello _Markdown_!');

// Parse only inline elements.
// Output: Hello <em>Markdown</em>!
echo Markdown::line('Hello _Markdown_!');
```

For more examples, or to see Parsedown configuration options, checkout the [Parsedown wiki][3].

[1]: http://parsedown.org/
[2]: https://help.github.com/articles/github-flavored-markdown/
[3]: https://github.com/erusev/parsedown/wiki
