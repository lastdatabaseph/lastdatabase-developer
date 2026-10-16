# LastDatabase MCP for DeepSeek Harness

## Overview

LastDatabase provides a hosted Model Context Protocol (MCP)
server for B2B business contact discovery and consumer email
lead research.

Website: https://lastdatabase.com

## MCP Server

Endpoint: https://lastdatabase.com/mcp

Transport: Streamable HTTP

Authentication: OAuth 2.0

## Capabilities

- Search B2B business contacts
- Discover consumer email leads
- Filter business contacts by geography
- Filter contacts by industry and job title
- Search by company and technology
- Retrieve masked lead previews where supported

## DeepSeek Harness Integration

DeepSeek Harness supports external MCP servers.

LastDatabase requires OAuth 2.0 authentication.

Before connecting, verify that your installed DeepSeek
Harness version supports the OAuth authorization flow
required by LastDatabase.

The endpoint alone is not sufficient to authenticate.

Do not place private access tokens in public configuration
files or GitHub repositories.

## Example Prompts

Find technology contacts in the United States.

Search for healthcare executives.

Find sales directors in California.

Search for consumer email leads in the United States.

## Account Requirements

Create a LastDatabase account:

https://lastdatabase.com

Available tools and usage limits depend on the account
and subscription.

## Documentation

https://lastdatabase.com/docs/api

## GitHub

https://github.com/lastdatabaseph/lastdatabase-developer

## Security

Use HTTPS and supported OAuth authorization mechanisms.

Never publish access tokens, customer records, or
downloaded contact datasets.

Follow applicable privacy and marketing regulations.
