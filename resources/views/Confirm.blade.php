<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد حجز مقعد لطفلك</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        
        .confirmation-container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        h2 {
            color: #444;
        }
        
        p {
            font-size: 1.2em;
            margin: 10px 0;
        }
        
        .action-buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .action-buttons button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            margin: 0 10px;
            cursor: pointer;
        }
        
        .action-buttons button:hover {
            background-color: #0056b3;
        }
        
        .map-container {
            margin-top: 30px;
            text-align: center;
        }
        
        .map-container iframe {
            width: 100%;
            max-width: 600px;
            height: 300px;
            border: 0;
        }
        
    </style>
</head>
<body>
    <div class="confirmation-container">
        <h1>تأكيد حجز مقعد لطفلك</h1>
        
        <!-- معلومات ولي الأمر -->
        <div class="parent-info">
            <h2>معلومات ولي الأمر</h2>
            <p>الاسم: <span id="parent-name">محمد أحمد</span></p>
            <p>البريد الإلكتروني: <span id="parent-email">mohammed@example.com</span></p>
        </div>

        <!-- معلومات الفصل المحجوز -->
        <div class="class-info">
            <h2>معلومات الفصل المحجوز</h2>
            <p>اسم الفصل: <span id="class-name">Drawing Class</span></p>
            <p>العمر المطلوب للأطفال: <span id="class-age">3 - 6 سنوات</span></p>
            <p>عدد المقاعد المتبقية: <span id="seats-remaining">5</span></p>
            <p>وقت بدء الفصل: <span id="class-time">08:00 - 10:00 صباحًا</span></p>
            <p>الرسوم الدراسية: <span id="class-fees">290 دولار شهريًا</span></p>
        </div>

        <!-- معلومات إضافية -->
        <div class="additional-info">
            <p>تم إرسال تفاصيل الحجز إلى بريدك الإلكتروني.</p>
            <p>للاستفسارات أو أي تفاصيل أخرى، يمكنك التواصل مع إدارة الحضانة.</p>
        </div>

        <!-- أزرار التفاعل -->
        <div class="action-buttons">
            <button onclick="window.print()">طباعة الإيصال</button>
            <button onclick="window.location.href='index.html'">العودة إلى الصفحة الرئيسية</button>
            <button onclick="window.location.href='classes.html'">عرض الفصول الأخرى</button>
        </div>

        <!-- خريطة الموقع (اختياري) -->
        <div class="map-container">
            <h2>موقع الحضانة</h2>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.916933444986!2d144.96332!3d-37.81362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43b09b0c05%3A0x5e17b26b0b7a0a0!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1600212159641!5m2!1sen!2sau" 
                width="600" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                aria-hidden="false" 
                tabindex="0">
            </iframe>
        </div>
    </div>
</body>
</html>
