# Moneyfulness

This is a custom WordPress theme that makes use of Advanced Custom Fields (ACF) to create Gutenberg blocks.

## Dependencies

- Advanced Custom Fields (ACF)

## Webpack Configuration

Webpack is used in this theme to compile .scss to .css files and bundle JavaScript as well as create a development environment that allows for quick development.

To use Webpack follow these steps:

1. Install the NPM dependencies using yarn ( `yarn` ) or npm ( `npm install` )
2. In the `webpack.config.js` set the correct proxy adress and name (changing the name is optional). The proxy adress must be the same as the LocalWP adress of the current project. For example: `moonsioforwp.local`.
3. Run the development command ( `npm run dev` | `yarn run dev` ) or the production command ( `npm run prod` | `yarn run prod` )

**The development command**: creates a development server ( `localhost:3000` ) for quick development with hot reload on file change. It has built in source-maps for quickly finding the problem in .scss files and does not minify the `.css` and `.js` for quicker rebuild times.

**The production command**: compiles the `.scss` to a minified `.css` file and minifies the `.js` file. No source-map is created and no development server is created.
