# dPlugins admin styles

Library is used to store the styles of the admin part of plugins

## System requirements

* NodeJS 12 or newest [download](https://nodejs.org/en/)

## Preparing

Because we use private npm registry you will need to set an environment variable named `DPLUGINS_NPM_TOKEN` with the value of a [personal access token](https://github.com/settings/tokens) (name: `npm`, scopes: `packages`), in order to install private packages with the `@dplugins` scope (if you haven't yet done so).

Use `npm install` command to install the packages

## Development (WP plugin)

Use `npm run build` for build library or `npm run start` for build with `watch` function

If you want use this like WP plugin you need clone this project to your `wp-content/plugins` folder

## Development (npm library)

If you want use this like library for another plugins you can run `npm run build:npm-relase` from root folder and `npm link` from `dist-npm-release` folder and run `npm link @dplugins/admin-styles` command from project with `@dplugins/admin-styles` dependencie.

## Publishing a new version

1. Run `npm version patch` (replace `patch` [as necessary](https://docs.npmjs.com/cli/version)) to increase the version number.
   Examples:
   * `npm version patch` -> `1.2.3 => 1.2.4`
   * `npm version minor` -> `1.2.3 => 1.3.0`
   * `npm version major` -> `1.2.3 => 2.0.0`
   * `npm version premajor --preid alpha` -> `1.2.3 => 2.0.0-alpha.0`
   * `npm version prerelease --preid beta` -> `2.0.0-alpha.0 => 2.0.0-beta.0`
   * increment prerelease `npm version prerelease` -> `2.0.0-beta.0 => 2.0.0-beta.1`
2. Run `git push && git push --tags` to push the version commit and tag.
3. Run `npm run publish` to publish the new version (as library).
4. Run `npm build:release` for generate zip file in `releases` folder

