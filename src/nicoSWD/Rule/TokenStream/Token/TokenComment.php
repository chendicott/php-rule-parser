<?php

declare(strict_types=1);

/**
 * @license     http://opensource.org/licenses/mit-license.php MIT
 * @link        https://github.com/nicoSWD
 * @author      Nicolas Oelgart <nico@oelgart.com>
 */
namespace nicoSWD\Rule\TokenStream\Token;

final class TokenComment extends BaseToken
{
    public function getType(): int
    {
        return TokenType::COMMENT;
    }

    public function isWhitespace(): bool
    {
        return true;
    }
}