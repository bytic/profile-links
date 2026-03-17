<?php

declare(strict_types=1);

/** @var \Nip\View\View $this */
$redirectUrl = $this->get('redirect_url') ?? '';
$redirectUrlEscaped = htmlspecialchars($redirectUrl, ENT_QUOTES, 'UTF-8');
$redirectUrlJson = json_encode($redirectUrl, JSON_HEX_TAG | JSON_HEX_AMP);

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="minimum-scale=1, initial-scale=1, width=device-width"/>
    <meta name="robots" content="noindex"/>
    <?php if (!empty($redirectUrl)): ?>
    <meta http-equiv="refresh" content="3;url=<?= $redirectUrlEscaped ?>"/>
    <?php endif; ?>
    <title>Redirecting...</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }

        .redirect-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            font-weight: bold;
            text-align: center;
            padding: 2.5rem 1.5rem;
        }
    </style>
</head>
<body>
<div class="redirect-container">
    <div>
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g>
                <animateTransform attributeName="transform" attributeType="XML" type="rotate"
                                  from="0 15 15" to="360 15 15" dur="700ms" repeatCount="indefinite"/>
                <circle cx="15" cy="15" r="12.5" stroke="currentColor" stroke-opacity="0.24"
                        stroke-width="5"/>
                <path d="M2.5 15C2.5 7.78715357142857 7.78715357142857 2.5 15 2.5"
                      stroke="currentColor" stroke-width="5" stroke-linecap="round"/>
            </g>
        </svg>
    </div>
    <p>You will be redirected to the external website in a few seconds &#x23F3;...</p>
</div>
<?php if (!empty($redirectUrl)): ?>
<script>
    setTimeout(function () {
        window.location.href = <?= $redirectUrlJson ?>;
    }, 3000);
</script>
<?php endif; ?>
</body>
</html>
