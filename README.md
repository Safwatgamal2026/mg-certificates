# مولد الشهادات | Certificate Generator

---

## 🇸🇦 العربية

### نظرة عامة

**مولد الشهادات** هو نظام PHP متقدم لإنشاء وتخصيص الشهادات الرقمية بسهولة. يوفر الحل واجهة احترافية وقابلة للتوسع لإدارة ومعالجة الشهادات.

### المميزات ✨

- ✅ إنشاء شهادات مخصصة وديناميكية
- ✅ دعم اللغة العربية الكامل
- ✅ معالجة آمنة للبيانات
- ✅ نظام قابل للتوسع والتطوير
- ✅ واجهة سهلة الاستخدام
- ✅ دعم عدة تنسيقات للتصدير

### متطلبات التثبيت

- **PHP** 7.4 أو أعلى
- **خادم الويب** (Apache أو Nginx)
- **قاعدة البيانات** (اختياري - حسب الاحتياجات)

### البنية الأساسية

```
mg-certificates/
├── mg-certificates-arabic-pro.php  # الملف الرئيسي للنظام
├── includes/
│   └── core.php                    # الوظائف الأساسية والمكتبات
├── templates/
│   └── cert.php                    # قالب الشهادة الأساسي
└── README.md                       # هذا الملف
```

### الاستخدام 🚀

#### 1. التثبيت الأساسي

```bash
# نسخ الملفات إلى خادم الويب الخاص بك
cp -r mg-certificates /var/www/html/

# تعديل الصلاحيات
chmod -R 755 mg-certificates
```

#### 2. الإعدادات الأولية

اتبع التعليمات الموجودة في ملف `mg-certificates-arabic-pro.php` لضبط الإعدادات الأساسية.

#### 3. إنشاء الشهادات

```php
<?php
require_once 'includes/core.php';

// تحديد بيانات الشهادة
$certificate_data = [
    'name' => 'اسم المتلقي',
    'course' => 'اسم الدورة',
    'date' => date('Y-m-d')
];

// إنشاء الشهادة
generate_certificate($certificate_data);
?>
```

### الملفات الرئيسية

#### `mg-certificates-arabic-pro.php`

الملف الرئيسي الذي يحتوي على منطق النظام والمعالجة الأساسية.

#### `includes/core.php`

يحتوي على:

- الوظائف الأساسية للنظام
- دوال معالجة الشهادات
- وظائف التحقق والأمان

#### `templates/cert.php`

قالب HTML لتصميم الشهادات القابل للتخصيص.

### الدعم والمساعدة 💬

للمزيد من المعلومات أو الإبلاغ عن مشاكل، يرجى التواصل معنا.

### التحقق من الشهادات 🔐

يمكنك التحقق من صحة الشهادات من خلال الموقع الرسمي:
**[https://macrogreenltd.com/verify/](https://macrogreenltd.com/verify/)**

---

## 🇬🇧 English

### Overview

**Certificate Generator** is an advanced PHP system for creating and customizing digital certificates with ease. It provides a professional and scalable solution for managing and processing certificates.

### Features ✨

- ✅ Create custom and dynamic certificates
- ✅ Full Arabic language support
- ✅ Secure data handling
- ✅ Scalable and extensible system
- ✅ User-friendly interface
- ✅ Multiple export format support

### Requirements

- **PHP** 7.4 or higher
- **Web Server** (Apache or Nginx)
- **Database** (Optional - based on needs)

### Project Structure

```
mg-certificates/
├── mg-certificates-arabic-pro.php  # Main system file
├── includes/
│   └── core.php                    # Core functions and libraries
├── templates/
│   └── cert.php                    # Basic certificate template
└── README.md                       # This file
```

### How to Use 🚀

#### 1. Basic Installation

```bash
# Copy files to your web server
cp -r mg-certificates /var/www/html/

# Set permissions
chmod -R 755 mg-certificates
```

#### 2. Initial Setup

Follow the instructions in `mg-certificates-arabic-pro.php` to configure the basic settings.

#### 3. Generate Certificates

```php
<?php
require_once 'includes/core.php';

// Define certificate data
$certificate_data = [
    'name' => 'Recipient Name',
    'course' => 'Course Name',
    'date' => date('Y-m-d')
];

// Generate the certificate
generate_certificate($certificate_data);
?>
```

### Main Files

#### `mg-certificates-arabic-pro.php`

The main file containing the system logic and basic processing.

#### `includes/core.php`

Contains:

- Core system functions
- Certificate processing functions
- Validation and security functions

#### `templates/cert.php`

Customizable HTML template for certificate design.

### Support & Help 💬

For more information or to report issues, please contact us.

### Certificate Verification 🔐

You can verify the authenticity of certificates through our official website:
**[https://macrogreenltd.com/verify/](https://macrogreenltd.com/verify/)**

---

## 📝 License

This project is provided as-is for development and educational purposes.

## 👨‍💻 Version

**Version**: 1.0.0  
**Last Updated**: 2026-04-01
