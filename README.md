# ddev-typo3-vite-svelte

## Local setup (first time)

User: `admin`
Password: `VwM308w5Xsuxa4C

## How was this created?

Followed steps of [DDEV typo3 quickstart docs](https://ddev.readthedocs.io/en/latest/users/quickstart/#typo3), but used v11:

```bash
ddev config --project-type=typo3 --docroot=public --create-docroot --php-version 8.1 && \
	ddev start && \
	ddev composer create "typo3/cms-base-distribution:^11" --prefer-dist && \
	ddev exec touch public/FIRST_INSTALL && \
	ddev launch

# Finish installation in browser with database:'db',db-user:'db',host:'db'
# Selected "Create empty starting page ""
```

- Created sitepackage via https://www.sitepackagebuilder.com/ (fluid + 11.5)
- Copy package to new folder `packages`
- Installed package via composer
    - docs: https://docs.typo3.org/m/typo3/tutorial-sitepackage/main/en-us/ExtensionInstallation/Index.html#extension-installation-in-composer-mode
    - `ddev composer require no-company/svelte-demo:@dev`


NodeJS Installation:

```bash
ddev npm init -y
ddev npm install vite @sveltejs/vite-plugin-svelte --save-dev
```

- Added scripts section to package.json

- Created `vite.config.js`

ddev-viteserve installation:

```bash
ddev get torenware/ddev-viteserve
ddev restart


Created `.ddev/env` for npm:

```bash


```


- Used typoscript snippets for loading vite from https://github.com/fgeierst/typo3-vite-demo