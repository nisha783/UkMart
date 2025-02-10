<!DOCTYPE html>
<html>
<head>
<style>
body {
    margin: 0;
    padding: 0;
    background: #f5f5f5;
}

.email-container {
    max-width: 500px;
    margin: 20px auto;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.header {
    background: #374151;
    padding: 30px;
    text-align: center;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.logo img {
    width: 200px;
    height: 20px;
}

.content {
    padding: 30px;
}

.title {
    color: #374151;
    font-size: 20px;
    margin-bottom: 20px;
    text-align: center;
}

.text {
    color: #6B7280;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 25px;
}

.button {
    background: #10B981;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    font-size: 14px;
    cursor: pointer;
    margin-bottom: 20px;
    display: block;
    text-align: center;
    text-decoration: none;
}

.footer {
    text-align: center;
    padding: 20px;
    border-top: 1px solid #E5E7EB;
}

.footer img {
    height: 20px;
}
</style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">
                <h4 class="" style="color:white;">UKMEGAMART</h4>

            </div>
        </div>
        <div class="content">
            <h1 class="title">Order Placed Successfully!</h1>
            <p class="text">Hello,{{auth()->user()->name}}</p>
            <p class="text">Thank you for your order! Your order has been placed successfully, and we are now processing it.</p>
            <p class="text">We will notify you once your order is shipped. You can track your order status from your account.</p>
            <p class="text">If you have any questions, feel free to contact our support team.</p>
            <a href="{{ route('user.order.show', $order->id) }}" class="button">View Order Details</a>
            <p class="text">Thank you for shopping with us!</p>
        </div>
        <div class="footer">
            <p class="text">© {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
