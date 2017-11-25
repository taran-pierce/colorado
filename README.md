# Colorado 
Just wanted a way to be able to show off some photos of places we have been here in Colorado since moving here.

## Setup
First thing you will need to do is install all of the dependencies to get your project started. Everything is saved to the package.json so a `npm install` will get everything you need installed properly.

You also need to cd into `/app` and do a `npm install` there to get the final dependencies.

## Directory structure should look as follows:
This of course can be modified, but the gulpfile.js will need to be updated as well if you do so that all assets get placed in the location you are expecting.

```
  /colorado
  |-package.json
  |
  |-app
  |  |-package.json
  |  |-scss
  |  |-js
  |  |-css
  |  |-images
  |  |  |
  |  |  |-parks/
  |  |  
  |  |-fonts
  |  |-parks/
  |  |-templates/
  |
  |-dist
  |  |-css
  |  |-js
  |  |-fonts
  |  |-images
```

## Gulp Commands
1. Run `gulp` to compile everything and start up browersync
2. Run `gulp deploy` to build the production ready assets

## NPM tasks
1. Run `npm run dev` to get the project running in dev mode with browserSync
2. Run `npm run prod` to build all the assets for production
