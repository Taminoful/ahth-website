# AHTH Website

## Setup

### Prerequisites

#### Required
Required software depends on your development environment, install what you see fit.
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- [Git](https://git-scm.com/download) (Inc. basic knowledge)
- [PHP](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/download/)
- [NPM / NodeJS](https://nodejs.org/en/download/)
- [Symfony CLI](https://symfony.com/download)
- [KeepassXC](https://keepassxc.org/) + [Pageant & Plink](https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html) (Store and Auto-Unlock GPG Keys, SSH Keys, etc)
- [GPG Key](https://docs.github.com/en/authentication/managing-commit-signature-verification) for Signing Commits
- [PHPStorm](https://www.jetbrains.com/phpstorm/) (Or another IDE)
- Basic Knowledge of [Symfony](https://symfony.com/), [TailwindCSS](https://tailwindcss.com/), [ORMs](https://en.wikipedia.org/wiki/Object%E2%80%93relational_mapping) (like [Doctrine](https://www.doctrine-project.org/)) & Databases, Package Manager ([Composer](https://getcomposer.org/), [NPM](https://docs.npmjs.com/)), Software Patterns like [MVC](https://developer.mozilla.org/en-US/docs/Glossary/MVC), etc.

### Git

If not globally set, set your git username.
```bash
git config user.name "YOUR-NAME"
```

If not globally set, set your git email. (e.g. a "public" email for commits)
```bash
git config user.email "YOUR-EMAIL"
```

If not globally set the correct [gpg signing key](https://docs.github.com/en/authentication/managing-commit-signature-verification/telling-git-about-your-signing-key).
```bash
git config user.signingkey "YOUR-SIGNING-KEY"
```

Set git [to prompt you to sign your commits](https://docs.github.com/en/authentication/managing-commit-signature-verification/signing-commits) when you commit changes.
```bash
git config commit.gpgsign true
```
Links for more information about git
- **[How to sign your work](https://git-scm.com/book/en/v2/Git-Tools-Signing-Your-Work)**
- **[Git Flow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow)**

### Project Setup

#### Environment
Create a copy of the `.env` file in the project root and name it `.env.local`, this file contains your local changes for the environment variables used in the project.

#### Docker
Start the containers in detached mode & visit `https://localhost:8000/`
```bash
docker compose up -d
```

To stop the containers, use the following command:
```bash
docker compose down
```

#### Composer & NPM
In case you didn't use the docker containers you need to install the Composer dependencies
```bash
composer install
```

You'll need to install the NPM dependencies with
```bash
npm install
```

### Run Project
Either start up the project with docker or use the Symfony CLI, then run the npm `dev-server` command to have a rebuild of any changes to css or js instantly.
You can also start up the build-in webserver from Symfony AND use the Docker setup [as described here](https://symfony.com/doc/current/setup/symfony_server.html#symfony-server-docker).
```bash
symfony server:start -d
```
```bash
docker compose up -d
```
```bash
npm run dev-server
```

After starting up the services the project will be available at`https://localhost:8000/`.


