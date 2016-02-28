# A Custom Theme for Dropplets

This theme is a single-author fork of [Jason Schuller][]'s `simple` theme that is packaged with [Dropplets][], incorporating some code from [Simple Dark][] by [Chris Reynolds][].

## Docs:

- [Grunt is used to compile the CSS](docs/grunt.md)
- [Code attributions](LICENSES.md)

## Features:

- Intro uses a separately-styled <header> tag
- Optional buttons in the intro
- Square buttons
- No per-post author in posts list
- Formatting for `aside` posts (depends on benlk/dropplets/custom-posts)

### Custom post types

Post types are set in the header. Posts can have multiple post types. Currently supported are:

- `draft`
    - Hidden by Dropplets
- `published`
- `toc`
	- Depends on replacing `dropplets/includes/Markdown.php` with the classic version of PHP Markdown Extra from https://michelf.ca/projects/php-markdown/
	- Headlines within the post should use this markup: `# Headline { #id }` 
	- Only headlines up to `h3`/`###` will be included in the Table of Contents.
	- The TOC doesn't do nesting in the HTML, but it could be done in the CSS.
	- Creates a Table of Contents div at the top of the post
- `aside`
    - No thumbnail or decoration on post meta
    - No post headline on front page
    - No "Continue Reading" button on front page
    - No way to access the post itself at all
    - It's just one paragraph, or blockquote, or image on the front page

Post types are set by changing the post status, and can have multiple post types if your Dropplets supports it::

    # Post title 
    - Post author
    - Post author's twitter @
    - YYYY-MM-DD
    - category
    - draft published toc aside

### Intro buttons

Buttons that go in the intro. See `custom/intro-buttons.php`. Leave the file blank after `?>` for no buttons.

## Version History

- 1.4: Add Grunt, introduce compilation fron LESS. A collection of miscellanous updates.
- 1.3: Added Table of Contents functionality, more header partials, and improved CSS.
- 1.2: Updated for Dropplets 1.5 compatibility.
- 1.1: Added custom post functionality.
- 1.0: Initial modifications off of `Simple` and `Simple-Dark`.

## Attribution and Licenses

See [LICENSES.md](LICENSES.md).

[Dropplets]: http://dropplets.com/
[Jason Schuller]: http://jason.sc/
[Simple Dark]: https://gist.github.com/jazzsequence/5162736
[Chris Reynolds]: http://chrisreynolds.io/
[chrisreynolds.io/blog/]: http://chrisreynolds.io/blog/
[Circa75's Media's license]: https://github.com/circa75/dropplets#license
