# Commander container integration

[![Build Status](https://img.shields.io/travis/weew/php-commander-container-aware.svg)](https://travis-ci.org/weew/php-commander-container-aware)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/php-commander-container-aware.svg)](https://scrutinizer-ci.com/g/weew/php-commander-container-aware)
[![Test Coverage](https://img.shields.io/coveralls/weew/php-commander-container-aware.svg)](https://coveralls.io/github/weew/php-commander-container-aware)
[![Dependencies](https://img.shields.io/versioneye/d/php/weew:php-commander-container-aware.svg)](https://versioneye.com/php/weew:php-commander-container-aware)
[![Version](https://img.shields.io/packagist/v/weew/php-commander-container-aware.svg)](https://packagist.org/packages/weew/php-commander-container-aware)
[![Licence](https://img.shields.io/packagist/l/weew/php-commander-container-aware.svg)](https://packagist.org/packages/weew/php-commander-container-aware)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Usage](#usage)

## Installation

`composer require weew/php-commander-container-aware`

## Introduction

This package integrates [weew/php-commander](https://github.com/weew/php-commander) with [weew/php-container](https://github.com/weew/php-container) and allows command handlers to rely on dependency injection and sharing of data trough the container.

## Usage

Simply create a container aware instance of `ICommander` and pass in an instance of `IContainer`.

```php
$commander = new Weew\Commander\ContainerAware\Commander(new Container());
```
