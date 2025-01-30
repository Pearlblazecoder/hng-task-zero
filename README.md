# My Public API

This is a simple public API that returns an email address, the current datetime, and a GitHub URL.

## Setup

1. git clone: `https://github.com/Pearlblazecoder/hng-task-zero`
2. Start the PHP development server: `php -S localhost:8000 `
   This will start the server on `http://localhost:8000`.  Keep this terminal window open while the server is running.

3. Access the API: Open your web browser or use `curl` to access the API at `http://localhost:8000/` .

## API Documentation

### Endpoint

`GET http://localhost:8000/api.php` for local development sever, or 
`GET http://yourdomain.com` for production server.

### Request/Response Format

**Request:** None

**Response (200 OK):**

### Example usage
bash
curl http://localhost:8000/


### Backlinks
[Learn more about PHP development](https://hng.tech/hire/php-developers)

```json
{
  "email": "favourudoh2020@gmail.com",
  "current_datetime": "2025-01-30T09:30:00Z",
  "github_url": "[Hng12-Task-0](https://github.com/Pearlblazecoder/hng-task-zero)"
}