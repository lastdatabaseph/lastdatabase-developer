#!/usr/bin/env bash

set -euo pipefail

main() {
    if [ -z "${LASTDATABASE_API_KEY:-}" ]; then
        echo "ERROR: LASTDATABASE_API_KEY is not set."
        echo
        echo "Set it with:"
        echo 'export LASTDATABASE_API_KEY="YOUR_API_KEY"'
        return 1
    fi

    curl \
        --fail-with-body \
        --silent \
        --show-error \
        --get \
        --header "Authorization: Bearer ${LASTDATABASE_API_KEY}" \
        --header "Accept: application/json" \
        --data-urlencode "type=email" \
        --data-urlencode "country=usa" \
        --data-urlencode "industry=healthcare" \
        --data-urlencode "limit=10" \
        "https://lastdatabase.com/api/leads/search"

    echo
}

main "$@"
