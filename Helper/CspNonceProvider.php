<?php

declare(strict_types=1);

namespace Magento\Csp\Helper;

use Magento\Framework\Math\Random;

class CspNonceProvider
{
    private const NONCE_LENGTH = 32;

    private string $nonce;

    private Random $random;

    public function __construct(
        Random $random,
    ) {
        $this->random = $random;
    }

    public function generateNonce(): string
    {
        if (empty($this->nonce)) {
            $this->nonce = $this->random->getRandomString(
                self::NONCE_LENGTH,
                Random::CHARS_DIGITS . Random::CHARS_LOWERS
            );
        }

        return base64_encode($this->nonce);
    }
}
