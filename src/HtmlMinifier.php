<?php

namespace DonCadavona\HtmlMinifier;

class HtmlMinifier
{
    /**
     * Create a new HtmlMinifier Instance
     */
    public function __construct()
    {
        // constructor body
    }

    /**
     * Friendly welcome
     *
     * @param string $phrase Phrase to return
     *
     * @return string Returns the phrase passed in
     */
    public function echoPhrase($phrase)
    {
        return $phrase;
    }

    /**
     * Returns a minified version of the given HTML.
     * @param  string $html The original HTML.
     * @return string       The minified version of the given HTML.
     */
    public function minify($html)
    {
        /**
         * The set of regular expressions to match against
         * the given HTML and their respective replacements.
         * Reference: https://github.com/ogheo/yii2-htmlcompress
         * @var array
         */
        $filters = [
            // remove javascript comments
            '/(?:<script[^>]*>|\G(?!\A))(?:[^\'"\/<]+|"(?:[^\\"]+|\\.)*"|\'(?:[^\\\']+|\\.)*\'|\/(?!\/)|<(?!\/script))*+\K\/\/[^\n|<]*/xsu' => '',
            // remove html comments except IE conditions
            '/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/su' => '',
            // remove comments in the form /* */
            '/\/+?\s*\*[\s\S]*?\*\s*\/+/u' => '',
            // shorten multiple white spaces
            '/>\s{2,}</u' => '><',
            // shorten multiple white spaces
            '/\s{2,}/u' => ' ',
            // collapse new lines
            '/(\r?\n)/u' => '',
        ];

        return preg_replace(array_keys($filters), array_values($filters), $html);
    }
}
