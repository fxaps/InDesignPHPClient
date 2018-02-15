<?php


 function autoload_7026db833ef078ed9fd2d90dc0e43928($class)
{
    $classes = array(
        'InDesignClient\AIS\cc_2017\WSAPI\Service\Service' => __DIR__ .'/Service.php',
        'InDesignClient\AIS\cc_2017\WSAPI\Service\RunScript' => __DIR__ .'/RunScript.php',
        'InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptResponse' => __DIR__ .'/RunScriptResponse.php',
        'InDesignClient\AIS\cc_2017\WSAPI\Service\RunScriptParameters' => __DIR__ .'/RunScriptParameters.php',
        'InDesignClient\AIS\cc_2017\WSAPI\Service\IDSPScriptArg' => __DIR__ .'/IDSPScriptArg.php',
        'InDesignClient\AIS\cc_2017\WSAPI\Service\Data' => __DIR__ .'/Data.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_7026db833ef078ed9fd2d90dc0e43928');

// Do nothing. The rest is just leftovers from the code generation.
{
}
