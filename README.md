# ddev-typo3-vite-svelte

Svelte meets typo3 + vite in DDEV. 🧡 Fork of [fgeierst/typo3-vite-demo](https://github.com/fgeierst/typo3-vite-demo). 

- 
- 
- 

Status: Work in Progesss.

Thanks very much to [@bokunomaxi](https://github.com/bokunomaxi) for typo3 support!

## Local setup (first time)

These are the steps needed after you clone this repository:

```bash
ddev start && \
    ddev composer install && \
    ddev restore --latest && \
    ddev cp .env.example .env && \
    ddev launch
```

You can access typo3 via https://ddev-typo3-vite-svelte.ddev.site/typo3 

User: `admin`
Password: `VwM308w5Xsuxa4C`

## Local development (vite)

To start local development with vite, run:

```bash
ddev npm run dev 
```

(You can also use `ddev vite-server start` / `ddev vite-serve stop`). 

## Simulate live (production) site locally

Run a vite build for production:

```bash
ddev npm run build
```

Switch applicationContext to production in `.env`:

```bash
# Switch easily between Development/Local and Production/Live
# TYPO3_CONTEXT="Development/Local"
TYPO3_CONTEXT="Production/Live"
```

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

Custom site package:

- Created sitepackage via https://www.sitepackagebuilder.com/ (fluid + 11.5)
- Copy package to new folder `packages`
- Installed package via composer
    - docs: https://docs.typo3.org/m/typo3/tutorial-sitepackage/main/en-us/ExtensionInstallation/Index.html#extension-installation-in-composer-mode
    - `ddev composer require no-company/svelte-demo:@dev`

Add svelte-demo to the static includes:

![Screenshot edit whole template record, tab includes, add svelte-demo](.gh-screenshots/screenshot_include_static.png?raw=true)

NodeJS Installation:

```bash
ddev npm init -y
ddev npm install vite @sveltejs/vite-plugin-svelte --save-dev
```

- Added scripts section to package.json:

```json
  "scripts": {
    "dev": "vite",
    "build": "vite build",
    "preview": "vite preview"
  },
```

- Created `vite.config.js`

ddev-viteserve installation:

```bash
ddev get torenware/ddev-viteserve
ddev restart
```

Created `.ddev/env` for npm:

```bash
# start vite
VITE_PROJECT_DIR=.
VITE_PRIMARY_PORT=5173
VITE_SECONDARY_PORT=5273
VITE_JS_PACKAGE_MGR=npm
# end vite
```

- Used typoscript snippets and user function for loading vite from https://github.com/fgeierst/typo3-vite-demo

Use dotenv-connector for fast switch between `Production/Live` and `Development/Local`:

- `ddev composer req helhum/dotenv-connector`

Thanks to https://blog.blue-side.de/2021/02/benutzung-von-env-in-typo3/. 