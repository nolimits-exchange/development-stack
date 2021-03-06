# NolimitsExchange\website

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg)](LICENSE)
[![Build Status](https://semaphoreci.com/api/v1/thepixeldeveloper/website/branches/master/shields_badge.svg)](https://semaphoreci.com/thepixeldeveloper/website)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nolimits-exchange/website/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nolimits-exchange/website/?branch=master)

A [nolimits coaster](http://www.nolimitscoaster.com/) community website.

![](http://i.imgur.com/hIf88dW.png)

Development environment powered by Docker.

Machine Setup
-----

### MacOS

Requirements:

- [Homebrew](http://brew.sh/)

1. Install Docker dependencies

    ```bash
    brew tap codekitchen/dinghy
    brew install dinghy docker docker-machine docker-machine-driver-xhyve
    ```

2. Create a virtual machine to run our containers on.

    ```bash
    dinghy create --provider xhyve
    ```

Running the website
-----

1. Change into the docker directory.

	``` bash
	cd resources/docker
	```

2. Enable xdebug support

    ``` bash
    source ./scripts/bootstrap-xdebug.sh
    ```

3. Bring up the development stack

    ``` bash
    docker-compose up -d
    ```

4. Install dependencies

   ``` bash
   ./bin/composer install
   ```

5. Load Fixtures

    ``` bash
    ./bin/fixtures
    ```

6. Start the worker

    ``` bash
    ./bin/worker
    ```

Visit http://nolimits.docker and

* http://mail.nolimits.docker for emails.
* http://db.nolimits.docker for database management.

Custom Images
-----

* **web**: https://github.com/nolimits-exchange/docker-web
* **node**: https://github.com/nolimits-exchange/docker-node
