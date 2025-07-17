import 'bootstrap/dist/js/bootstrap.bundle.min.js';
const translations = {
    fr : {
    "header": "Marketplace Coopératives",
    "home": "Accueil",
    "products": "Produits",
    "about": "À propos",
    "contact": "Contact",
    "cooperatives": "Coopératives",
    "login": "Connexion",
    "register": "Inscription",
    "registerTitle": "Inscription",
    "loginTitle": "Connexion",
    "fullName": "Nom complet",
    "email": "Email",
    "password": "Mot de passe",
    "confirmPassword": "Confirmer le mot de passe",
    "role": "Rôle",
    "selectRole": "Choisissez votre rôle",
    "cooperative": "Coopérative",
    "merchant": "Commerçant",
    "signUp": "S'inscrire",
    "alreadyAccount": "Déjà un compte ? Connectez-vous",
    "noAccount": "Pas de compte ? Inscrivez-vous",
    "forgotPassword": "Mot de passe oublié ?",
    "loginRequiredModal": "Connexion Requise",
    "loginPrompt": "Veuillez vous connecter pour accéder au contenu",
    "userDashboard": "Tableau de bord",
    "profile": "Profil",
    "offers": "Mes Offres",
    "notifications": "Notifications",
    "logout": "Déconnexion",
    "addOffer": "➕ Ajouter une offre",
    "addRequest": "📌 Ajouter une demande",
    "viewNotifications": "🔔 Voir les notifications",
    "editProfile": "👤 Modifier mon profil",
    "addUser": "➕ Ajouter un utilisateur",
    "ViewOffer": "📌 Voir les offres",
    "ViewRequest": "📌 Voir les demandes",
    "LinkOfferRequest": "📌 Lier une demande avec offre",
    "copyright": "© 2025 Marketplace Coopératives - Tous droits réservés",
    "terms": "Conditions d'utilisation",
    "privacy": "Politique de confidentialité",
    "errorOops": "Oops!",
    "errorMessage": "Une erreur s'est produite",
    "backHome": "Retour à l'accueil",
    "loginRequired": "Connexion requise",
    "registrationDate": "Date d'Inscription",
    "lastModified": "Dernière modification",
    "passwordWarning": "* Affichage du mot de passe à des fins de démonstration uniquement. Ne pas utiliser en production.",
    "back": "Retour",
    "adminDashboard": "Tableau de bord Admin",
    "accountManagement": "Gestion des Comptes",
    "offerManagement": "Gestion des Offres",
    "roleLabel": "Rôle",
    "viewDetails": "Voir Détails",
    "delete": "Supprimer",
    "activitySummary": "Résumé de votre activité",
    "publishedOffers": "Offres publiées",
    "sentRequests": "Demandes envoyées",
    "earnedPoints": "Points gagnés",
    "signUpBtn": "Rejoindre maintenant",
    "featured": "Produits en vedette",
    "prev": "Précédent",
    "next": "Suivant"
},
    ar: {
        "header": "سوق التعاونيات",
        "home": "الرئيسية",
        "products": "المنتجات",
        "about": "حول",
        "contact": "اتصل بنا",
        "cooperatives": "التعاونيات",
        "login": "تسجيل الدخول",
        "register": "التسجيل",
        "registerTitle": "التسجيل",
        "loginTitle": "تسجيل الدخول",
        "fullName": "الاسم الكامل",
        "email": "البريد الإلكتروني",
        "password": "كلمة المرور",
        "confirmPassword": "تأكيد كلمة المرور",
        "role": "الدور",
        "selectRole": "اختر دورك",
        "cooperative": "تعاونية",
        "merchant": "تاجر",
        "signUp": "التسجيل",
        "alreadyAccount": "لديك حساب بالفعل؟ تسجيل الدخول",
        "noAccount": "ليس لديك حساب؟ سجل الآن",
        "forgotPassword": "هل نسيت كلمة المرور؟",
        "loginRequiredModal": "تسجيل الدخول مطلوب",
        "loginPrompt": "يرجى تسجيل الدخول للوصول إلى المحتوى",
        "userDashboard": "لوحة التحكم",
        "profile": "الملف الشخصي",
        "offers": "عروضي",
        "notifications": "الإشعارات",
        "logout": "تسجيل الخروج",
        "addOffer": "➕ إضافة عرض",
        "addRequest": "📌 إضافة طلب",
        "viewNotifications": "🔔 عرض الإشعارات",
        "editProfile": "👤 تعديل ملفي الشخصي",
        "addUser": "➕ إضافة مستخدم",
        "ViewOffer": "📌 عرض العروض",
        "ViewRequest": "📌 عرض الطلبات",
        "LinkOfferRequest": "📌 ربط طلب بعرض",
        "copyright": "© 2025 سوق التعاونيات - جميع الحقوق محفوظة",
        "terms": "شروط الاستخدام",
        "privacy": "سياسة الخصوصية",
        "errorOops": "عذرًا!",
        "errorMessage": "حدث خطأ",
        "backHome": "العودة إلى الرئيسية",
        "loginRequired": "تسجيل الدخول مطلوب",
        "registrationDate": "تاريخ التسجيل",
        "lastModified": "آخر تعديل",
        "passwordWarning": "* عرض كلمة المرور لأغراض العرض التوضيحي فقط. لا تستخدم في الإنتاج.",
        "back": "رجوع",
        "adminDashboard": "لوحة تحكم الإدارة",
        "accountManagement": "إدارة الحسابات",
        "offerManagement": "إدارة العروض",
        "roleLabel": "الدور",
        "viewDetails": "عرض التفاصيل",
        "delete": "حذف",
        "activitySummary": "ملخص نشاطك",
        "publishedOffers": "العروض المنشورة",
        "sentRequests": "الطلبات المرسلة",
        "earnedPoints": "النقاط المكتسبة",
        "signUpBtn": "انضم الآن",
        "featured": "المنتجات المميزة",
        "prev": "السابق",
        "next": "التالي"
    }
};

function changeLanguage(lang) {
    document.documentElement.lang = lang;
    document.documentElement.dir = lang === 'ar' ? 'rtl' : 'ltr';

    document.title = translations[lang].title;

    document.querySelectorAll('[data-i18n]').forEach(element => {
        const key = element.getAttribute('data-i18n');
        if (translations[lang][key]) {
            if (element.tagName === 'INPUT' || element.tagName === 'SELECT') {
                element.placeholder = translations[lang][key];
            } else {
                element.textContent = translations[lang][key];
            }
        }
    });

    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById(`lang-${lang}`).classList.add('active');

    localStorage.setItem('preferredLanguage', lang);
}

document.addEventListener('DOMContentLoaded', () => {
    const savedLang = localStorage.getItem('preferredLanguage') || 'fr';
    changeLanguage(savedLang);

    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const lang = btn.id.split('-')[1];
            changeLanguage(lang);
        });
    });
});

