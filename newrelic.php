<?php

declare(strict_types=1);

use newrelic\DistributedTracePayload;

if (!\extension_loaded('newrelic')) {
    /**
     * Accepts a distributed trace payload.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelicacceptdistributedtracepayload-php-agent-api
     *
     * @param string $payload
     */
    function newrelic_accept_distributed_trace_payload(string $payload): void
    {
    }

    /**
     * Accepts a distributed trace payload that includes an HTTPSafe (Base64 encoded) JSON string.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelicacceptdistributedtracepayloadhttpsafe-php-agent-api
     *
     * @param string $payload
     * @param string $transport
     */
    function newrelic_accept_distributed_trace_payload_httpsafe(string $payload, string $transport = 'HTTP'): void
    {
    }

    /**
     * Attaches a custom attribute (key/value pair) to the current transaction.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_add_custom_parameter
     *
     * @param string $key
     * @param scalar $value
     *
     * @return bool
     */
    function newrelic_add_custom_parameter(string $key, $value): bool
    {
        return true;
    }

    /**
     * Specify functions or methods for the agent to instrument with custom instrumentation.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_add_custom_tracer
     *
     * @param string $callable
     *
     * @return bool
     */
    function newrelic_add_custom_tracer(string $callable): bool
    {
        return true;
    }

    /**
     * Manually specify that a transaction is a background job or a web transaction.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_background_job
     *
     * @param bool $flag
     */
    function newrelic_background_job(bool $flag = true): void
    {
    }

    /**
     * Enable or disable the capture of URL parameters.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_capture_params
     *
     * @param bool $enable
     */
    function newrelic_capture_params(bool $enable = true): void
    {
    }

    /**
     * Creates a distributed trace payload.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newreliccreatedistributedtracepayload-php-agent-api
     *
     * @return DistributedTracePayload
     */
    function newrelic_create_distributed_trace_payload(): DistributedTracePayload
    {
        return new DistributedTracePayload();
    }

    /**
     * Add a custom metric (in milliseconds) to time a component of your app not captured by default.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newreliccustommetric-php-agent-api
     *
     * @param string $metric
     * @param float  $value
     *
     * @return bool
     */
    function newrelic_custom_metric(string $metric, float $value): bool
    {
        return true;
    }

    /**
     * Disable automatic injection of the New Relic Browser snippet on particular pages.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_disable_autorum
     *
     * @return null|bool
     */
    function newrelic_disable_autorum(): ?bool
    {
        return true;
    }

    /**
     * Stop timing the current transaction, but continue instrumenting it.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_end_of_transaction
     */
    function newrelic_end_of_transaction(): void
    {
    }

    /**
     * Stop instrumenting the current transaction immediately.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_end_transaction
     *
     * @param bool $ignore
     *
     * @return bool
     */
    function newrelic_end_transaction(bool $ignore = true): bool
    {
        return true;
    }

    /**
     * Returns a New Relic Browser snippet to inject at the end of the HTML output.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_get_browser_timing_footer
     *
     * @param bool $tags
     *
     * @return string
     */
    function newrelic_get_browser_timing_footer(bool $tags = true): string
    {
        return '';
    }

    /**
     * Returns a New Relic Browser snippet to inject in the head of your HTML output.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_get_browser_timing_header
     *
     * @param bool $tags
     *
     * @return string
     */
    function newrelic_get_browser_timing_header(bool $tags = true): string
    {
        return '';
    }

    /**
     * Ignore the current transaction when calculating Apdex.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_ignore_apdex
     */
    function newrelic_ignore_apdex(): void
    {
    }

    /**
     * Do not instrument the current transaction.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_ignore_transaction
     */
    function newrelic_ignore_transaction(): void
    {
    }

    /**
     * Set custom name for current transaction.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_name_transaction
     *
     * @param string $name
     *
     * @return bool
     */
    function newrelic_name_transaction(string $name): bool
    {
        return true;
    }

    /**
     * Use these calls to collect errors that the PHP agent does not collect automatically
     * and to set the callback for your own error and exception handler.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_notice_error
     *
     * @param int|string|Throwable  $me
     * @param null|string|Throwable $em
     * @param null|string           $file
     * @param null|int              $line
     * @param null|string           $context
     */
    function newrelic_notice_error($me, $em = null, ?string $file = null, ?int $line = null, ?string $context = null)
    {
        return null;
    }

    /**
     * Record a custom event with the given name and attributes.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_record_custom_event
     *
     * @param string $name
     * @param array  $attributes
     */
    function newrelic_record_custom_event(string $name, array $attributes): void
    {
    }

    /**
     * Records a datastore segment.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_record_datastore_segment
     *
     * @param callable $callable
     * @param array    $parameters
     *
     * @return mixed
     */
    function newrelic_record_datastore_segment(callable $callable, array $parameters)
    {
        return $callable();
    }

    /**
     * Sets the New Relic app name, which controls data rollup.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_set_appname
     *
     * @param string $name
     * @param string $license
     * @param bool   $xmit
     *
     * @return bool
     */
    function newrelic_set_appname(string $name, string $license = '', bool $xmit = false): bool
    {
        return true;
    }

    /**
     * Create user-related custom attributes. newrelic_add_custom_parameter is more flexible.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_set_user_attributes
     *
     * @param string $user
     * @param string $account
     * @param string $product
     *
     * @return bool
     */
    function newrelic_set_user_attributes(string $user, string $account, string $product): bool
    {
        return true;
    }

    /**
     * Starts a new transaction, usually after manually ending a transaction.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_start_transaction
     *
     * @param string $appname
     * @param string $license
     *
     * @return bool
     */
    function newrelic_start_transaction(string $appname, string $license = null): bool
    {
        return true;
    }
}
