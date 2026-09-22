# LastDatabase Developer Resources

Official developer resources for [LastDatabase](https://lastdatabase.com/).

LastDatabase provides business data discovery, API access, CRM integrations, and tools for working with supported business contact data.

## Official Website

https://lastdatabase.com/

## Developer Documentation

- [Documentation](https://lastdatabase.com/docs)
- [API Documentation](https://lastdatabase.com/docs/api)
- [API Authentication](https://lastdatabase.com/docs/api/authentication)
- [API Search and Filtering](https://lastdatabase.com/docs/api/search)

## CRM Integrations

LastDatabase supports direct CRM integration workflows for eligible contacts.

- [HubSpot Integration](https://lastdatabase.com/docs/hubspot-integration)
- [Salesforce Integration](https://lastdatabase.com/docs/salesforce-integration)
- [Zoho CRM Integration](https://lastdatabase.com/docs/zoho-crm-integration)

## Chrome Extension

LastDatabase also provides a Chrome extension for supported browser-based workflows.

[LastDatabase on the Chrome Web Store](https://chromewebstore.google.com/detail/lastdatabase/dmgaidnffohmehblenpfigebajgcegbl)

## API

The LastDatabase API provides supported programmatic access for eligible accounts and plans.

Applications should use only parameters, authentication methods, and response fields documented for the active API service.

Do not expose API credentials in:

- client-side JavaScript
- public repositories
- screenshots
- shared documents

Start with the official [API documentation](https://lastdatabase.com/docs/api).

## Integration Resources

Additional integration documentation is available in this repository:

- [HubSpot](integrations/hubspot.md)
- [Salesforce](integrations/salesforce.md)
- [Zoho CRM](integrations/zoho.md)

## Security

Never commit LastDatabase API credentials, CRM OAuth credentials, access tokens, customer records, downloaded datasets, or other private information to a public repository.

See [SECURITY.md](SECURITY.md).

## Responsible Use

Developers are responsible for using LastDatabase services and data in accordance with applicable requirements and the LastDatabase policies.

- [Compliance](https://lastdatabase.com/compliance)
- [Privacy](https://lastdatabase.com/privacy)
- [Terms](https://lastdatabase.com/terms)

## Links

- Website: https://lastdatabase.com/
- Documentation: https://lastdatabase.com/docs
- API: https://lastdatabase.com/api

## OpenAPI Specification

The canonical machine-readable OpenAPI 3.1 specification is published by LastDatabase:

- https://lastdatabase.com/openapi.yaml

A repository copy is also available:

- [openapi/openapi.yaml](openapi/openapi.yaml)

Use the canonical LastDatabase URL for API discovery, tooling, and automated specification retrieval.

## API Examples

Examples for the LastDatabase Lead Search API:

- [API Search Guide](docs/api-search.md)
- [cURL / Bash](examples/curl/search-leads.sh)
- [PHP](examples/php/search-leads.php)
- [Python](examples/python/search_leads.py)
- [JavaScript / Node.js 18+](examples/javascript/search-leads.js)

All examples use the `LASTDATABASE_API_KEY` environment variable.

Never commit a real API key to source control.

See the [official API documentation](https://lastdatabase.com/docs/api).
