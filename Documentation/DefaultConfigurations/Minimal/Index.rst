﻿.. include:: /Includes.rst.txt



.. _minimal-configuration:

Minimal default configuration
-----------------------------

This default configuration establishes default settings in Page TSconfig and User TSconfig with minimal features. This is for advanced administrators with good knowledge of RTE configuration in Page TSconfig.


.. _minimal-page-tsconfig:

The following is inserted in Page TSconfig:
"""""""""""""""""""""""""""""""""""""""""""

Default RTE configuration

::

   RTE.default {

Toolbar options applicable to all RTE's

The TCA configuration may add buttons to the toolbar

::

      showButtons =  bold,italic,undo,redo,about
   }

front end RTE configuration for the general public

::

   RTE.default.FE < RTE.default


