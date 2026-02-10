<?php

declare(strict_types=1);

/**
 * Basic HTML escape helper.
 */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/**
 * Renders a page by composing header + content + footer.
 *
 * Expected options:
 * - title (string)
 * - currentPage (string)
 * - currentSubPage (string)
 * - header (string, filename inside /includes)
 * - footer (string, filename inside /includes)
 * - content (string, absolute path to a file inside /content)
 */
function render_page(array $opts): void
{
    $pageTitle = (string)($opts['title'] ?? '');
    $currentPage = (string)($opts['currentPage'] ?? '');
    $currentSubPage = (string)($opts['currentSubPage'] ?? '');

    $header = (string)($opts['header'] ?? 'header.php');
    $footer = (string)($opts['footer'] ?? 'footer.php');
    $content = $opts['content'] ?? null;

    $includesDir = __DIR__;
    $contentDir = dirname(__DIR__) . '/content';

    $headerPath = $includesDir . '/' . basename($header);
    $footerPath = $includesDir . '/' . basename($footer);

    if (!is_file($headerPath)) {
        http_response_code(500);
        echo 'Missing header include.';
        return;
    }
    if (!is_file($footerPath)) {
        http_response_code(500);
        echo 'Missing footer include.';
        return;
    }
    if (!is_string($content) || $content === '') {
        http_response_code(500);
        echo 'Missing content file.';
        return;
    }

    $realContent = realpath($content);
    $realContentDir = realpath($contentDir);
    if ($realContent === false || $realContentDir === false) {
        http_response_code(500);
        echo 'Content path resolution failed.';
        return;
    }

    // Ensure the content file is inside /content (prevents path traversal).
    $prefix = rtrim($realContentDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
    if (strpos($realContent, $prefix) !== 0) {
        http_response_code(500);
        echo 'Invalid content path.';
        return;
    }

    // Keep compatibility with existing headers that expect these variables.
    $GLOBALS['pageTitle'] = $pageTitle;
    $GLOBALS['currentPage'] = $currentPage;
    $GLOBALS['currentSubPage'] = $currentSubPage;

    include $headerPath;
    include $realContent;
    include $footerPath;
}
