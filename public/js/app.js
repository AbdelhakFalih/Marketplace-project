const translations = {
    fr: {
        title: "Marketplace Coopératives - Accueil",
        header: "Marketplace Coopératives",
        home: "Accueil",
        products: "Produits",
        about: "À propos",
        contact: "Contact",
        cooperatives: "Coopératives",
        login: "Connexion",
        register: "Inscription",
        registerTitle: "Inscription",
        loginTitle: "Connexion",
        fullName: "Nom complet",
        email: "Email",
        password: "Mot de passe",
        confirmPassword: "Confirmer le mot de passe",
        role: "Rôle",
        selectRole: "Choisissez votre rôle",
        cooperative: "Coopérative",
        merchant: "Commerçant",
        signUp: "S'inscrire",
        alreadyAccount: "Déjà un compte ? Connectez-vous",
        noAccount: "Pas de compte ? Inscrivez-vous",
        forgotPassword: "Mot de passe oublié ?",
        loginRequiredModal: "Connexion Requise",
        loginPrompt: "Veuillez vous connecter pour accéder au contenu.",
        welcome: "Bienvenue sur votre",
        accountManagement: "Gestion des Comptes",
        offerManagement: "Gestion des Offres",
        activitySummary: "Résumé de votre activité",
        publishedOffers: "Offres publiées",
        sentRequests: "Demandes envoyées",
        notifications: "Notifications",
        earnedPoints: "Points gagnés",
        userDashboard: "Tableau de bord",
        profile: "Profil",
        offers: "Mes Offres",
        logout: "Déconnexion",
        addOffer: "Ajouter une offre",
        addRequest: "Ajouter une demande",
        viewNotifications: "Voir les notifications",
        editProfile: "Modifier mon profil",
        addUser: "Ajouter un utilisateur",
        ViewOffer: "Voir les offres",
        ViewRequest: "Voir les demandes",
        LinkOfferRequest: "Lier une demande avec offre",
        viewDetails: "Voir Détails",
        delete: "Supprimer",
        copyright: "© 2025 Marketplace Coopératives - Tous droits réservés",
        terms: "Conditions d'utilisation",
        privacy: "Politique de confidentialité",
        errorOops: "Oops!",
        errorMessage: "Une erreur est survenue",
        backHome: "Retour à l'accueil",
        featured: "Produits en vedette",
        product1: "Produit Local 1",
        product1Desc: "Frais et authentique",
        product2: "Produit Local 2",
        product2Desc: "Qualité coopérative",
        product3: "Produit Local 3",
        product3Desc: "Soutien local",
        prev: "Précédent",
        next: "Suivant",
        loginRequired: "Connexion requise pour accéder à cette page"
    },
    ar: {
        title: "سوق التعاونيات - الرئيسية",
        header: "سوق التعاونيات",
        home: "الرئيسية",
        products: "المنتجات",
        about: "عننا",
        contact: "تواصل معنا",
        cooperatives: "التعاونيات",
        login: "تسجيل الدخول",
        register: "التسجيل",
        registerTitle: "التسجيل",
        loginTitle: "تسجيل الدخول",
        fullName: "الاسم الكامل",
        email: "البريد الإلكتروني",
        password: "كلمة المرور",
        confirmPassword: "تأكيد كلمة المرور",
        role: "الدور",
        selectRole: "اختر دورك",
        cooperative: "تعاونية",
        merchant: "تاجر",
        signUp: "تسجيل",
        alreadyAccount: "لديك حساب بالفعل؟ تسجيل الدخول",
        noAccount: "ليس لديك حساب؟ سجل الآن",
        forgotPassword: "نسيت كلمة المرور؟",
        loginRequiredModal: "تسجيل الدخول مطلوب",
        loginPrompt: "يرجى تسجيل الدخول للوصول إلى المحتوى.",
        welcome: "مرحبا بك في",
        accountManagement: "إدارة الحسابات",
        offerManagement: "إدارة العروض",
        activitySummary: "ملخص نشاطك",
        publishedOffers: "العروض المنشورة",
        sentRequests: "الطلبات المرسلة",
        notifications: "الإشعارات",
        earnedPoints: "النقاط المكتسبة",
        userDashboard: "لوحة التحكم",
        profile: "الملف الشخصي",
        offers: "عروضي",
        logout: "تسجيل الخروج",
        addOffer: "إضافة عرض",
        addRequest: "إضافة طلب",
        viewNotifications: "عرض الإشعارات",
        editProfile: "تعديل ملفي الشخصي",
        addUser: "إضافة مستخدم",
        ViewOffer: "عرض العروض",
        ViewRequest: "عرض الطلبات",
        LinkOfferRequest: "ربط طلب مع عرض",
        viewDetails: "عرض التفاصيل",
        delete: "حذف",
        copyright: "© 2025 سوق التعاونيات - جميع الحقوق محفوظة",
        terms: "شروط الاستخدام",
        privacy: "سياسة الخصوصية",
        errorOops: "عذرًا!",
        errorMessage: "حدث خطأ",
        backHome: "العودة إلى الرئيسية",
        featured: "المنتجات المميزة",
        product1: "منتج محلي 1",
        product1Desc: "طازج وأصلي",
        product2: "منتج محلي 2",
        product2Desc: "جودة تعاونية",
        product3: "منتج محلي 3",
        product3Desc: "دعم محلي",
        prev: "السابق",
        next: "التالي",
        loginRequired: "تسجيل الدخول مطلوب للوصول إلى هذه الصفحة"
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
