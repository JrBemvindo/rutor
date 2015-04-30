<?php

@define('USE_UNZIP', true, true);
@define('USE_UNRAR', true, true);

$pathToExternals['unzip'] = '';		// Something like /usr/bin/unzip. If empty, will be found in PATH.
$pathToExternals['unrar'] = '';		// Something like /usr/bin/unrar. If empty, will be found in PATH.

$cleanupAutoTasks = false;		// Remove autounpack tasks parameters after finish, otherwise will be shown in the 'Tasks' tab
$deleteAutoArchives = false;	// Delete archive files after successful auto unpack. Will not remove archives unless AutoMove is enabled and the operation type is not Move.

$unpack_debug_enabled = false;		// set "true" to enable debug output
