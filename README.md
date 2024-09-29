## **API Documentation**

### Base URL
```plaintext
http://your-domain.com/api
```

---

### **Authentication**
- **Required**: Optional (if using Laravel Sanctum for secured routes)
- **Header**: `Authorization: Bearer {token}`

---

## **Wallet API**

### 1. **Get All Wallets**
- **Endpoint**: `GET /wallets`
- **Description**: Retrieve a list of all wallets.
- **Response**:
  - **200 OK**:
    ```json
    [
        {
            "id": 1,
            "user_id": 1,
            "balance": "100.00",
            "created_at": "2024-09-29T12:00:00.000000Z",
            "updated_at": "2024-09-29T12:00:00.000000Z"
        }
    ]
    ```

### 2. **Create a New Wallet**
- **Endpoint**: `POST /wallets`
- **Description**: Create a new wallet for a user.
- **Request Body**:
  ```json
  {
      "user_id": 1,
      "balance": "50.00"
  }
  ```
- **Response**:
  - **201 Created**:
    ```json
    {
        "id": 1,
        "user_id": 1,
        "balance": "50.00",
        "created_at": "2024-09-29T12:00:00.000000Z",
        "updated_at": "2024-09-29T12:00:00.000000Z"
    }
    ```

### 3. **Get Wallet by ID**
- **Endpoint**: `GET /wallets/{id}`
- **Description**: Retrieve details of a specific wallet by its ID.
- **Response**:
  - **200 OK**:
    ```json
    {
        "id": 1,
        "user_id": 1,
        "balance": "50.00",
        "created_at": "2024-09-29T12:00:00.000000Z",
        "updated_at": "2024-09-29T12:00:00.000000Z"
    }
    ```
  - **404 Not Found**:
    ```json
    {
        "message": "Wallet not found."
    }
    ```

### 4. **Update Wallet**
- **Endpoint**: `PUT /wallets/{id}`
- **Description**: Update a wallet's balance or other details.
- **Request Body**:
  ```json
  {
      "balance": "75.00"
  }
  ```
- **Response**:
  - **200 OK**:
    ```json
    {
        "id": 1,
        "user_id": 1,
        "balance": "75.00",
        "created_at": "2024-09-29T12:00:00.000000Z",
        "updated_at": "2024-09-29T13:00:00.000000Z"
    }
    ```

### 5. **Delete Wallet**
- **Endpoint**: `DELETE /wallets/{id}`
- **Description**: Delete a wallet.
- **Response**:
  - **204 No Content**

---

## **Transaction API**

### 1. **Get All Transactions**
- **Endpoint**: `GET /transactions`
- **Description**: Retrieve a list of all transactions.
- **Response**:
  - **200 OK**:
    ```json
    [
        {
            "id": 1,
            "wallet_id": 1,
            "amount": "20.00",
            "type": "credit",
            "description": "Salary",
            "created_at": "2024-09-29T12:00:00.000000Z",
            "updated_at": "2024-09-29T12:00:00.000000Z"
        }
    ]
    ```

### 2. **Create a New Transaction**
- **Endpoint**: `POST /transactions`
- **Description**: Create a new transaction for a wallet.
- **Request Body**:
  ```json
  {
      "wallet_id": 1,
      "amount": "100.00",
      "type": "credit",
      "description": "Deposit"
  }
  ```
- **Response**:
  - **201 Created**:
    ```json
    {
        "id": 1,
        "wallet_id": 1,
        "amount": "100.00",
        "type": "credit",
        "description": "Deposit",
        "created_at": "2024-09-29T12:00:00.000000Z",
        "updated_at": "2024-09-29T12:00:00.000000Z"
    }
    ```

### 3. **Get Transaction by ID**
- **Endpoint**: `GET /transactions/{id}`
- **Description**: Retrieve details of a specific transaction by its ID.
- **Response**:
  - **200 OK**:
    ```json
    {
        "id": 1,
        "wallet_id": 1,
        "amount": "100.00",
        "type": "credit",
        "description": "Deposit",
        "created_at": "2024-09-29T12:00:00.000000Z",
        "updated_at": "2024-09-29T12:00:00.000000Z"
    }
    ```
  - **404 Not Found**:
    ```json
    {
        "message": "Transaction not found."
    }
    ```

### 4. **Update Transaction**
- **Endpoint**: `PUT /transactions/{id}`
- **Description**: Update details of a transaction.
- **Request Body**:
  ```json
  {
      "amount": "120.00",
      "description": "Updated Deposit"
  }
  ```
- **Response**:
  - **200 OK**:
    ```json
    {
        "id": 1,
        "wallet_id": 1,
        "amount": "120.00",
        "type": "credit",
        "description": "Updated Deposit",
        "created_at": "2024-09-29T12:00:00.000000Z",
        "updated_at": "2024-09-29T13:00:00.000000Z"
    }
    ```

### 5. **Delete Transaction**
- **Endpoint**: `DELETE /transactions/{id}`
- **Description**: Delete a transaction.
- **Response**:
  - **204 No Content**

---

### **Common Response Codes**
- **200 OK**: The request was successful.
- **201 Created**: A resource was successfully created.
- **204 No Content**: The resource was successfully deleted.
- **400 Bad Request**: The request was invalid.
- **404 Not Found**: The requested resource was not found.
- **500 Internal Server Error**: A server error occurred.

---

It is recommended to secure these endpoints using authentication methods like Laravel Sanctum to prevent unauthorized access.
