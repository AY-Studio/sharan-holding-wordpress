<?php

declare(strict_types=1);

const QUOTE_RECIPIENT = 'info@sharantransport.com';
const QUOTE_FROM = 'SHARAN Website <no-reply@sharantransport.com>';

function redirectToForm(string $status): void
{
    header('Location: index.html?quote=' . rawurlencode($status) . '#contact', true, 303);
    exit;
}

function postValue(string $key): string
{
    $value = $_POST[$key] ?? '';

    return is_string($value) ? trim($value) : '';
}

function singleLine(string $value): string
{
    return trim(str_replace(["\r", "\n"], ' ', $value));
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    exit('Method not allowed');
}

// Bots commonly complete this hidden field; treat the request as successful
// without sending mail so the endpoint reveals nothing useful to the bot.
if (postValue('website') !== '') {
    redirectToForm('sent');
}

$firstName = singleLine(postValue('firstName'));
$lastName = singleLine(postValue('lastName'));
$email = singleLine(postValue('email'));
$phone = singleLine(postValue('phone'));
$topic = singleLine(postValue('topic'));
$inquiry = postValue('inquiry');
$terms = postValue('terms');

$allowedTopics = [
    'Airport transfer',
    'Corporate hire',
    'Private tour',
    'Event transport',
    'Other',
];

$isValid = $firstName !== ''
    && strlen($firstName) <= 80
    && $lastName !== ''
    && strlen($lastName) <= 80
    && filter_var($email, FILTER_VALIDATE_EMAIL) !== false
    && strlen($email) <= 254
    && strlen($phone) <= 50
    && in_array($topic, $allowedTopics, true)
    && $inquiry !== ''
    && strlen($inquiry) <= 5000
    && $terms === 'accepted';

if (!$isValid) {
    redirectToForm('invalid');
}

$customerName = $firstName . ' ' . $lastName;
$subject = 'New quote request: ' . $topic . ' - ' . $customerName;
$message = implode("\r\n", [
    'A new quote request was submitted through sharantransport.com.',
    '',
    'Name: ' . $customerName,
    'Email: ' . $email,
    'Phone: ' . ($phone !== '' ? $phone : 'Not provided'),
    'Topic: ' . $topic,
    '',
    'Inquiry:',
    $inquiry,
    '',
    'Terms accepted: Yes',
    'Submitted: ' . gmdate('Y-m-d H:i:s') . ' UTC',
]);

$headers = implode("\r\n", [
    'From: ' . QUOTE_FROM,
    'Reply-To: ' . $email,
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'Content-Transfer-Encoding: 8bit',
]);

$sent = mail(QUOTE_RECIPIENT, $subject, $message, $headers);

redirectToForm($sent ? 'sent' : 'error');
