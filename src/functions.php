<?php

/**
 * Validates the $document (containing a valid JSON) against the $schema (containing a valid JSON Schema)
 *
 * Returns TRUE if the validation passed, FALSE otherwise
 */
function jsonschema_validate(string $document, string $schema): bool {}

/**
 * Returns an array with errors in the last jsonschema_validate function call. If there were no errors or no previous
 * call was made, it will return an empty array
 */
function jsonschema_last_error_msg(): array {}

