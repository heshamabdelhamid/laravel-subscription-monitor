<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>مرحبًا بك!</title>
</head>

<body>
    <h1>مرحبًا {{ $customer->name }}!</h1>
    <p>تم انتهاء الاشتراك في الباقة {{ $subscription->plan->name }}</p>
</body>

</html>
