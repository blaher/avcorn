<?php

declare(strict_types=1);

namespace App\Application\Watcher;

/**
 * Class Watcher
 *
 * PHP version 8.1
 *
 * @package    App\Application\Watcher
 * @phpversion >= 8.1
 */
class Watcher implements WatcherInterface
{
    /**
     * Check for the latest modified file.
     *
     * @param string $dir Directory to check
     *
     * @return string
     */
    public function check(string $dir = '.'): ?string
    {
        if (!is_dir($dir)) {
            throw new \ValueError('Expecting a valid directory!');
        }

        $latest = null;
        $latestTime = 0;
        foreach (scandir($dir) as $path) {
            if (!in_array($path, ['.', '..', 'cache', 'tests'], true)) {
                $filename = $dir . DIRECTORY_SEPARATOR . $path;

                if (is_dir($filename)) {
                    $fileCheck = $this->check($filename);

                    if (null === $fileCheck) {
                        continue;
                    }

                    $filename = $fileCheck;
                }

                $lastModified = filemtime($filename);
                if ($lastModified > $latestTime) {
                    $latestTime = $lastModified;
                    $latest = $filename;
                }
            }
        }

        return $latest;
    }
}
