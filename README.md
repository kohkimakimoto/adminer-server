# Adminer CLI

Command line interface to run adminer on the PHP built-in server.

## Installation

Use composer installation.

```
$ composer require --dev kohkimakimoto/adminer-cli
```

## Usage

```
$ php vendor/bin/adminer
```

Open URL `http://localhost:8080`.

## Options

```
Usage: adminer [-p port] [-H host] [-v adminer_version] [-t theme]

Command line interface to run adminer on the PHP built-in server

Options:
  -p    Listen port
  -H    Listen host
  -t    Specify the theme (flat|nette|lucas-sandery|...).
  -v    Specify the adminer version.

```


