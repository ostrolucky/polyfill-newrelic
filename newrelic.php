<?php

declare(strict_types=1);

use newrelic\DistributedTracePayload;

if (!\extension_loaded('newrelic')) {
    /**
     * Attaches a custom attribute (key/value pair) to the current span.
     *
     * @see https://docs.newrelic.com/docs/apm/agents/php-agent/php-agent-api/newrelicaddcustomspanparameter-php-agent-api/
     */
    function newrelic_add_custom_span_parameter(string $key, int|float|string $value): bool
    {
        return true;
    }

    /**
     * Accepts a distributed trace payload.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelicacceptdistributedtracepayload-php-agent-api
     */
    function newrelic_accept_distributed_trace_payload(string $payload): void {}

    /**
     * Accepts a distributed trace payload that includes an HTTPSafe (Base64 encoded) JSON string.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelicacceptdistributedtracepayloadhttpsafe-php-agent-api
     */
    function newrelic_accept_distributed_trace_payload_httpsafe(string $payload, string $transport = 'HTTP'): void {}

    /**
     * Attaches a custom attribute (key/value pair) to the current transaction.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_add_custom_parameter
     */
    function newrelic_add_custom_parameter(string $key, $value): bool
    {
        return true;
    }

    /**
     * Specify functions or methods for the agent to instrument with custom instrumentation.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_add_custom_tracer
     */
    function newrelic_add_custom_tracer(string $function_name): bool
    {
        return true;
    }

    /**
     * Manually specify that a transaction is a background job or a web transaction.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_background_job
     */
    function newrelic_background_job(bool $flag = true): void {}

    /**
     * Enable or disable the capture of URL parameters.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_capture_params
     */
    function newrelic_capture_params(bool $enable = true): void {}

    /**
     * Creates a distributed trace payload.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newreliccreatedistributedtracepayload-php-agent-api
     */
    function newrelic_create_distributed_trace_payload(): DistributedTracePayload
    {
        return new DistributedTracePayload();
    }

    /**
     * Add a custom metric (in milliseconds) to time a component of your app not captured by default.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newreliccustommetric-php-agent-api
     */
    function newrelic_custom_metric(string $metric, float $value): bool
    {
        return true;
    }

    /**
     * Disable automatic injection of the New Relic Browser snippet on particular pages.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_disable_autorum
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
    function newrelic_end_of_transaction(): void {}

    /**
     * Stop instrumenting the current transaction immediately.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_end_transaction
     */
    function newrelic_end_transaction(bool $ignore = true): bool
    {
        return true;
    }

    /**
     * Returns a New Relic Browser snippet to inject at the end of the HTML output.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_get_browser_timing_footer
     */
    function newrelic_get_browser_timing_footer(bool $tags = true): string
    {
        return '';
    }

    /**
     * Returns a New Relic Browser snippet to inject in the head of your HTML output.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_get_browser_timing_header
     */
    function newrelic_get_browser_timing_header(bool $tags = true): string
    {
        return '';
    }

    /**
     * Returns a collection of metadata necessary for linking data to a trace or an entity.
     *
     * @see https://docs.newrelic.com/docs/apm/agents/php-agent/php-agent-api/newrelicgetlinkingmetadata/
     * @return array{
     *     "entity.name"?: string,
     *     "entity.type"?: string,
     *     "entity.guid"?: string,
     *     hostname?: string,
     * }
     */
    function newrelic_get_linking_metadata(): array
    {
        return [];
    }

    /**
     * Returns an associative array containing the identifiers of the current trace and the parent span.
     *
     * @see https://docs.newrelic.com/docs/apm/agents/php-agent/php-agent-api/newrelicgettracemetadata/
     * @return array{trace_id?: string, span_id?: string}
     */
    function newrelic_get_trace_metadata(): array
    {
        return [];
    }

    /**
     * Ignore the current transaction when calculating Apdex.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_ignore_apdex
     */
    function newrelic_ignore_apdex(): void {}

    /**
     * Do not instrument the current transaction.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_ignore_transaction
     */
    function newrelic_ignore_transaction(): void {}

    /**
     * Returns a value indicating whether or not the current transaction is marked as sampled.
     *
     * @see https://docs.newrelic.com/docs/apm/agents/php-agent/php-agent-api/newrelicissampled/
     */
    function newrelic_is_sampled(): bool
    {
        return false;
    }

    /**
     * Set custom name for current transaction.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_name_transaction
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
     */
    function newrelic_notice_error(
        int|string|Throwable $me,
        string|Throwable $em = null,
        ?string $file = null,
        ?int $line = null,
        ?string $context = null,
    ) {
        return null;
    }

    /**
     * Record a custom event with the given name and attributes.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_record_custom_event
     *
     * @param array<string, scalar>  $attributes
     */
    function newrelic_record_custom_event(string $name, array $attributes): void {}

    /**
     * Records a datastore segment.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_record_datastore_segment
     *
     * @template T
     * @param callable(): T $callable
     * @param array{
     *     product: string,
     *     collection?: string,
     *     operation?: string,
     *     host?: string,
     *     portPathOrId?: string,
     *     databaseName?: string,
     *     query?: string,
     *     inputQueryLabel?: string,
     *     inputQuery?: string,
     * } $parameters
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
     */
    function newrelic_set_appname(string $name, string $license = '', bool $xmit = false): bool
    {
        return true;
    }

    /**
     * @param callable(array{request_uri: string, path: string, method: string, status_code: int}, array{klass: string, message: string, file: string, stack: string}): string $callback
     */
    function newrelic_set_error_group_callback(callable $callback): bool
    {
        return true;
    }

    /**
     * Create user-related custom attributes. newrelic_add_custom_parameter is more flexible.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_set_user_attributes
     */
    function newrelic_set_user_attributes(string $user, string $account, string $product): bool
    {
        return true;
    }

    /**
     * Associate a unique user ID with the current transaction.
     *
     * @see https://docs.newrelic.com/docs/apm/agents/php-agent/php-agent-api/newrelic_set_user_id/
     */
    function newrelic_set_user_id(string $user_id): void {}

    /**
     * Starts a new transaction, usually after manually ending a transaction.
     *
     * @see https://docs.newrelic.com/docs/agents/php-agent/php-agent-api/newrelic_start_transaction
     */
    function newrelic_start_transaction(string $appname, string $license = ''): bool
    {
        return true;
    }
}
