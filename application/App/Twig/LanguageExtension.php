<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class LanguageExtension extends AbstractExtension
{
    /**
     * @var array
     */
    private $translations = [];

    public function __construct(string $languageDir)
    {
        $this->loadJsonTranslations($languageDir . '/ro.json');
        $this->loadPhpTranslations($languageDir);
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('lang', [$this, 'translate']),
        ];
    }

    public function translate(string $key, array $parameters = []): string
    {
        $translation = $this->translations[$key] ?? $key;

        return $this->replaceParameters($translation, $parameters);
    }

    private function replaceParameters(string $translation, array $parameters): string
    {
        foreach ($parameters as $key => $value) {
            $translation = str_replace(":".$key, $value, $translation);
        }

        return $translation;
    }

    private function loadJsonTranslations(string $jsonFile): void
    {
        $this->translations = array_merge($this->translations, json_decode(file_get_contents($jsonFile), true));
    }

    private function loadPhpTranslations(string $languageDir): void
    {
        $phpFiles = glob($languageDir . '/*.php');
        foreach ($phpFiles as $file) {
            $this->translations = array_merge($this->translations, require $file);
        }
    }
}