========================================
TYPO3 extension ``legacy_param_remover``
========================================

:Repository:  https://github.com/sbuerk/t3e-legacy-param-remover/
:Issues:      https://github.com/sbuerk/t3e-legacy-param-remover/issues/
:Read online: https://docs.typo3.org/p/sbuerk/t3e-legacy-param-remover/main/en-us/
:TER:         https://extensions.typo3.org/extension/legacy_param_remover/

Mission
-------

TYPO3 used a couple of query parameters in the frontend to determine which pages should be shown. Since TYPO3 v9
speaking url has been integrated directly into the TYPO3 CMS keeping the old **legacy parameters**.

Technically, the legacy parameters

* `id=<int>`: page id
* `L=<int>`: language id
* `type=<int>`: typeNum (pageType)

are not really required anymore for page resolving and rendering. Using these parameters intentionally is a behaviour
from old days not adopting newer techniques, which requires the core to still maintain and respect these parameters.

TYPO3 provides ways making the usage of them superfluous in projects and extensions. However, 3rd party services and
pages are able to make calls or created links which bots (like googlebot) are crawling and hijack sites by forcing to
deliver invalid content for a speaking url.

Security related issues have been addressed by the TYPO3 Security team already, leaving duplicate/wrong content issues
open.

This extension removes the legacy parameters hard from the request and therefore completely blocking any handling of
them by thy TYPO3 core or extensions. This mitigates any issues from these handlings until TYPO3 drops them.

..  caution::

    Using this extension removes the ability to actively use any legacy parameter. Don't use it if required by your
    instance or extension.

Compatibility
-------------

+----------------------+----------+--------------------------+-----------------------------+
| legacy_param_remover | TYPO3    | PHP                      | Support/Development         |
+======================+==========+==========================+=============================+
| dev-main             | 11, 12   | 7.4, 8.0, 8.1, 8.2, 8.3  | unstable development branch |
+----------------------+----------+--------------------------+-----------------------------+

Maintainer
----------

* Stefan Bürk: stefan@buerk.tech

TYPO3 `Build/Scripts/runTests.sh`
---------------------------------

This extension contains the well known `Build/Scripts/runTests.sh` docker/docker-compose based script wrapping script.

Provided commands/test-suits:

* `-s acceptance`: Execute acceptance tests (not implemented yet)
* `-s clean`: Clean unnecessary files and folders
* `-s cgl`: Ensure code-style guideline rules.
* `-s composerUpdate`: Run composer update
* `-s composerValidate`: Validate composer.json
* `-s functional`: Execute functional tests
* `-s lint`: Lint `*.php` files for syntax errors
* `-s phpstan`: Execute static code analyzer PHPStan
* `-s phpstanGenerateBaseline`: Generate baseline for PHPStan. Can be used to manage temporarily unsolvable reports.

