<?php

declare(strict_types=1);

namespace Aslam\GrokAiProvider\Models;

use WordPress\AiClient\Providers\Http\DTO\Request;
use WordPress\AiClient\Providers\Http\Enums\HttpMethodEnum;
use WordPress\AiClient\Providers\OpenAiCompatibleImplementation\AbstractOpenAiCompatibleImageGenerationModel;
use Aslam\GrokAiProvider\Provider\GrokProvider;

/**
 * Class for image generation models used by Third-Party Provider for Grok.
 *
 * @since 1.1.0
 */
class GrokImageGenerationModel extends AbstractOpenAiCompatibleImageGenerationModel
{
    /**
     * {@inheritDoc}
     *
     * @since 1.1.0
     */
    protected function createRequest(
        HttpMethodEnum $method,
        string $path,
        array $headers = [],
        $data = null
    ): Request {
        return new Request(
            $method,
            GrokProvider::url($path),
            $headers,
            $data,
            $this->getRequestOptions()
        );
    }

    /**
     * {@inheritDoc}
     *
     * @since 1.1.0
     */
    protected function getResultId(array $responseData): string
    {
        // The xAI Images API returns `created` timestamp instead of `id`.
        return isset($responseData['created']) && is_int($responseData['created'])
            ? 'img-' . $responseData['created']
            : '';
    }
}
