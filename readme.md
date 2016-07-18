# Commander container integration

[![Build Status](https://img.shields.io/travis/weew/commander-container-aware.svg)](https://travis-ci.org/weew/commander-container-aware)
[![Code Quality](https://img.shields.io/scrutinizer/g/weew/commander-container-aware.svg)](https://scrutinizer-ci.com/g/weew/commander-container-aware)
[![Test Coverage](https://img.shields.io/coveralls/weew/commander-container-aware.svg)](https://coveralls.io/github/weew/commander-container-aware)
[![Version](https://img.shields.io/packagist/v/weew/commander-container-aware.svg)](https://packagist.org/packages/weew/commander-container-aware)
[![Licence](https://img.shields.io/packagist/l/weew/commander-container-aware.svg)](https://packagist.org/packages/weew/commander-container-aware)

## Table of contents

- [Installation](#installation)
- [Introduction](#introduction)
- [Usage](#usage)

## Installation

`composer require weew/commander-container-aware`

## Introduction

This package integrates [weew/commander](https://github.com/weew/commander) with [weew/container](https://github.com/weew/container) and allows command handlers to rely on dependency injection and sharing of data trough the container.

## Usage

Simply create a container aware instance of `ICommander` and pass in an instance of `IContainer`.

```php
$commander = new Weew\Commander\ContainerAware\Commander(new Container());
```
