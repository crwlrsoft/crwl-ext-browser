# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.0] - 2024-02-17
### Changed
* Update `crwlr/crawler-ext-browser` to `1.0.0`

## [0.2.1] - 2024-02-07
### Fixed
* Move registering extension package and steps to `boot` method of `ServiceProvider` because when doing it in `register`, the singleton binding of the `ExtensionPackageManager` does (or may) not exist yet.

## [0.2.0] - 2024-02-07
### Changed
* Upgrade to support `crwlr/crwl-extension-utils` v2.0 and remove direct `illuminate/support` dependency.

## [0.1.0] - 2024-02-07
### Added (Changed, Fixed, Remove)
* Initial version with step builders for the `Screenshots` and `GetColors` steps from the `crwlr/crawler-ext-browser` package.
