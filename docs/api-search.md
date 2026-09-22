# LastDatabase Lead Search API

The LastDatabase Lead Search API provides programmatic access to supported email, phone, and fax lead data.

## Endpoint

GET https://lastdatabase.com/api/leads/search

## Authentication

Send your active API key as a Bearer token:

Authorization: Bearer YOUR_API_KEY

Never publish a real API key in source code or a public repository.

## Supported Parameters

- type — email, phone, or fax. Default: email.
- country — filter by country.
- city — filter by city.
- industry — filter by industry.
- keyword — supported keyword search.
- limit — number of records. Default: 25. Maximum: 100.

## Example Request

GET /api/leads/search?type=email&country=usa&industry=healthcare&limit=10

## Successful Response Structure

{
  "status": true,
  "type": "email",
  "count": 10,
  "data": []
}

Fields inside data depend on the lead type and available source data.

Applications should not assume every record contains every possible field.

## Pagination

The current endpoint does not expose page, offset, or cursor parameters.

## API Limits

Each active API key has a daily request limit determined by its API plan.

## Official Documentation

https://lastdatabase.com/docs/api

https://lastdatabase.com/docs/api/authentication

https://lastdatabase.com/docs/api/search

https://lastdatabase.com/api
