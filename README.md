<div align="center">
  <h1>🎓 مولد الشهادات الاحترافي</h1>
  <p><strong>نظام متقدم لإنشاء وتخصيص الشهادات الرقمية</strong></p>
  
  <br/>
  
  [![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue?style=flat-square&logo=php)](https://php.net)
  [![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)
  [![Version](https://img.shields.io/badge/Version-1.0.0-orange?style=flat-square)](CHANGELOG)
  [![Status](https://img.shields.io/badge/Status-Active-brightgreen?style=flat-square)](README.md)
  
  <br/>
  
  <h3>
    <a href="#-العربية">العربية</a> •
    <a href="#-english">English</a> •
    <a href="https://macrogreenltd.com/verify/">التحقق من الشهادات</a>
  </h3>
</div>

---

## 🇸🇦 العربية

### 📌 نظرة عامة

**مولد الشهادات** هو منصة احترافية متطورة لإنشاء وتخصيص الشهادات الرقمية بكفاءة عالية. توفر النظام حلاً شاملاً وقابلاً للتوسع مع دعم كامل للغة العربية وأفضل معايير الأمان.

### ✨ المميزات الرئيسية

| الميزة               | الوصف                                           |
| -------------------- | ----------------------------------------------- |
| 🎨 **تخصيص كامل**    | إنشاء شهادات مخصصة وديناميكية حسب احتياجاتك     |
| 🌍 **دعم عربي كامل** | دعم شامل للغة العربية والكتابة من اليمين لليسار |
| 🔒 **أمان عالي**     | معالجة آمنة للبيانات مع أفضل معايير الحماية     |
| 📈 **قابل للتوسع**   | بنية نظام مرنة قابلة للتطوير والتوسع            |
| ⚡ **سهل الاستخدام** | واجهة بديهية وسهلة الاستخدام للمطورين           |
| 📤 **تصدير متعدد**   | دعم عدة صيغ للتصدير (PDF، الصور، وأكثر)         |

### 📋 المتطلبات النظامية

- **PHP** : الإصدار 7.4 أو أحدث
- **خادم الويب** : Apache أو Nginx أو IIS
- **قاعدة البيانات** : اختيارية (حسب احتياجات المشروع)
- **الذاكرة** : 512 MB على الأقل

### 📁 هيكل المشروع

```
mg-certificates/
│
├── 📄 mg-certificates-arabic-pro.php    ← الملف الرئيسي للنظام
├──
├── 📂 includes/
│   └── 🔧 core.php                      ← الوظائف الأساسية والمكتبات
│
├── 📂 templates/
│   └── 🎨 cert.php                      ← قالب الشهادة الأساسي
│
└── 📄 README.md                         ← ملف التوثيق
```

### 🚀 بدء الاستخدام

#### 1️⃣ التثبيت والإعداد

```bash
# نسخ الملفات إلى خادم الويب
cp -r mg-certificates /var/www/html/

# تعديل صلاحيات المجلدات
chmod -R 755 mg-certificates

# التأكد من وجود صلاحيات الكتابة للملفات المؤقتة
chmod -R 777 mg-certificates/uploads/
```

#### 2️⃣ التكوين الأولي

تأكد من تعديل الإعدادات الأساسية في ملف `mg-certificates-arabic-pro.php`:

- معلومات الشركة/المؤسسة
- إعدادات قاعدة البيانات (إن وجدت)
- المسارات والروابط الأمنية

#### 3️⃣ إنشاء الشهادات

```php
<?php
require_once 'includes/core.php';

// تحضير بيانات الشهادة
$certificate_data = [
    'recipient_name' => 'اسم المتلقي',
    'course_name'    => 'اسم البرنامج/الدورة',
    'issue_date'     => date('Y-m-d'),
    'certificate_id' => uniqid('CERT-')
];

// إنشاء الشهادة
if (generate_certificate($certificate_data)) {
    echo "تم إنشاء الشهادة بنجاح ✓";
} else {
    echo "حدث خطأ في إنشاء الشهادة";
}
?>
```

### 📚 الملفات الرئيسية

#### 🔧 `mg-certificates-arabic-pro.php`

الملف الرئيسي الذي يحتوي على:

- منطق النظام الأساسي والمعالجة
- للإعدادات الرئيسية
- معالجة الطلبات من المستخدمين

#### 🛠️ `includes/core.php`

مكتبة الوظائف الأساسية تتضمن:

- دوال معالجة الشهادات
- وظائف التحقق والصحة البيانية
- دوال الأمان والتشفير
- دوال التصدير والطباعة

#### 🎨 `templates/cert.php`

قالب HTML قابل للتخصيص يحتوي على:

- تصميم الشهادة الأساسي
- متغيرات ديناميكية قابلة للتخصيص
- أنماط CSS قابلة للتعديل

---

## 🇬🇧 English

### 📌 Overview

**Certificate Generator** is a professional advanced platform for creating and customizing digital certificates with high efficiency. The system provides a comprehensive solution with complete Arabic language support and follows the best security standards.

### ✨ Key Features

| Feature                        | Description                                                     |
| ------------------------------ | --------------------------------------------------------------- |
| 🎨 **Full Customization**      | Create custom and dynamic certificates according to your needs  |
| 🌍 **Complete Arabic Support** | Comprehensive support for Arabic language and RTL writing       |
| 🔒 **High Security**           | Safe data processing with the best protection standards         |
| 📈 **Scalable**                | Flexible system architecture that can be developed and extended |
| ⚡ **Easy to Use**             | Intuitive interface easy for developers to use                  |
| 📤 **Multiple Export**         | Support for multiple export formats (PDF, images, and more)     |

### 📋 System Requirements

- **PHP** : Version 7.4 or newer
- **Web Server** : Apache, Nginx, or IIS
- **Database** : Optional (based on project needs)
- **Memory** : 512 MB minimum

### 📁 Project Structure

```
mg-certificates/
│
├── 📄 mg-certificates-arabic-pro.php    ← Main system file
├──
├── 📂 includes/
│   └── 🔧 core.php                      ← Core functions and libraries
│
├── 📂 templates/
│   └── 🎨 cert.php                      ← Basic certificate template
│
└── 📄 README.md                         ← Documentation file
```

### 🚀 Getting Started

#### 1️⃣ Installation & Setup

```bash
# Copy files to the web server
cp -r mg-certificates /var/www/html/

# Modify folder permissions
chmod -R 755 mg-certificates

# Ensure write permissions for temporary files
chmod -R 777 mg-certificates/uploads/
```

#### 2️⃣ Initial Configuration

Make sure to modify the basic settings in `mg-certificates-arabic-pro.php`:

- Company/Organization information
- Database settings (if any)
- Paths and security links

#### 3️⃣ Creating Certificates

```php
<?php
require_once 'includes/core.php';

// Prepare certificate data
$certificate_data = [
    'recipient_name' => 'Recipient Name',
    'course_name'    => 'Program/Course Name',
    'issue_date'     => date('Y-m-d'),
    'certificate_id' => uniqid('CERT-')
];

// Generate the certificate
if (generate_certificate($certificate_data)) {
    echo "Certificate created successfully ✓";
} else {
    echo "Error creating certificate";
}
?>
```

### 📚 Main Files

#### 🔧 `mg-certificates-arabic-pro.php`

The main file containing:

- Core system logic and processing
- Main settings
- User request handling

#### 🛠️ `includes/core.php`

Basic functions library includes:

- Certificate processing functions
- Verification and data validation functions
- Security and encryption functions
- Export and print functions

#### 🎨 `templates/cert.php`

Customizable HTML template containing:

- Basic certificate design
- Dynamic customizable variables
- Editable CSS styles

---

### 💬 Support & Help

For more information or to report issues, please contact us at:

- 📧 Email: support@macrogreenltd.com
- 🌐 Website: https://macrogreenltd.com

---

<div align="center">

## 🔐 Certificate Verification

### Verify Certificate Authenticity

**[🔗 Visit Verification Portal](https://macrogreenltd.com/verify/)**

You can verify the authenticity of all certificates issued through this system using our official verification platform.

---

## 📝 License & Version

| Property            | Value               |
| ------------------- | ------------------- |
| 📜 **License**      | MIT License         |
| 📦 **Version**      | 1.0.0               |
| 📅 **Last Updated** | April 1, 2026       |
| ✅ **Status**       | Active & Maintained |

---

## 🤝 Contributing

We welcome contributions! If you have suggestions for improvements or find bugs, please let us know.

---

<p>
  <strong>Made with ❤️ for the Communities</strong>
  <br/>
  © 2026 Macro Green Ltd. All Rights Reserved.
</p>

</div>
