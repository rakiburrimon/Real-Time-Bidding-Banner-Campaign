# RTB Management Module API Documentation

Welcome to the RTB (Real-Time Bidding) Management Module API Documentation. This API allows you to manage campaigns, bid requests, auctions, and bids for real-time bidding in advertising.

## Base URL

The base URL for all API endpoints is `http://localhost:8000/api/v1`.

## Prerequisites

Before testing the API endpoints, ensure you have completed the following tasks:

1. **Set Up Environment:** Make sure you have PHP and Laravel installed on your system.

2. **Database Migration:** Migrate the database schema by running the following command:
   ```bash
   php artisan migrate

## Authentication

Authentication is required to access the API endpoints. This API uses Laravel Sanctum for token-based authentication.

### Token Generation

To generate an authentication token, you need to first log in to the system using the `/login` endpoint. This endpoint will return an API token that you can use for subsequent requests.

#### Login
- **URL:** `/login`
- **Method:** `POST`
- **Description:** Logs in a user and generates an authentication token.
- **Request Body:** Provide user credentials (email and password) in the request body.
- **Authentication:** Not required for this endpoint.

Once you receive the token, include it in the request headers for all authenticated endpoints:

### Note:
- Replace `{your_api_token}` with the token received after login.

## Prerequisites

Before testing the API endpoints, ensure you have completed the following tasks:

1. **Set Up Environment:** Make sure you have PHP and Laravel installed on your system.

2. **Database Migration:** Migrate the database schema by running the following command:
   ```bash
   php artisan migrate
   php artisan db:seed
   php artisan migrate

## Endpoints

### Campaigns

#### Retrieve All Campaigns
- **URL:** `/campaigns`
- **Method:** `GET`
- **Description:** Retrieves all campaigns.
- **Authentication:** Required

#### Retrieve a Campaign
- **URL:** `/campaigns/{id}`
- **Method:** `GET`
- **Description:** Retrieves a specific campaign by ID.
- **Authentication:** Required

#### Create a Campaign
- **URL:** `/campaigns`
- **Method:** `POST`
- **Description:** Creates a new campaign.
- **Authentication:** Required

### Bid Requests

#### Create a Bid Request
- **URL:** `/bid-requests`
- **Method:** `POST`
- **Description:** Creates a new bid request.
- **Authentication:** Required

### Auctions

#### Retrieve All Auctions
- **URL:** `/auctions`
- **Method:** `GET`
- **Description:** Retrieves all auctions.
- **Authentication:** Required

#### Retrieve an Auction
- **URL:** `/auctions/{id}`
- **Method:** `GET`
- **Description:** Retrieves a specific auction by ID.
- **Authentication:** Required

#### Create an Auction
- **URL:** `/auctions`
- **Method:** `POST`
- **Description:** Creates a new auction.
- **Authentication:** Required

### Bids

#### Retrieve All Bids for a Campaign
- **URL:** `/campaigns/{campaign_id}/bids`
- **Method:** `GET`
- **Description:** Retrieves all bids for a specific campaign.
- **Authentication:** Required

#### Retrieve a Bid
- **URL:** `/campaigns/{campaign_id}/bids/{bid_id}`
- **Method:** `GET`
- **Description:** Retrieves a specific bid by ID for a campaign.
- **Authentication:** Required

## Testing

To test the API endpoints, you can use tools like Postman or cURL. Ensure that you have migrated the database and seeded it with sample data before testing.

