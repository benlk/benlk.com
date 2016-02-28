The CSS styles for `index.html` are in `css/`, but that's not where the actual *source* is. The CSS in `css/` is compiled from the LESS files in `less/` using [Grunt](http://gruntjs.com/).

Grunt loads its configuration and tasks from `Gruntfile.js`, using NodeJS packages in `package.json`. To get set up:

1. install [Node.js](https://nodejs.org/en/)
2. run `npm install`
3. run `grunt watch`
4. make some changes to files in `less/`
5. watch Grunt update the files in `css/`
6. refresh `index.html` in your browser
7. success.

Grunt will provide you with some helpful messages in your terminal.
