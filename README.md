# A Custom Theme for Dropplets

This theme is a single-author fork of [Jason Schuller][]'s `simple` theme that is packaged with [Dropplets][], incorporating some code from [Simple Dark][] by [Chris Reynolds][].

## Features:

* Square post thumbnails
* Intro uses a separately-styled <header> tag
* Optional buttons in the intro
* Square buttons
* No per-post author in posts list
* Formatting for `aside` posts (depends on benlk/dropplets/custom-posts)

### Custom post types

Post types are set in the header. Posts can have multiple post types. Currently supported are:

* `draft`
    * Hidden by Dropplets
* `published`
    * Square post thumbnail
    * Supports all markdown that Dropplets supports
* `toc`
	- Depends on replacing `dropplets/includes/Markdown.php` with the classic version of PHP Markdown Extra from https://michelf.ca/projects/php-markdown/
	- Headlines within the post should use this markup: `# Headline { #id }` 
	- Only headlines up to `h3`/`###` will be included in the Table of Contents.
	- The TOC doesn't do nesting in the HTML, but it could be done in the CSS.
	- Creates a Table of Contents div at the top of the post
* `aside`
    * No thumbnail or decoration on post meta
    * No post headline on front page
    * No "Continue Reading" button on front page
    * No way to access the post itself at all
    * It's just one paragraph, or blockquote, or image on the front page
    
Post types are set by changing the post status:

    # Post title 
    - Post author
    - Post author's twitter @
    - YYYY-MM-DD
    - category
    - draft/published/feature/aside
    
### Intro buttons 

Buttons that go in the intro. See `custom/intro-buttons.php`. Leave the file blank after `?>` for no buttons. 

## Version History

1.3: Added Table of Contents functionality, more header partials, and improved CSS.
1.2: Updated for Dropplets 1.5 compatibility.
1.1: Added custom post functionality.
1.0: Initial modifications off of `Simple` and `Simple-Dark`.

## Attribution and Licenses

Efforts have been made to attribute code where possible. 

`post.php` incorporates a modified version of [Alex Freeman's AutoTOC function](http://www.10stripe.com/articles/automatically-generate-table-of-contents-php.php), which was released under CC-BY-SA 3.0. You are welcome to modify this function under the terms of the [Creative Commons Attribution Share Alike 3.0 license](https://creativecommons.org/licenses/by-sa/3.0/)

`/custom/custom.css` is the modified stylesheet, including some formatting taken from [Simple Dark][]

`/style.css` is a carefully-kneecapped version of the original file distributed with Dropplets, and is copyright Circa75 Media, LLC. It is included here for ease of use. [Circa75's Media's license][] on the `simple` theme is as follows:

> Copyright (c) 2013 Circa75 Media, LLC

> Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.



[Dropplets]: http://dropplets.com/
[Jason Schuller]: http://jason.sc/
[Simple Dark]: https://gist.github.com/jazzsequence/5162736
[Chris Reynolds]: http://chrisreynolds.io/
[chrisreynolds.io/blog/]: http://chrisreynolds.io/blog/
[Circa75's Media's license]: https://github.com/circa75/dropplets#license
