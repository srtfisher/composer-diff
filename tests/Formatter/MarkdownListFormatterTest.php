<?php

namespace IonBazan\ComposerDiff\Tests\Formatter;

use IonBazan\ComposerDiff\Formatter\MarkdownListFormatter;
use Symfony\Component\Console\Output\OutputInterface;

class MarkdownListFormatterTest extends FormatterTest
{
    protected function getSampleOutput()
    {
        return <<<OUTPUT
Test
====

 - Install a/package-1 (1.0.0)
 - Update a/package-2 (1.0.0 => 1.2.0)
 - Remove a/package-3 (0.1.1)


OUTPUT;
    }

    /**
     * {@inheritdoc}
     */
    protected function getFormatter(OutputInterface $output)
    {
        return new MarkdownListFormatter($output);
    }
}