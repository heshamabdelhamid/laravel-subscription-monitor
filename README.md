# **Subscription Status Checker - Laravel & Redis**

## **Overview**

This Laravel project automates subscription status checks, updating expired subscriptions, and sending email notifications to users. It leverages **Redis** for handling queue jobs efficiently, ensuring smooth and optimized background processing.

## **Features**

-   ✅ Automatically detects expired subscriptions.
-   ✅ Updates the status of expired subscriptions.
-   ✅ Sends email notifications to users regarding their subscription status.
-   ✅ Utilizes **Redis** for background job management.
-   ✅ Implements Laravel’s **queue system** to enhance performance.

## **Tech Stack**

-   **Laravel** - PHP Framework for backend development.
-   **Redis** - Used for queue processing.
-   **Laravel Queues & Jobs** - Background task handling.
-   **Mail Notification System** - Sends email alerts to users.

## **Installation & Setup**

### **1. Clone the Repository**

```bash
git clone git@github.com:heshamabdelhamid/redis_examples.git
cd your-repo
```

### **2. Install Dependencies**

```bash
composer install
```

### **3. Configure Environment Variables**

Create a `.env` file and set up the following configurations:

```env
QUEUE_CONNECTION=redis
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=your-email@example.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@example.com
MAIL_FROM_NAME="Your App Name"
```

### **4. Run Database Migrations**

```bash
php artisan migrate
```

### **5. Start Redis & Queue Worker**

Make sure Redis is running:

```bash
redis-server
```

Then, start Laravel's queue worker:

```bash
php artisan queue:work
```

## **Usage**

-   The system will automatically check for expired subscriptions based on a scheduled task or cron job.
-   Once an expired subscription is detected, its status will be updated in the database.
-   An email notification will be sent to the user regarding the status change.

## **Contributing**

Feel free to **fork** this repository, submit **issues**, or create **pull requests** to improve the project.

## **License**

This project is open-source and available under the **MIT License**.
