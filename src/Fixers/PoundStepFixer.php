<?php declare(strict_types=1);

namespace Medology\GherkinCsFixer\Fixers;

/**
 * Fixer class for commented lines.
 */
class PoundStepFixer extends StepFixer
{
    protected $padding = 0;
    protected $keyword = '#';
}