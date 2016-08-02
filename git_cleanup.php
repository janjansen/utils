<?php
$output = explode("\n", shell_exec('git branch'));
foreach ($output as $branch) {
    if (
        strpos($branch, 'feature') !== false
        || strpos($branch, 'bugfix') !== false
    ) {
        $cmd = "git branch -D$branch";
        exec($cmd);
        echo $cmd.PHP_EOL;
    }
}