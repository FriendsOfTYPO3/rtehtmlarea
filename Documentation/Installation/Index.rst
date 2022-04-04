﻿.. include:: /Includes.rst.txt



.. _installation:

Installing the RTE
==================

The latest version can be installed via `TER`_ or via composer by running

.. code-block:: bash

   composer require friendsoftypo3/rtehtmlarea

in a TYPO3 v8 installation.

.. _TER: https://extensions.typo3.org/extension/rtehtmlarea

Installing the extension prior to TYPO3 v8
------------------------------------------

The extension is a system extension and is installed by default when
TYPO3 is installed.

Use the Extension Manager to un-install/re-install the extension.

The extension may be installed as a system, global or local extension.

If you plan to use the spell checking feature, you should install
extension Static Info Tables (static\_info\_tables). The spell checker
feature requires `GNU Aspell 0.60+ <http://aspell.net/>`_ to be
installed on the server.

Custom elements presented by the User Elements feature may be
maintained with extension `Custom Tags
<http://typo3.org/extensions/repository/search/de_custom_tags/>`_
(extension key: de\_custom\_tags).

Upon installation directory uploads/tx\_rtehtmlarea will be created.
Personal dictionaries are stored in subdirectories of this directory.
