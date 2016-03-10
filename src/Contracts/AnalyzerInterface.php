<?php

namespace SentimentAnalysis\Contracts;

interface AnalyzerInterface
{
    /**
     * Get tokenizer instance.
     *
     * @return \SentimentAnalysis\Contracts\TokenizerInterface
     */
    public function tokenizer();

    /**
     * Analyze document.
     *
     * @param  string $document
     * @return \SentimentAnalysis\Contracts\ResultInterface
     */
    public function analyze($document);
}